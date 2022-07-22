<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/layouts/master', function () {
    return view('layouts.master');
});
Route::group(["authentication"],function() {
    Route::get("/",function() {
        dd("i am run");
    });
});
