<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\genre;
class admingenrepagecontroller extends Controller{
       public function __construct(){
       $this->middleware('auth');}
       public function index(){
       $genre = genre::paginate(8);
       return view('admin/genre/genre',compact('genre'));
}
       public function show($id){
       $genre = genre::findOrFail($id);
       return view('admin/genre/show',compact('genre'));
}
       public function create(){
       $genre = genre::all();
       return view('admin/genre/create',compact('genre'));
}
       public function store(Request $request){
       $request->validate([
                         'name' => 'required']);
             $genre = new genre();
             $genre->name = request('name');
             $genre->save();
      return redirect('/admin/genre');}
      public function edit($id){
             $genre = genre::findOrFail($id);
      return view('admin/genre/edit',compact('genre'));
}
      public function update(Request $request, $id){
            $request->validate([
                              'name' => 'required']);
            $genre = genre::findOrFail($id);
            $genre->name = request('name');
            $genre->save();
      return redirect('/admin/genre');
}
      public function destroy($id){
      genre::findOrFail($id)->delete();
      return redirect('/admin/genre/');
}
}
