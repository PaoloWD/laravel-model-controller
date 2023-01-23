<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    function index(){
        $moviesListAll = Movie::all();
        return view("index", compact("moviesListAll"));
    }
}