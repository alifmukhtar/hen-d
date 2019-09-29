<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $supplier = \App\supplier::all();
        return view('supplier',['supplier' => $supplier]);
    }

    public function create(Request $request){
        \App\supplier::create($request->all());
        return redirect('/supplier');
    }

    public function edit($id){
        $supplier = \App\supplier::find($id);
        return view('editSupplier',['supplier'=> $supplier]);
    }

    public function update(Request $request, $id){
        $supplier = \App\supplier::find($id);
        $supplier->update($request->all());
        return redirect('/supplier')->with('success','Updated!');
    }
}
