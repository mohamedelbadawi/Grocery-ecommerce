<?php

namespace App\Http\Livewire\Front;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartProducts extends Component
{

    protected $listeners = ['product-added' => 'render', 'product-removed' => 'render'];
    public function removeProduct($rowId)
    {
        \Cart::instance('cart')->remove($rowId);
        $this->emit('product-removed');
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'icon' => 'success',
            'message' => "product removed Successfully!!",
        ]);
    }

    public function render()
    {
        if (Auth::check()) {
            \Cart::instance('cart')->restore(auth()->user()->email);
        }
        $products = \Cart::instance('cart')->content();
        return view('livewire.front.cart-products', compact('products'));
    }
}
