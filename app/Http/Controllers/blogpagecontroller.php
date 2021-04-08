<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;
use App\comment;
class blogpagecontroller extends Controller
{
  public function index(){
        $blog = blog::paginate(4);
        return view('blog.posts', compact('blog'));
  }

  public function show($id){
       $blog = blog::findOrFail($id);
       $comment = comment::where('blog_id', '=', $id)->get()->take(8);
       $previous = blog::where('id', '<', $id)->max('id');
       $next = blog::where('id', '>', $id)->min('id');
    return view('blog.blog', compact(['blog','previous','next','comment']));
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
  $comment->blog_id = $id;
  $comment->save();

return back();}
}
