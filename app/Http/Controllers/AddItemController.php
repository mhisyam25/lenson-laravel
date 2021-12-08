<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AddItemController extends Controller
{
    public function index()
    {
        return view('addItem', [
            "title" => " "
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product' => 'required',
            'stocks' => 'required',
            'price' => 'required',
            'path' => 'file|mimes:jpeg,png,jpg|max:2048'
        ]);

        $validated['path'] = $request->file('path')->store('path');

        Product::create([
            'name' => $validated['product'],
            'stock' => $validated['stocks'],
            'price' => $validated['price'],
            'path' => $validated['path']
        ]);

        return redirect('product')->with('success', 'Successfully Added New Product.');
    }
}
