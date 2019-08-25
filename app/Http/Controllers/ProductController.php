<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = \App\product::all();
        return view('inventoryProduct',['product' => $product]);
    }

    public function create(Request $request){
        \App\Product::create($request->all());
        return redirect('/inventoryProduct');
    }
}
