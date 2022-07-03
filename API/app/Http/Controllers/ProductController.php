<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // dd($products);
        return response()->json($products, 201);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price
        ]);
        return response()->json('Sussess');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product, 201);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->save();
        return response()->json("Success");

    }

    public function destroy($id)
    {
        DB::table("products")->where("id", $id)->delete();
        return response()->json("Success");
    }
}
