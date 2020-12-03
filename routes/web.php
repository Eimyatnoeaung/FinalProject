<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,"index"])->name("home");
// user
Route::get('/user/createPost',[PageController::class,"createPost"])->name("createPost");
Route::get('/user/userProfile',[PageController::class,"userProfile"])->name("userProfile");
Route::get('/user/contactUs',[PageController::class,"contactUs"])->name("contactUs");






// authentication
 Route::get("/login",[AuthController::class,"login"])->name("login");
 Route::get("/register",[AuthController::class,"register"])->name("register");
