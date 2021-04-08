<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\writer;
use App\comment;
class writerpagecontroller extends Controller
{
  public function show($id){
       $writer = writer::findOrFail($id);
       $comment = comment::where('writer_id', '=', $id)->get()->take(8);
       $previous = writer::where('id', '<', $id)->max('id');
       $next = writer::where('id', '>', $id)->min('id');
    return view('writer.writer', compact(['writer','previous','next','comment']));
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
  $comment->writer_id = $id;
  $comment->save();

return back();}
}
