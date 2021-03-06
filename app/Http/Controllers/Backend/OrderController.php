<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\updateOrder;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        try {
            $orders = Order::with(['user', 'products.product', 'address'])->get();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error ');
        }
        return view('admin.order.index', compact('orders'));
    }
    public function edit(Order $order)
    {
        try {

            $statuses = Order::STATUS;
            return view('admin.order.edit', compact('order', 'statuses'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
    }

    public function updateQuantity(Request $request, OrderProduct $product)
    {
        try {
            $this->validate($request, ['quantity' => 'required']);

            $product->update(['quantity' => $request->quantity]);
            $order = $product->order;
            $order->update(['total' => $order->total()]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return redirect()->back()->with('success', 'Updated successfully');
    }
    public function deleteProduct(OrderProduct $product)
    {
        try {
            $product->delete();
            $order = $product->order;
            $order->update(['total' => $order->total()]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return redirect()->back()->with('success', 'Deleted successfully');
    }


    public function update(updateOrder $request, Order $order)
    {
        try {
            $order->update(['status' => $request->status]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return redirect()->route('admin.order')->with('success', 'Updated successfully');
    }

    public function delete(Order $order)
    {
        try {
            $order->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something error');
        }
        return redirect()->route('admin.order')->with('success', 'Deleted successfully');
    }
}
