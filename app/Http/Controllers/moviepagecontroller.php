<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movies;
use App\Comment;

class moviepagecontroller extends Controller
{
  public function index(){
    $movies = movies::paginate(12);
    return view('movies', compact('movies'));
  }
  public function show($id){
       $movie = movies::findOrFail($id);
       $comment = comment::where('movie_id', '=', $id)->get()->take(8);
       $previous = movies::where('id', '<', $id)->max('id');
       $next = movies::where('id', '>', $id)->min('id');
    return view('movie.movies', compact(['movie','previous','next','comment']));
  }

  public function store($id){
       request()->validate([
                          'firstname' => 'required',
                          'lastname' => 'required',
                          'phone' => 'required',
                          'email' => 'required',
                          'comments' => 'required']);
  $comment = new Comment();
  $comment->firstname = request('firstname');
  $comment->lastname = request('lastname');
  $comment->image = "http://gravatar.com/avatar/" . md5(strtolower(trim($comment['firstname'])));
  $comment->phone = request('phone');
  $comment->email = request('email');
  $comment->comments = request('comments');
  $comment->movie_id = $id;
  $comment->save();

return back();}



}
