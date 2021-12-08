<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ViewDataController extends Controller
{
    public function index()
    {
        return view('viewData', [
            "title" => "view",
            "order" => Order::all()
        ]);
    }

    public function edit($id)
    {
        $editData = DB::table('orders')->where('id', $id)->first();

        return view('editData', [
            "title" => "edit",
            "products" => Product::all()
        ], compact('editData'));
    }

    public function editProsess(Request $request, $id)
    {
        DB::table('orders')->where('id', $id)
            ->update([
                'username' => $request->username,
                'phone' => $request->phone,
                'address' => $request->address,
                'product' => $request->product,
                'duration' => $request->duration
            ]);

        return redirect('view')->with('success', 'Data Successfully Updated.');
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id', $id)->delete();

        return redirect('view')->with('success', 'Data Successfully Deleted.');
    }
}
