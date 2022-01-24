<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieBritController extends Controller
{
    public function britishMovie(){
        $britishMovies = Movie::where('nationality', 'american/british')->get();

        return view('britishMovie', compact('britishMovies'));
    }
}
