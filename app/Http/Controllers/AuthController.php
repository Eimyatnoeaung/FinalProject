<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
             //move our image to public
             //  save image name only to database
             $image=request('image');  //move image to image file in public folder path
             $image_name=uniqid()."_".$image->getClientOriginalName(); //save to database
             //uniqid() is for id that laravel give randomly
             //sdg8198_1.jpg//sg111a988_1.jpg
            //public_path is to use to target to public folder
             $image->move(public_path('images/profiles'),$image_name) ; //first parameter is the path that u want to move and the second parameter is used for naming the images that we used

            //save to database user-table
            $password=$validation['password'];
            $user=new User();
            $user->name =$validation['username'];
            $user->email =$validation['email'];
            $user->password =Hash::make($password);
            $user->image=$image_name;
            $user->save();

             return redirect()->route("home");
         }else{
             return back()->withErrors($validation);
         }
     }
}
