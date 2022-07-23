<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        \Cart::instance('cart')->restore(auth()->user()->email);

        return [
            'user name' => auth()->user()->name,
            'user_id'=>auth()->id(),
            'products' => CartProductCollection::make(\Cart::instance('cart')->content()),
            'total'=>\Cart::instance('cart')->total()
            
        ];
    }
}
