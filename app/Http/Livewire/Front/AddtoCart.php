<?php

namespace App\Http\Livewire\Front;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddtoCart extends Component
{
    public $product;
    public $quantity = 1;
    public function mount($product)
    {
        $this->product = $product;
    }
    public function increment()
    {
        if ($this->product->stock < $this->quantity) {
            $this->quantity = $this->product->stock;
        } else {
            $this->quantity++;
        }
    }

    public function decrement()
    {
        if ($this->quantity == 1) {
            $this->quantity = 1;
        } else {
            $this->quantity--;
        }
    }

    public function addToCart()
    {


        \Cart::instance('cart')->add($this->product->id, $this->product->name, $this->quantity, $this->product->price, ['description' => $this->product->description, 'image' => $this->product->mainImage->image], 0);
        if (Auth::check()) {
            \Cart::instance('cart')->store(auth()->user()->email);
        }
        $this->emit('product-added');
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'icon' => 'success',
            'message' => "product Added Successfully!!",
        ]);
    }

    public function render()
    {
        return view('livewire.front.addto-cart');
    }
}
