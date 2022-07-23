<?php

namespace App\Http\Livewire\Front;

use App\Models\Address;
use Livewire\Component;

class UserAddresses extends Component
{

    public $address;
    public  $city;
    public $street;
    public $code;
    public $building;
    public $formShow = false;

    protected $rules = [

        'city' => 'required',
        'street' => 'required',
        'code' => 'required',
        'building' => 'required',

    ];

    public function formShow()
    {
        if ($this->formShow == true) {
            $this->formShow = false;
        } else {
            $this->formShow = true;
        }
    }
    public function addAddress()
    {
        try {

            $this->validate();

            Address::create(['city' => $this->city, 'code' => $this->code, 'user_id' => auth()->id(), 'building' => $this->building, 'street' => $this->street]);
            $this->resetForm();
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'icon' => 'success',
                'message' => "Address Added successfully",
            ]);
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'icon' => 'success',
                'message' => "Address can't Added right now",
            ]);
        }
    }

    public function resetForm()
    {
        $this->city = '';
        $this->building = '';
        $this->code = '';
        $this->street = '';
    }
    public function makeDefault()
    {

        // dd($this->address);
        if ($address =  auth()->user()->defaultAddress->first()) {
            $address->update(['default' => 0]);
        }
        $newDefaultAddress = Address::findOrFail($this->address);
        $newDefaultAddress->update(['default' => 1]);


        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'icon' => 'success',
            'message' => "Address changed to default successfully",
        ]);
    }



    public function render()
    {
        $userAddresses = auth()->user()->addresses;
        // dd(0);

        return view('livewire.front.user-addresses', compact('userAddresses'));
    }
}
