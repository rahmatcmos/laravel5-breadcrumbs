<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', ['as' => 'home', 'uses' => 'TestController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'TestController@index']);

//Route::get('/page/{id}', ['as' => 'page', 'uses' => 'PageController@show']);
Route::resource('photo', 'PhotoController');
