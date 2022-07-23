<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = ['product-added' => 'render', 'product-removed' => 'render'];
    public function render()
    {
        $count = \Cart::instance('cart')->content()->count();
        return view('livewire.front.cart-counter', compact('count'));
    }
}
