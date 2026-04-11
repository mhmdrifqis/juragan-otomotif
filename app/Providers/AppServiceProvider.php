<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            \Filament\Http\Responses\Auth\Contracts\LogoutResponse::class,
            \App\Http\Responses\LogoutResponse::class
        );
    }

    public function boot(): void
    {
        \Illuminate\Support\Facades\Gate::before(function ($user, $ability) {
            return $user->hasRole('super_admin') ? true : null;
        });

        \Illuminate\Pagination\Paginator::useTailwind();

        \Filament\Support\Facades\FilamentView::registerRenderHook(
            \Filament\View\PanelsRenderHook::HEAD_END,
            fn (): \Illuminate\Support\HtmlString => new \Illuminate\Support\HtmlString('
                <style>
                    /* === Premium Admin Styling === */
                    .fi-sidebar {
                        background-image: linear-gradient(to bottom, #f8fafc, #f1f5f9) !important;
                    }
                    .dark .fi-sidebar {
                        background-image: linear-gradient(to bottom, #0f172a, #0b1120) !important;
                    }
                    .fi-main-ctn {
                        background-color: #f8fafc !important;
                    }
                    .dark .fi-main-ctn {
                        background-color: #020617 !important;
                    }
                    .fi-wi-stats-overview-stat {
                        border-radius: 20px !important;
                        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.05) !important;
                    }
                    .fi-topbar nav {
                        backdrop-filter: blur(8px) !important;
                        background-color: rgba(255, 255, 255, 0.85) !important;
                        border-bottom: 1px solid rgba(226,232,240,0.6) !important;
                    }
                    .dark .fi-topbar nav {
                        background-color: rgba(15, 23, 42, 0.85) !important;
                        border-bottom: 1px solid rgba(51,65,85,0.5) !important;
                    }
                    /* Rounder cards */
                    .fi-section { border-radius: 20px !important; }
                    .fi-ta-ctn { border-radius: 16px !important; }
                    /* Brand logo area */
                    .fi-logo {
                        font-size: 1.1rem !important;
                        font-weight: 900 !important;
                        letter-spacing: -0.025em !important;
                    }
                </style>
            '),
        );
    }
}
