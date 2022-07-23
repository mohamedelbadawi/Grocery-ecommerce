<?php

namespace App\Http\Livewire\Front;

use App\Models\Address;
use Livewire\Component;

class UserAddresses extends Component
{

    public  $address;
    public function makeDefault($id)
    {
        if ($address = auth()->user()->addresses->where('default', 1)->first()) {
            $address->update(['default' => 0]);
        }
        $newDefaultAddress = Address::findOrFail($id);
        $newDefaultAddress->update(['default' => 1]);
    }

    public function render()
    {
        $usersAddresses = auth()->user()->addresses;

        return view('livewire.front.user-addresses', compact('usersAddresses'));
    }
}
