<?php

namespace App\Http\Controllers;

use App\Bom;
use App\Product;
use App\Raw_material;
use Illuminate\Http\Request;

class BomController extends Controller
{
    public function index($product_id=1)
    {
        $product    = Product::find($product_id);
        $data_bom   = $product->product_func;
        $products   = Product::all();
        $rm   = Raw_material::all();
        $boms = bom::where('prdct_id', $product_id)->get(); 
        return view('bom', compact('data_bom', 'products','product', 'boms','rm'));
    }
}
