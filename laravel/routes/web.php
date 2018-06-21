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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home', function () {
    return 'Hola doctor nick';
});


Route::group(['prefix' => 'saludar'], function () {
    
    Route::get('nombre/{nombre}', function ($nombre) {
        return "Hola, tu nombre es  $nombre";
    });
    
    Route::get('apellido/{apellido}', function ($apellido) {
        return "Hola, tu apellido es $apellido";
    });
});