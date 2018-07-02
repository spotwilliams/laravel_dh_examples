<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'movies';
    
    protected $guarded = [];
    
    
    public function genero()
    {
        // belongsTo dice que la clase Pelicula tiene un atributo (FK) genre_id que
        // apunta a la tabla o modelo Genero
        // Genero::class == 'App\Models\Genero'
        return $this->belongsTo('App\Models\Genero', 'genre_id', 'id');
    }
    
    
    public function actores()
    {
        return $this->belongsToMany(
            Actor::class,
            'actor_movie',
            'movie_id',
            'actor_id'
        );
    }
    
}
