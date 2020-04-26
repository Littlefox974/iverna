<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class SearchController extends Controller {
    public function search(Request $request) {
        $results = Movies::where('title', 'like', '%' . $request->keywords . '%')->get();

        return response()->json($results);
    }
}
