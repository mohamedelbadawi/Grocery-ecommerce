<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\updateSettings;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\traits\ImageHelper;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    use ImageHelper;
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()

    {
        $productsCount = Product::count();
        $categoriesCount = Category::count();
        $ordersPercentage = Order::OrdersPercentage();
        $pendingOrders = Order::pendingOrders();


        // $labels = $orders->keys();

        // $data = $orders->values();

        return view('admin.dashboard', compact('productsCount', 'categoriesCount', 'ordersPercentage', 'pendingOrders'));
    }

    public function editSettings()
    {
        $admin = auth('admin')->user();
        return view('admin.profile.settings', compact('admin'));
    }
    public function updateSettings(updateSettings $request)
    {
        try {
            $admin = auth('admin')->user();

            if (Hash::check($request->oldPassword, $admin->password)) {

                if ($request->hasfile('image')) {
                    if (!$admin->image == "assets/default/undraw_profile.svg") {
                        $this->deleteImage($admin->image);
                    }
                    $file = $this->uploadImage($request->image, 'assets/admins', '500', $request->name);
                    $file = 'assets/admins/' . $file;

                    if ($request->newPassword != null) {
                        $admin->update(['name' => $request->name, 'password' => $request->newPassword, 'image' => $file]);
                    }
                }
                if ($request->newPassword != null) {
                    $admin->update(['name' => $request->name, 'password' => $request->newPassword]);
                } else {
                    $admin->name = $request->name;
                    $admin->save();
                }
            } else {
                return redirect()->back()->with("error", "old password doesn't match");
            }
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'something wrong happend');
        }
        return redirect()->route('admin.dashboard')->with('Success', 'profile update successfully');
    }
}
