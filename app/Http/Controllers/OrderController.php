<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('order', [
            "title" => "order",
            "products" => Product::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'product' => 'required',
            'duration' => 'required'
        ]);

        Order::create($validated);

        return redirect('product')->with('success', 'The Order Success sent to Admin, please go to the LensOn to Confirmation!');
    }
}
