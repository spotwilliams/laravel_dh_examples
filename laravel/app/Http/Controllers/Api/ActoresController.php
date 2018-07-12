<?php

namespace App\Http\Controllers\Api;

use App\Models\Actor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActoresController extends Controller
{
    public function index(Request $request)
    {
        $actores = Actor::all();
        
        return $actores;
    }
}
