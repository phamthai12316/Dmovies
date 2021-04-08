<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\actress;

class adminactresspagecontroller extends Controller{

         public function __construct(){
         $this->middleware('auth');}
         public function index(){
         $actress = actress::paginate(8);
         return view('admin/actress/actress',compact('actress'));
}
         public function show($id){
         $actress = actress::findOrFail($id);
         return view('admin/actress/show',compact('actress'));
}
         public function create(){
         $actress = actress::all();
         return view('admin/actress/create',compact('actress'));
}
         public function store(Request $request){
                      $request->validate([
                                        'name' => 'required',
                                        'born' => 'required',
                                        'birth_name' => 'required',
                                        'image' => 'required|image',
                                        'desc' => 'required']);
                      $actress = new actress();
                      $actress->name = request('name');
                      $actress->born = request('born');
                      $actress->birth_name = request('birth_name');
                      $actress->desc = request('desc');
                      $actress->facebook = request('facebook');
                      $actress->twitter = request('twitter');
                      $actress->wiki = request('wiki');
                      $request->hasFile('image');
                      $image = $request->file('image');
                      $filename = $image->getClientOriginalName();
                      $location = public_path('/images/actress/' . $filename);
                      image::make($image)->save($location);
                      $actress->image = $filename;
                      $actress->save();
                      return redirect('/admin/actress');
}
         public function edit($id){
         $actress = actress::findOrFail($id);
         return view('admin/actress/edit',compact('actress'));
}
         public function update(Request $request, $id){
                      $request->validate([
                                        'name' => 'required',
                                        'born' => 'required',
                                        'birth_name' => 'required',
                                        'image' => 'required|image',
                                        'desc' => 'required']);
                      $actress = actress::findOrFail($id);
                      $actress->name = request('name');
                      $actress->born = request('born');
                      $actress->birth_name = request('birth_name');
                      $actress->desc = request('desc');
                      $actress->facebook = request('facebook');
                      $actress->twitter = request('twitter');
                      $actress->wiki = request('wiki');
                      $request->hasFile('image');
                      $image = $request->file('image');
                      $filename = $image->getClientOriginalName();
                      $location = public_path('/images/actress/' . $filename);
                      image::make($image)->save($location);
                      $actress->image = $filename;
                      $actress->save();
                      return redirect('/admin/actress');
}
         public function destroy($id){
         actress::findOrFail($id)->delete();
         return redirect('/admin/actress/');}
}
