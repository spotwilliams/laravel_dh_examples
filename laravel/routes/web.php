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


Route::get('hola/nombre/{nombre}/apellido/{apellido?}'
        , function ($nombre, $apellido = 'NA') {
    echo "Hola $apellido, $nombre";
});


Route::get('bienvenido', 'InicioController@index');


Route::get('listado/jedis', 'JediController@lista');

Route::get('listado/sith', 'SithController@lista');


Route::get('peliculas/add', 'PeliculasController@add');
Route::post('peliculas/add', 'PeliculasController@crear');
Route::get('peliculas/edit/{id}', 'PeliculasController@editar');
Route::get('peliculas', 'PeliculasController@index');


Route::get('series', 'SeriesController@index');

// Generos

Route::get('generos', 'GeneroController@index');

//
Route::get('actores', 'ActoresController@index');









