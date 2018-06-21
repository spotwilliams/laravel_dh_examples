<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SithController extends Controller
{
    public function lista(Request $request)
    {
        $listado = [
            'Darth Vader',
            'Palpatine',
            'Darth Maul',
        ];
        
        $view = view('star-wars.siths.lista')
            ->with('siths', $listado);
        
        return $view;
    }
}
