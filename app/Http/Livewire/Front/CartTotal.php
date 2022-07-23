<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class CartTotal extends Component
{
    protected $listeners = ['product-added' => 'render', 'product-removed' => 'render'];
    public function render()
    {
        return view('livewire.front.cart-total');
    }
}
