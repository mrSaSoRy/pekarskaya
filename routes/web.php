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
Route::get('all', 'Frontend\MainController@index');
Route::get('/post/{slug}.html', 'Frontend\MainController@singlePost');
Route::get('/category/{id}', 'Frontend\MainController@categoryPost');

Route::get('/', function () {
        return view('welcome');
});
Route::get('/test', function () {
        return view('demo');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/blog', function () {
    return view('layouts/blog_details');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'CategoryController');

Route::resource('pages', 'PageController');
