<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use Searchable;

    protected $fillable = [
        'name'
    ];


    public function films()
    {
        return $this->belongsToMany('App\Models\Movies','genre2movie', 'genreId', 'filmId');
    }

        /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return ['name' => $this->name];
    }
}
