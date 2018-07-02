<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    
    
    public function peliculas()
    {
        return $this->belongsToMany(
            Pelicula::class,
            'actor_movie',
            'actor_id',
            'movie_id'
        );
    }
}
