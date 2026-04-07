@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center space-x-2">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-slate-500 bg-white/5 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 cursor-default rounded-xl opacity-50 backdrop-blur-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </span>
        @else
            <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl hover:bg-primary-600 hover:text-white dark:hover:bg-primary-500 transition-all duration-200 shadow-sm backdrop-blur-sm cursor-pointer group">
                <svg class="w-5 h-5 group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
        @endif

        {{-- Pagination Elements --}}
        <div class="hidden md:flex items-center space-x-2">
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-4 py-2 text-slate-400 dark:text-slate-600">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="relative inline-flex items-center px-4 py-2 text-sm font-bold text-white bg-gradient-to-r from-primary-600 to-indigo-600 rounded-xl shadow-lg shadow-primary-500/30 ring-2 ring-primary-500/20 ring-offset-2 dark:ring-offset-slate-900 border-none transition-all scale-105 z-10">
                                {{ $page }}
                            </span>
                        @else
                            <button wire:click="gotoPage({{ $page }})" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-slate-600 dark:text-slate-400 bg-white/5 dark:bg-slate-800/30 border border-white/10 dark:border-slate-700/50 rounded-xl hover:bg-white dark:hover:bg-slate-700 hover:text-primary-600 dark:hover:text-white hover:border-primary-500 transition-all duration-200 backdrop-blur-sm cursor-pointer hover:shadow-lg">
                                {{ $page }}
                            </button>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Mobile Indicator --}}
        <div class="flex items-center md:hidden px-4 text-sm font-medium text-slate-600 dark:text-slate-400">
            Hal {{ $paginator->currentPage() }} dari {{ $paginator->lastPage() }}
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-slate-700 dark:text-slate-300 bg-white dark:bg-slate-800/80 border border-slate-200 dark:border-slate-700 rounded-xl hover:bg-primary-600 hover:text-white dark:hover:bg-primary-500 transition-all duration-200 shadow-sm backdrop-blur-sm cursor-pointer group">
                <svg class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-slate-500 bg-white/5 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 cursor-default rounded-xl opacity-50 backdrop-blur-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </span>
        @endif
    </nav>
@endif
