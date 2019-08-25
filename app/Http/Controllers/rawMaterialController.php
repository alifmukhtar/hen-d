<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rawMaterialController extends Controller
{
    public function index(){
        $raw_mtrial = \App\Raw_material::all();
        return view('inventoryRaw',['raw_mtrial' => $raw_mtrial]);
    }

    public function create(Request $request){
        \App\Raw_material::create($request->all());
        return redirect('/inventoryRaw');
    }
}
