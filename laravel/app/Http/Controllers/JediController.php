<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JediController extends Controller
{
    public function lista(Request $request)
    {
        
        $jedis = [
            'Yoda',
            'Obi Wan',
            'Qui Gon Yin',
        ];
        
        $padawans = [
            'Anakin',
            'Asoka',
        ];
        
        $view = view('star-wars.jedis.lista');
        
        $view->with('listado', $jedis)
            ->with('padawans', $padawans);
        
        return $view;
    }
}













