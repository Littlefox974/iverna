<?php

namespace App\Models;

use Eloquent;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Movies
 * @package App\Models
 * @mixin Eloquent
 */
class Movies extends Model {
    use Searchable;

    protected $fillable = [
        'title', 'year', 'quality', 'url'
    ];

    public function genres() {
        return $this->belongsToMany('App\Models\Genres', 'genre2movie', 'filmId', 'genreId');
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray() {
        return [
            'title' => $this->title,
            'year' => $this->year,
            'quality' => $this->quality
        ];
    }
}
