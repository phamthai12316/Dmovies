<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'pagecontroller@welcome');
Route::get('movie/68{id}439', 'moviepagecontroller@show');
Route::get('movies', 'moviepagecontroller@index');
Route::get('/contact','contactformController@index');
Route::get('/about','aboutpagecontroller@index');
Route::get('director/68{id}439', 'directorpagecontroller@show');
Route::get('actor/68{id}439', 'actorpagecontroller@show');
Route::get('writer/68{id}439', 'writerpagecontroller@show');
Route::get('actress/68{id}439', 'actresspagecontroller@show');
Route::get('blog/posts', 'blogpagecontroller@index');
Route::get('/admin/logout','pagecontroller@log');
Route::get('blog/posts/68{id}439', 'blogpagecontroller@show');
Route::post('/', 'newsletterController@store');
Route::post('movie/68{id}439', 'moviepagecontroller@store');
Route::post('/contact/send', 'contactformController@send');
Route::post('director/68{id}439', 'directorpagecontroller@store');
Route::post('actor/68{id}439', 'actorpagecontroller@store');
Route::post('writer/68{id}439', 'writerpagecontroller@store');
Route::post('actress/68{id}439', 'actresspagecontroller@store');
Route::post('blog/posts/68{id}439', 'blogpagecontroller@store');


Auth::routes(['register' => false]);
Route::get('/admin/comments','admincommentpagecontroller@index');
Route::delete('/admin/comments/{id}','admincommentpagecontroller@destroy');
Route::get('/admin/dashboard', 'HomeController@index')->name('Dashboard');
Route::resource('/admin/movies', 'adminmoviepagecontroller');
Route::resource('/admin/director', 'admindirectorpagecontroller');
Route::resource('/admin/writer', 'adminwriterpagecontroller');
Route::resource('/admin/actor', 'adminactorpagecontroller');
Route::resource('/admin/actress', 'adminactresspagecontroller');
Route::resource('/admin/genre', 'admingenrepagecontroller');
Route::resource('/admin/year', 'adminyearpagecontroller');
Route::resource('/admin/blog', 'adminblogpagecontroller');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
