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

Route::get('', function () {
    return view('home');
});

Route::get('tirulipa', 'GatoController@perfilGato');

Route::get('astolfo', 'GatoController2@perfilGato');

Route::get('gerome', 'GatoController3@perfilGato');

Route::get('robson', 'GatoController4@perfilGato');
