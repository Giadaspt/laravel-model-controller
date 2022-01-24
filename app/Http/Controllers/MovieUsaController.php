<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieUsaController extends Controller
{
    public function americanMovie(){
        $americanMovies = Movie::where('nationality', 'american')->get();

        return view('americanMovie', compact('americanMovies'));
    }
}
