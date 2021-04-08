<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\director;
use App\comment;
class directorpagecontroller extends Controller
{
  public function show($id){
       $director = director::findOrFail($id);
       $comment = comment::where('director_id', '=', $id)->get()->take(8);
       $previous = director::where('id', '<', $id)->max('id');
       $next = director::where('id', '>', $id)->min('id');
    return view('director.director', compact(['director','previous','next','comment']));
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
  $comment->phone = request('phone');
  $comment->email = request('email');
  $comment->image = "http://gravatar.com/avatar/" . md5(strtolower(trim($comment['email'])));
  $comment->comments = request('comments');
  $comment->director_id = $id;
  $comment->save();

return back();}
}
