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
    return view('auth.login');
});

//System generated controllers
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//User-defined controllers
Route::resource('pages','PagesController')->middleware('auth');

//Routes for testing
Route::resource('samples','SampleController');
