<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actress;
use App\comment;

class actresspagecontroller extends Controller
{
  public function show($id){
       $actress = actress::findOrFail($id);
       $comment = comment::where('actress_id', '=', $id)->get()->take(8);
       $previous = actress::where('id', '<', $id)->max('id');
       $next = actress::where('id', '>', $id)->min('id');
    return view('actress.actress', compact(['actress','previous','next','comment']));
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
  $comment->actress_id = $id;
  $comment->save();

return back();}
}
