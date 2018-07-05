<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $table = 'seasons';
    
    public function tvShow()
    {
        // belongsTo porque yo tengo un columna que apunta a otra tabla
        return $this->belongsTo(TvShow::class, 'serie_id', 'id');
    }
}
