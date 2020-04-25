<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title', 'year', 'quality', 'url'
    ];

    public function genres()
    {
        return $this->belongsToMany('App\Models\Genres','genre2movie', 'filmId', 'genreId');
    }
}
