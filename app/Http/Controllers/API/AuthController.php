<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        Cart::create(['user_id' => $user->id]);
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer',]);
    }
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['message' => 'Hi ' . $user->name . ', welcome to home', 'access_token' => $token, 'token_type' => 'Bearer',]);
    }
    public function updatePassword(Request $request)
    {

         $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $user = Auth::user();
        $hashedPassword = $user->password;
        if (\Hash::check($request->oldPassword, $hashedPassword)) {

            if (!\Hash::check($request->newPassword, $hashedPassword)) {

                $user->update(['password' => bcrypt($request->newPassword)]);

                return response()->json(['message' => 'updated successfully']);
            } else {

                return response()->json(['message' => 'new password can\'t be like old password']);
            }
        } else {
            return response()->json(['message' => 'the old password is wrong']);
        }
    }

    public function logout()
    {
        Auth::user()->tokens()->delete();
        // auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
