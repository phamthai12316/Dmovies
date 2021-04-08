<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use App\blog;
class adminblogpagecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


          public function index(){
                               $blog = blog::paginate(4);
          return view('admin/blog/blog', compact('blog'));}
           public function show($id){
                                $blog = blog::findOrFail($id);
          return view('admin/blog/show',compact('blog'));}
          public function create(){
                                $blog = blog::all();
          return view('admin/blog/create',compact('blog'));}
          public function store(Request $request){
                                $request->validate(['name'  => 'required',
                                                    'image' => 'required|image',
                                                    'desc'  => 'required',
                                                    'day'   => 'required',
                                                    'month' => 'required',
                                                    'year'  => 'required']);
                                $blog = new blog();
                                $blog->name  = request('name');
                                $blog->day   = request('day');
                                $blog->month = request('month');
                                $blog->year  = request('year');
                                $blog->desc  = request('desc');
                                $request->hasFile('image');
                                $image    = $request->file('image');
                                $filename = $image->getClientOriginalName();
                                $location = public_path('/images/blog/' . $filename);
                                image::make($image)->save($location);
                                $blog->image = $filename;
                                $blog->save();
                                return redirect('/admin/blog/');}
          public function edit($id){
                                $blog = blog::findOrFail($id);
          return view('admin/blog/edit', compact('blog'));}
          public function update(Request $request, $id){
                                $request->validate(['name'  => 'required',
                                                    'image' => 'required|image',
                                                    'desc'  => 'required',
                                                    'day'   => 'required',
                                                    'month' => 'required',
                                                    'year'  => 'required']);
                                $blog = blog::findOrFail($id);
                                $blog->name  = request('name');
                                $blog->day   = request('day');
                                $blog->month = request('month');
                                $blog->year  = request('year');
                                $blog->desc  = request('desc');
                                $request->hasFile('image');
                                $image    = $request->file('image');
                                $filename = $image->getClientOriginalName();
                                $location = public_path('/images/blog/' . $filename);
                                image::make($image)->save($location);
                                $blog->image = $filename;
                                $blog->save();
                                return redirect('/admin/blog');}
          public function destroy($id){
                blog::findOrFail($id)->delete();
          return redirect('/admin/blog');}
}
