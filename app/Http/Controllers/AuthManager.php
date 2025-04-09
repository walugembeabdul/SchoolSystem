<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{
    public function login(){
        return view("author.login");
    }
    public function loginpost(Request $request){
        $request->validate([
            "email"=>"required",
            "password"=>"required",

        ]);
        $credintials=$request->only("email","password");
        if (Auth::attempt($credintials)){
            return view('home')->with("success","welcome ");
        }return redirect(route("login"))->with("error","wrong email or password");
     }
     public function register(){
        return view("author.register");
     }
     public function registerpost(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required",
        ]);
        $harspwd=Hash::make($request->password);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$harspwd;
        if($user->save()){
            return redirect()->intended(route("login"))->
            with("success","user Registered successfully");
        }return redirect(route("register"))->with("error","failed to create user");
     }
}
