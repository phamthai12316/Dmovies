<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\year;
class adminyearpagecontroller extends Controller{
       public function __construct(){
       $this->middleware('auth');
}
       public function index(){
            $year = year::paginate(8);
       return view('admin/year/year',compact('year'));
}
       public function show($id){
            $year = year::findOrFail($id);
       return view('admin/year/show',compact('year'));
}
       public function create(){
            $year = year::all();
       return view('admin/year/create',compact('year'));
}
       public function store(Request $request){
            $request->validate([
                         'name' => 'required']);
            $year = new year();
            $year->name = request('name');
            $year->save();
       return redirect('/admin/year');
}
       public function edit($id){
            $year = year::findOrFail($id);
       return view('admin/year/edit',compact('year'));
}
       public function update(Request $request, $id){
            $request->validate([
                              'name' => 'required']);
            $year = year::findOrFail($id);
            $year->name = request('name');
            $year->save();
       return redirect('/admin/year');
}
       public function destroy($id){
             year::findOrFail($id)->delete();
       return redirect('/admin/year/');
    }
}
