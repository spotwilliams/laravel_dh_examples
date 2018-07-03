<?php

namespace App\Http\Controllers;

use App\Models\Genero;
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
        
        $peliculas = Pelicula::all();
        
        $view = view('peliculas.index');
        
        $view->with('mensaje', 'Estas son las peliculas')
            ->with('peliculas', $peliculas);
        
        return $view;
    }
    
    public function add(Request $request)
    {
        $generos = Genero::where('active', '=', true)
            ->get();
        
        $view = view('peliculas.add')
            ->with('lista_generos', $generos);
        
        return $view;
    }
    
    public function crear(Request $request)
    {
        $this->validate(
            $request,
            [
                'title'        => 'required',
                'rating'       => 'required|numeric',
                'awards'       => 'required|integer',
                'release_date' => 'required',
                'genre_id'     => 'not_in:-1',
            ],
            [
                'title.required'  => 'El nombre de la pelicula es obligatorio',
                'rating.required' => 'El rating es obligatorio',
                'rating.numeric'  => 'El rating es un campo numerico',
                'genre_id.not_in' => 'Tenes que elegir un tipo si o si'
                //                    'required' => 'El campo :attribute es obligatorio',
            ]);
        
        // Primer manera
//        $peli = new Pelicula($request->except(['_token']));

//        $peli->save();
        
        // Segunda manera
        // Pelicula::create($request->except(['_token']));
        
        
        // Tercer manera. Hacer update o create
        /** @var Pelicula $peli */
        $peli = Pelicula::where('title', '=', $request->input('title'))
            // First devuelve una instancia de la clase Pelicula
            ->first();
        
        if ($peli) {
            // Manera rapida
//            $peli->fill($request->except(['_token', 'title']));
            
            // Manera Richard
            $peli->rating       = $request->input('rating');
            $peli->awards       = $request->input('awards');
            $peli->release_date = $request->input('release_date');
            $peli->genre_id     = $request->input('genre_id');
            
        } else {
            $peli = new Pelicula($request->except(['_token']));
        }
        
        $peli->save();
        
        
        // Guardamos el archivo despues del save para tener
        // asegurado el ID de esa pelicula en la tabla de movies
        
        $file = $request->file('poster');
        $name = 'non-image.jpg';
        if ($file) {
            
            $name = 'movies_' . $peli->id . '.jpg';
            
            $ruta = $file->storePubliclyAs('./public', $name);
        }
        
        $peli->poster = $name;
        
        $peli->save();
        
        return redirect('/peliculas/add')
            ->with('exito', 'La pelicula ha sido guardada con éxito!');
        
    }
    
    public function editar($id)
    {
        $generos = Genero::where('active', '=', true)
            ->get();
        
        $peli = Pelicula::find($id);
        
        $view = view('peliculas.add')
            ->with('lista_generos', $generos)
            ->with('pelicula', $peli);
        
        return $view;
    }
}
