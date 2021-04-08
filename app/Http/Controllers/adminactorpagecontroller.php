<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\actor;
class adminactorpagecontroller extends Controller
{

            public function __construct(){
            $this->middleware('auth');
}
            public function index(){
            $actor = actor::paginate(8);
            return view('admin/actor/actors',compact('actor'));
}
            public function show($id){
        	  $actor = actor::findOrFail($id);
            return view('admin/actor/show',compact('actor'));
}
            public function create(){
            $actor = actor::all();
            return view('admin/actor/create',compact('actor'));

}
            public function store(Request $request){
                          $request->validate([
                                            'name' => 'required',
                                            'born' => 'required',
                                            'birth_name' => 'required',
                                            'nick_name' => 'required',
                                            'image' => 'required|image',
                                            'desc' => 'required']);
                          $actor = new actor();
                          $actor->name = request('name');
                          $actor->born = request('born');
                          $actor->birth_name = request('birth_name');
                          $actor->nick_name = request('nick_name');
                          $actor->desc = request('desc');
                          $actor->facebook = request('facebook');
                          $actor->twitter = request('twitter');
                          $actor->wiki = request('wiki');
                          $request->hasFile('image');
                          $image = $request->file('image');
                          $filename = $image->getClientOriginalName();
                          $location = public_path('/images/actor/' . $filename);
                          image::make($image)->save($location);
                          $actor->image = $filename;
                          $actor->save();
                          return redirect('/admin/actor');
}
          public function edit($id){
          $actor = actor::findOrFail($id);
          return view('admin/actor/edit',compact('actor'));
}
          public function update(Request $request, $id){
                          $request->validate([
                                            'name' => 'required',
                                            'born' => 'required',
                                            'birth_name' => 'required',
                                            'nick_name' => 'required',
                                            'image' => 'required|image',
                                            'desc' => 'required']);
                          $actor = actor::findOrFail($id);
                          $actor->name = request('name');
                          $actor->born = request('born');
                          $actor->birth_name = request('birth_name');
                          $actor->nick_name = request('nick_name');
                          $actor->desc = request('desc');
                          $actor->facebook = request('facebook');
                          $actor->twitter = request('twitter');
                          $actor->wiki = request('wiki');
                          $request->hasFile('image');
                          $image = $request->file('image');
                          $filename = $image->getClientOriginalName();
                          $location = public_path('/images/actor/' . $filename);
                          image::make($image)->save($location);
                          $actor->image = $filename;
                          $actor->save();
                          return redirect('/admin/actor');
}
          public function destroy($id){
          actor::findOrFail($id)->delete();
          return redirect('/admin/actor/');
}

}
