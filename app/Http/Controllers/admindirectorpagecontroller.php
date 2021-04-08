<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\director;

class admindirectorpagecontroller extends Controller {

public function __construct()
    {
        $this->middleware('auth');
    }


          public function index(){
                               $director = director::paginate(8);
          return view('admin/director/directors', compact('director'));}
           public function show($id){
                                $director = director::findOrFail($id);
          return view('admin/director/show',compact('director'));}
          public function create(){
                                $director = director::all();
          return view('admin/director/create',compact('director'));}
          public function store(Request $request){
                                $request->validate(['name' => 'required',
                                                    'image' => 'required|image',
                                                    'desc' => 'required',
                                                    'facebook' => 'required',
                                                    'twitter' => 'required',
                                                    'wiki' => 'required']);
                                $director = new director();
                                $director->name = request('name');
                                $director->desc = request('desc');
                                $director->facebook = request('facebook');
                                $director->twitter = request('twitter');
                                $director->wiki = request('wiki');
                                $request->hasFile('image');
                                $image = $request->file('image');
                                $filename = $image->getClientOriginalName();
                                $location = public_path('/images/director/' . $filename);
                                image::make($image)->save($location);
                                $director->image = $filename;
                                $director->save();
                                return redirect('/admin/director/');}
          public function edit($id){
                                $director = director::findOrFail($id);
          return view('admin/director/edit', compact('director'));}
          public function update(Request $request, $id){
                                $request->validate(['name' => 'required',
                                                    'image' => 'required|image',
                                                    'desc' => 'required']);
                                $director = director::findOrFail($id);
                                $director->name = request('name');
                                $director->desc = request('desc');
                                $request->hasFile('image');
                                $image = $request->file('image');
                                $filename = $image->getClientOriginalName();
                                $location = public_path('/images/director/' . $filename);
                                image::make($image)->save($location);
                                $director->image = $filename;
                                $director->save();
                                return redirect('/admin/director');}
          public function destroy($id){
                director::findOrFail($id)->delete();
          return redirect('/admin/director');}
}
