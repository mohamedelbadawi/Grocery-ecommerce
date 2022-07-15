<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        try {
            $addresses = Address::with(['user', 'orders'])->get();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return view('admin.address.index',compact('addresses'));
    }
}
