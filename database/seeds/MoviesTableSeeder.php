<?php

use App\Models\Movies;
use App\Models\Genres;
use Illuminate\Database\Seeder;
use App\ZoneFilmsScrapper;




class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    
         foreach(ZoneFilmsScrapper::getMovieData() as $filmData)
        {

           
            Movies::create([
                'title' => $filmData['title'],
                'year' =>  $filmData['year'],
                'quality' => $filmData['quality'],
                'url' => $filmData['url'],    
            ])->genres()->saveMany(Genres::whereIn('name', $filmData['genres'])->get());
    

            
        }
        

    }
}
