<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class admincommentpagecontroller extends Controller
{
   public function __construct(){
              $this->middleware('auth');}
   public function index(){
    $comments  = comment::all();
  	return view('admin/comments/comment',
   		               compact('comments'));
}
            public function destroy($id){
            comment::where('id', $id)->delete();
            return back();
}


}
