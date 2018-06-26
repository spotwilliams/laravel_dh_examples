<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index(Request $request)
    {
        
        $peliculas = Pelicula::where('title', 'LIKE', 'Matrix % ')
            ->where('release_date', ' <= ', '2001 - 02 - 01')
            ->orWhere('rating', ' > ', 4)
            ->orderBy('rating', 'DESC')
            ->take(5)
            ->get();
        
        dd($peliculas);
        
        $view = view('peliculas.index');
        
        $view->with('mensaje', 'Estas son las peliculas')
            ->with('peliculas', $peliculas);
        
        return $view;
    }
}
