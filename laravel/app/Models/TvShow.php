<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TvShow extends Model
{
    protected $table = 'series';
    
    
    public function temporadas()
    {
        return $this->hasMany(Temporada::class,'serie_id', 'id');
    }
}
