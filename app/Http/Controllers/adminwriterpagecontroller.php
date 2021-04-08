<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\writer;

class adminwriterpagecontroller extends Controller {

public function __construct()
    {
        $this->middleware('auth');
    }


          public function index(){
                               $writers =  writer::paginate(8);
          return view('admin/writer/writers', compact('writers'));}
           public function show($id){
                                $writer = writer::findOrFail($id);
          return view('admin/writer/show', compact('writer'));}
          public function create(){
                                $writer = writer::all();
          return view('admin/writer/create',compact('writer'));}
          public function store(Request $request){
                                $request->validate(['name' => 'required',
                                                    'image' => 'required|image',
                                                    'desc' => 'required',
                                                    'facebook' => 'required',
                                                    'twitter' => 'required',
                                                    'wiki' => 'required']);
                                $writer = new writer();
                                $writer->name = request('name');
                                $writer->desc = request('desc');
                                $writer->facebook = request('facebook');
                                $writer->twitter = request('twitter');
                                $writer->wiki = request('wiki');
                                $request->hasFile('image');
                                $image = $request->file('image');
                                $filename = $image->getClientOriginalName();
                                $location = public_path('/images/writer/' . $filename);
                                image::make($image)->save($location);
                                $writer->image = $filename;
                                $writer->save();
                                return redirect('/admin/writer/');}
          public function edit($id){
                                $writer = writer::findOrFail($id);
          return view('admin/writer/edit', compact('writer'));}
          public function update(Request $request, $id){
                                $request->validate(['name' => 'required',
                                                    'image' => 'required|image',
                                                    'desc' => 'required']);
                                $writer = writer::findOrFail($id);
                                $writer->name = request('name');
                                $writer->desc = request('desc');
                                $request->hasFile('image');
                                $image = $request->file('image');
                                $filename = $image->getClientOriginalName();
                                $location = public_path('/images/writer/' . $filename);
                                image::make($image)->save($location);
                                $writer->image = $filename;
                                $writer->save();
                                return redirect('/admin/writer');}
          public function destroy($id){
                writer::findOrFail($id)->delete();
          return redirect('/admin/writer');}
}
