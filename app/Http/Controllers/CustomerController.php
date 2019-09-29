<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customer = \App\customer::all();
        return view('customer',['customer' => $customer]);
    }

    public function create(Request $request){
        \App\customer::create($request->all());
        return redirect('/customer');
    }

    public function edit($id){
        $customer = \App\customer::find($id);
        return view('editCustomer',['customer'=> $customer]);
    }

    public function update(Request $request, $id){
        $customer = \App\customer::find($id);
        $customer->update($request->all());
        return redirect('/customer')->with('success','Updated!');
    }
}
