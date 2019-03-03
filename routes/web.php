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


Route::get('/about', function () { 
    return view('about');
});

Route::get('/users/{id}', function($id) {
    return view ('user/{id}');
});

Route::get('user/{name}/{id}', function($name, $id) {
    return 'This is '. $name . ' and their user ID is '. $id;
}); //gets the paraameters for the url and pass them into the view


Route::get('/index', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController'); //it automatically creates routes for all the functions in the PostsController