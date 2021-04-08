<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\director;
use App\genre;
use App\writer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $movies = movies::all()->count();
      $director = director::all()->count();
      $genres = genre::all()->count();
      $writer = writer::all()->count();

return view('admin/dashboard',compact(['movies','director','genres','writer']));
    }
}
