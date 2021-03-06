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

Route::get('/', function () {
    return view('welcome');
});

//System generated controllers
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

//User-defined controllers
Route::resource('pages','PagesController')->middleware('auth');
Route::resource('colleges','CollegesController')->middleware('auth');
Route::resource('professors','ProfessorsController')->middleware('auth');
Route::resource('profiles', 'ProfilesController')->middleware('auth');

//course
Route::resource('courses','CoursesController')->middleware('auth');

//Routes for testing
Route::resource('samples','SampleController');
