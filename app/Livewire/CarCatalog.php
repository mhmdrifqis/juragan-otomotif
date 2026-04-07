<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class CarCatalog extends Component
{
    use WithPagination;

    public $search = '';
    public $brand_id = '';
    public $category_id = '';
    public $transmission = '';

    // URL updating so users can share links with filters applied
    protected $queryString = [
        'search' => ['except' => ''],
        'brand_id' => ['except' => ''],
        'category_id' => ['except' => ''],
        'transmission' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingBrandId()
    {
        $this->resetPage();
    }

    public function updatingCategoryId()
    {
        $this->resetPage();
    }

    public function updatingTransmission()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->reset(['search', 'brand_id', 'category_id', 'transmission']);
        $this->resetPage();
    }

    public function toggleWishlist($carId)
    {
        if (!Auth::check()) {
            $this->dispatch('openAuthModal');
            return;
        }

        $existing = Wishlist::where('user_id', Auth::id())->where('car_id', $carId)->first();

        if ($existing) {
            $existing->delete();
        } else {
            Wishlist::create(['user_id' => Auth::id(), 'car_id' => $carId]);
        }
    }

    public function render()
    {
        $query = Car::with(['brand', 'category', 'images'])
                    ->where('status', 'available');

        if (!empty($this->search)) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }

        if (!empty($this->brand_id)) {
            $query->where('brand_id', $this->brand_id);
        }

        if (!empty($this->category_id)) {
            $query->where('category_id', $this->category_id);
        }

        if (!empty($this->transmission)) {
            $query->where('transmission', $this->transmission);
        }

        $cars = $query->latest()->paginate(12);
        
        $brands = Brand::orderBy('name')->get();
        $categories = Category::orderBy('name')->get();

        $wishlistedCarIds = Auth::check()
            ? Wishlist::where('user_id', Auth::id())->pluck('car_id')->toArray()
            : [];

        return view('livewire.car-catalog', [
            'cars' => $cars,
            'brands' => $brands,
            'categories' => $categories,
            'wishlistedCarIds' => $wishlistedCarIds,
        ])->layout('components.layouts.app', ['title' => 'Katalog Mobil - Juragan Otomotif']);
    }
}
