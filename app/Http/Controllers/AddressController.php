<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Address;

class AddressController extends Controller
{
    

    public function show_create_address(){
        $addresses = Address::all();
        return view('Pages.Add_address',['addresses'=>$addresses]);


    }
    public function create_address(Request $request){
        $address = new Address;
        $address->street = $request['street'];
        $address->number = $request['number'];
        $address->save();
        return redirect()->route('show_create_address');


    }
}
