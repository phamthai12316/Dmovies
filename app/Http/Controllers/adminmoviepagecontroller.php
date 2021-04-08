<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use DB;
use App\movies;
use App\director;
use App\writer;
use App\actor;
use App\actress;
use App\genre;
use App\year;
class adminmoviepagecontroller extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
           $movies = movies::paginate(12);
    	return view('admin/movies/movies',compact('movies'));
    }

        public function show($id){
        	$movie = movies::findOrFail($id);

    	return view('admin/movies/show',compact('movie'));
    }

     public function create(){

               $director = DB::table('directors')->get();
               $writer = DB::table('writers')->get();
               $actor = DB::table('actors')->get();
               $actress = DB::table('actresses')->get();
               $genre = DB::table('genres')->get();
               $year = DB::table('years')->get();
       return view('admin/movies/create',compact(['director','writer','actor','actress','genre','year']));
    }


       public function store(Request $request){

               $request->validate([
              'name' => 'required',
              'director_id' => 'required',
              'actor_id' => 'required',
              'actress_id' => 'required',
              'genre_id' => 'required',
              'year_id' => 'required',
              'writer_id' => 'required',
              'poster' => 'required|image',
              'cover' => 'required|image',
              'cast' => 'required',
              'video_link' => 'required',
              'keywd' => 'required',
              'desc' => 'required'
            ]);

            $movie = new movies();
            $movie->name = request('name');
            $movie->director_id = request('director_id');
            $movie->writer_id = request('writer_id');
            $movie->actor_id = request('actor_id');
            $movie->actress_id = request('actress_id');
            $movie->genre_id = request('genre_id');
            $movie->year_id = request('year_id');
            $movie->cast = request('cast');
            $movie->video_link = request('video_link');
            $movie->keywd = request('keywd');
            $movie->desc = request('desc');
            $request->hasFile('poster');
            $image = $request->file('poster');
            $filename = $image->getClientOriginalName();
            $location = public_path('/images/poster/' . $filename);
            image::make($image)->save($location);
            $movie->poster = $filename;
            $request->hasFile('cover');
            $image = $request->file('cover');
            $filename = $image->getClientOriginalName();
            $location = public_path('/images/cover/' . $filename);
            image::make($image)->save($location);
            $movie->cover = $filename;
            $movie->save();
            return redirect('admin/movies/');
    }


      public function edit($id){

               $movie = movies::findOrFail($id);
               $director = DB::table('directors')->get();
               $writer = DB::table('writers')->get();
               $actor = DB::table('actors')->get();
               $actress = DB::table('actresses')->get();
               $genre = DB::table('genres')->get();
               $year = DB::table('years')->get();

      return view('admin/movies/edit',compact(['movie','director','writer','actor','actress','genre','year']));
      }

      public function update(Request $request, $id){
            $request->validate([
              'name' => 'required',
              'poster' => 'required',
              'cover' => 'required',
              'cast' => 'required',
              'video_link' => 'required',
              'keywd' => 'required',
              'desc' => 'required'
            ]);
            $movie = movies::findOrFail($id);
            $movie->name = request('name');
            $movie->director_id = request('director_id');
            $movie->writer_id = request('writer_id');
            $movie->actor_id = request('actor_id');
            $movie->actress_id = request('actress_id');
            $movie->genre_id = request('genre_id');
            $movie->year_id = request('year_id');
            $movie->cast = request('cast');
            $movie->video_link = request('video_link');
            $movie->keywd = request('keywd');
            $movie->desc = request('desc');
            $request->hasFile('poster');
            $image = $request->file('poster');
            $filename = $image->getClientOriginalName();
            $location = public_path('/images/poster/' . $filename);
            image::make($image)->save($location);
            $movie->poster = $filename;
            $request->hasFile('cover');
            $image = $request->file('cover');
            $filename = $image->getClientOriginalName();
            $location = public_path('/images/cover/' . $filename);
            image::make($image)->save($location);
            $movie->cover = $filename;
            $movie->save();
            return redirect('/admin/movies');
    }


    public function destroy($id){

   movies::findOrFail($id)->delete();

    return redirect('/admin/movies/');
    }




}
