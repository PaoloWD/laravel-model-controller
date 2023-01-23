<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    function index(){
        $movies = Movie::all();
        return view("index", compact("movies"));
    }
}