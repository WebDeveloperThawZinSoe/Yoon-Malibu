<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountManagementController extends Controller
{
    //index
    public function index(){
        $users = User::orderBy("id","desc")->get();
        return view("admin.user",compact("users"));
    }

     //store
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        User::create([
            "name"=>$name,
            "email"  => $email,
            "password" => $password
        ]);
        session()->flash('success', 'Member Create Success.');
        return back();
    }

    //delete
    public function delete(Request $request){
        $id = $request->id;
        User::find($id)->delete();
        session()->flash('success', 'Member Delete Success.');
        return back();
    }

    //password_update
    public function password_update(Request $request){
        $validated = $request->validate([
            'upassword' => 'required',
        ]);
        $password = Hash::make($request->upassword);
        $id = $request->id;
        User::where("id",$id)->update([
            "password" => $password,
        ]);
        session()->flash('success', 'Member Password Change Success.');
        return back();
    }
}
