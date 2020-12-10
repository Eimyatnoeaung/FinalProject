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
             $image=request('image');  //move image to image file in public folder path
             $image_name=uniqid()."_".$image->getClientOriginalName(); //save to database
             //uniqid() is for id that laravel give randomly
             //sdg8198_1.jpg//sg111a988_1.jpg

             $image->move(public_path('images/profiles'),$image_name) ; //first parameter is the path that u want to move and the second parameter is used for naming the images that we used
            //public_path is to use to target to public folder
             //  save image name only to database

             return redirect()->route("home");
         }else{
             return back()->withErrors($validation);
         }
     }
}
