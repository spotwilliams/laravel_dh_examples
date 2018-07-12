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


Route::middleware('auth')->group(function () {
    
    Route::get('bienvenido', 'InicioController@index');
    
    
    Route::get('listado/jedis', 'JediController@lista');
    
    Route::get('listado/sith', 'SithController@lista');
    
    
    Route::prefix('otra-cosa')->name('peliculas.')->group(function () {
        
        Route::get('add', 'PeliculasController@add')->name('create');
        Route::post('add', 'PeliculasController@crear')->name('store');
        Route::get('edit/{id}', 'PeliculasController@editar')->name('edit');
        Route::get('/', 'PeliculasController@index')->name('index');
        
    });
    
    
    Route::get('series', 'SeriesController@index');

// Generos
    
    Route::get('generos', 'GeneroController@index');

//
    Route::get('actores', 'ActoresController@index');
    
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('genres', 'GenreController');


Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
