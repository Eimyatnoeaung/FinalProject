<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view("auth.login");
     }
     function register(){
        return view("auth.register");
     }
     function post_register(){
        $validation= request()->validate([
             "username"=>"required",
             "email"=>"required",
             "password"=>"required||min:8",
             "image"=>"required",
         ]);
         if($validation){
             //save to database user-tables

             return redirect()->route("home");
         }else{
             return back()->withErrors($validation);
         }
     }
}
