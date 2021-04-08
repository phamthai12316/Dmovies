<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actor;
use App\comment;
class actorpagecontroller extends Controller
{
  public function show($id){
       $actor = actor::findOrFail($id);
       $comment = comment::where('actor_id', '=', $id)->get()->take(8);
       $previous = actor::where('id', '<', $id)->max('id');
       $next = actor::where('id', '>', $id)->min('id');
    return view('actor.actor', compact(['actor','previous','next','comment']));
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
  $comment->actor_id = $id;
  $comment->save();

return back();}
}
