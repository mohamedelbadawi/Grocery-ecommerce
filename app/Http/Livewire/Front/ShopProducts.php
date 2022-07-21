<?php

namespace App\Http\Livewire\Front;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ShopProducts extends Component
{
    public $selectedCategories = [];

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        $selectedCategories = $this->selectedCategories;
        $categories = Category::all();
        $products =
            Product::with(['category', 'mainImage'])
            ->where(function ($query) {
                $query->when(!empty($this->selectedCategories), function ($query) {
                    $query->whereHas('category', function ($query) {
                        $query->whereIn('id', $this->selectedCategories);
                    });
                });
            })
            ->paginate(12);

        return view('livewire.front.shop-products', compact('products', 'categories', 'selectedCategories'));
    }



    public function filterCategories($id)
    {
        if (($key = array_search($id, $this->selectedCategories)) !== false) {
            unset($this->selectedCategories[$key]);
        } else {
            $this->selectedCategories[] = $id;
        }
    }
}
