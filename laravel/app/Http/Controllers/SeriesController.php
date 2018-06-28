<?php

namespace App\Http\Controllers;

use App\Models\TvShow;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $view = view('series.index');
        
        $series = TvShow::all();
        
        $view->with('series', $series);
        
        return $view;
    }
}
