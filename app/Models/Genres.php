<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $fillable = [
        'name'
    ];

    
    public function films()
    {
        return $this->belongsToMany('App\Models\Movies','genre2movie', 'genreId', 'filmId');
    }
}
