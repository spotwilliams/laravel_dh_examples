<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function index(Request $request)
    {
        $generos = Genero::all();
        $view    = view('generos.index')
            ->with('generos', $generos);
        
        return $view;
    }
}
