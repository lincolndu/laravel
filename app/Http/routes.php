<?php
 
// Route::get('/', function () {
//      return view('index');
// });
//Home page routing
Route::any('/','StdController@index');
//Blog page routing
Route::any('blog','StdController@blog');
//Gallery page routing
Route::any('gallery','StdController@gallery');
//Sing
Route::any('single/{id}','StdController@single');
Route::any('newpost','StdController@newpost');
//Contact form
Route::any('contact','StdController@contact');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//after login
Route::get('home', 'StdController@index');


//Edit section
Route::get('dashboard','StdController@dashboard');
Route::get('delete/{id}','StdController@delete');
Route::any('edit/{id}','StdController@edit');



Route::any('add_post','StdController@add_post');




// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//category
Route::any('add_cat', 'StdController@add_cat');
Route::any('show_cat/{cat_name}', 'StdController@show_cat');
