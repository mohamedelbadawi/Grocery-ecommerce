<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        try {
            $users = User::withCount(['orders'])->get();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return view('admin.user.index', compact('users'));
    }
    public function userOrders(User $user)
    {
        try {
            $orders = $user->orders;
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return view('admin.user.orders', compact('orders', 'user'));
    }
    public function delete(User $user)
    {
        try {
            $user->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return redirect()->route('admin.user')->with('success', 'Deleted successfully');
    }
}
