<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genres';
    
    public function peliculas()
    {
        // 'App\Models\Pelicula' === Pelicula::class
        return $this->hasMany(Pelicula::class, 'genre_id', 'id');
    }
}
