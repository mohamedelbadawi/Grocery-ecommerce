<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Exception;
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
            'password' => 'required|string|min:8',
            'phone' => 'required|min:8|max:11',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json(['name' => $user->name, 'email' => $user->email, 'phone' => $user->phone, 'access_token' => $token, 'token_type' => 'Bearer',]);
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
            ->json(
                [
                    'message' => 'Hi ' . $user->name . ', welcome to home', 'access_token' => $token, 'token_type' => 'Bearer',
                    'name' => $user->name, 'email' => $user->email, 'phone' => $user->phone
                ]
            );
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

    public function updateProfile(Request $request)

    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'phone' => 'required|min:8|max:11',
            ]);
            if ($validator->fails()) {
                return response()->json($validator->errors());
            }
            $user = Auth::user();
            $user->update(['name' => $request->name, 'phone' => $request->phone]);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }


        return response()->json(['message' => 'updated Successfully']);
    }
}
