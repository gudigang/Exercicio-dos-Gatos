<?php

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

Route::get('robson', function () {
    return view('robson');
});

Route::get('astolfo', function () {
    return view('astolfo');
});

Route::get('gerome', function () {
    return view('gerome');
});

Route::get('', function () {
    return view('home');
});
