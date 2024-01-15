<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

}
