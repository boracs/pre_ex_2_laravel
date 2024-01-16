<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Address;

class UserController extends Controller
{
    
    public function show_users(){
        $users = User::all();
        return view('Pages.Index',['users'=>$users]);
    }



   public function create_user(Request $request){
        $user = new User;
        $user->name= $request['name'];
        $user->surname= $request['surname'];
        $user->save();
        return redirect()->route('show_users');
    }




   public function delete_user($id){
    $user =  User::find($id);
    $user->delete();
    return redirect()->route('show_users');
}


public function show_edit_user($id){
   
    $user = User::find($id);

    return view('Pages.Show_edit_user',['user'=>$user]);
}


public function edit_user(Request $request, $id){
    $user =  User::find($id);
    $user->name=$request['name'];
    $user->surname=$request['surname'];
    $user->save();
    return redirect()->route('show_users');
}


public function show_asign_a_u(){

    $users = User::all();
    $addresses = Address::all();

    return view('Pages.Show_asign_a_u',['users'=>$users, 'addresses'=>$addresses]);

}


public function asign_a_u(Request $request){

    $user_id = $request['selusers'];
    $address_id = $request['seladdress'];
    
    $user = User::findOrfail($user_id); 
    $address = Address::findOrfail($address_id);
    $address->user_id = $user->id;
    
    return redirect()->route('show_create_address');
}



}
