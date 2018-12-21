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





Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'mainController@index');

Route::get('/search', 'SearchController@search');
Route::get('/showAll', 'SearchController@showAll');

Route::get('/faq', function() {
  return view('faq');
});

Route::get('/register', 'mainController@registration');

Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallbackGoogle');

Route::get('/publications', 'ResultController@index');
Route::get('/detail/{id}', 'PublicationController@show');

Route::get('profile', 'ProfileController@profile');

Route::get('/newPublication', 'PublicationController@create');
Route::post('/newPublication', 'PublicationController@store');

Route::get('/edit/{id}', 'PublicationController@edit');
Route::post('/edit/{id}', 'PublicationController@update');

Route::get('/destroy/{id}', 'PublicationController@destroy');
