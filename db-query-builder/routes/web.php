<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $users=DB::table("users")->get();
        return view('home',[
            "users"=>$users
        ]);
});
Route::get('/where', function () {
//    $user=DB::table("users")->where("firstName","mahdi")->get();
//    $user=DB::table("users")->where("firstName","LIKE","%m%")->get();
    $user=DB::table("users")->find(2);
    return $user;
});
