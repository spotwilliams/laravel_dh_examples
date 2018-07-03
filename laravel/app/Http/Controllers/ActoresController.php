<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ActoresController extends Controller
{
    public function index(Request $request)
    {
//        $listado = Actor::orderBy('last_name', 'ASC')
//            ->orderBy('first_name', 'ASC')
//            ->limit(100)
//            ->get();
        
        /** @var Collection $listado */
        $listado = Actor::orderBy('last_name', 'DESC')
            ->limit(100)
            ->get();
        
        $agrupado = $listado->groupBy(function ($item) {
            return ($item->rating > 7?'caro':'barato');
        });
        
        $view = view('actores.actores')
            ->with('actores', $agrupado);
        
        return $view;
    }
}
