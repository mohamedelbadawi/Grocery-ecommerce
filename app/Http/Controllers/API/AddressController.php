<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressCollection;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Exception;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AddressController extends Controller
{
    public function getUseraddresses()
    {
        $user = Auth::user();
        return AddressCollection::make($user->addresses);
    }
    public function addAddress(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'city' => 'required',
            'street' => 'required',
            'building' => 'required',
            'code' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $user = Auth::user();

        try {
            Address::create([
                'city' => $request->city,
                'street' => $request->street,
                'building' => $request->building,
                'code' => $request->code,
                'user_id' => $user->id
            ]);
            return response()->json(['message' => 'Address Added successfully']);
        } catch (Exception $ex) {
            return response()->json(['message' => 'Failed to add address']);
        }
    }
}
