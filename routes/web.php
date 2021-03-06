<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,"index"])->name("home");
// user
Route::get('/user/createPost',[PageController::class,"createPost"])->name("createPost");
Route::post('/user/createPost',[PageController::class,"post"])->name("post");
Route::get('/user/userProfile',[PageController::class,"userProfile"])->name("userProfile");
Route::get('/user/contactUs',[PageController::class,"contactUs"])->name("contactUs");

//admin
Route::get('/admin/index',[AdminController::class,"index"])->name("admin.home");
Route::get('/admin/manage_premium_users',[AdminController::class,"manage_premium_users"])->name("admin.manage_premium_users");
Route::get('/admin/contact_messages',[AdminController::class,"contact_messages"])->name("admin.contact_messages");

// authentication
 Route::get("/login",[AuthController::class,"login"])->name("login");
 Route::post("/login",[AuthController::class,"post_login"])->name("post_login");
 Route::get("/register",[AuthController::class,"register"])->name("register");
 Route::post("/register",[AuthController::class,"post_register"])->name("post_register");
