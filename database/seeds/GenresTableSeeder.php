<?php
use App\Models\Genres;
use App\Models\Movies;
use Illuminate\Database\Seeder;
use App\ZoneFilmsScrapper;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $genres = [];
        foreach(ZoneFilmsScrapper::getMovieData() as $filmData)
        {
           array_push($genres, ...$filmData['genres']);
        }
        
        $genres = array_unique($genres);
        foreach($genres as $genre)
        {
           Genres::create([
               'name' => $genre,        
             ]);
        }

    }
}
