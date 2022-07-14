<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // try {
            $orders = Order::with(['user', 'products'])->paginate(10);
            // dd($orders);
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', 'Something error ');
        // }
        return view('admin.order.index', compact('orders'));
    }
}
