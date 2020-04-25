<?php

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/movie', function (Request $request) {
    return Movies::get();
});
//Route qui redirige soit vers un films 
Route::get('/movie/{n}', function ($n) {
    if ($n === "last") return Movies::get()->sortByDesc('created_at')->first();
    if (intval($n)) return Movies::get()->where('id', intval($n));
    return null;
});