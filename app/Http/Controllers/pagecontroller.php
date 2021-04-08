<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\blog;

class pagecontroller extends Controller
{
    public function welcome(){
          $movies = movies::paginate(12);
          $blog = blog::all()->take(4);
          return view('welcome', compact(['movies','blog']));
    }

    public function log(){
          return View('/contact');
}

}
