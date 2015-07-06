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

Route::get('/', function () {
	
     return view('welcome', array(
 		'items'=>array('item one', 'item two','item three','item four')
 		
     	));
});

Route::any('login','StdController@login');
Route::any('search','StdController@search');
Route::any('register','StdController@register');

Route::any('all_user','StdController@all_user');
Route::any('delete/{user}','StdController@delete');

Route::any('edit/{id}','StdController@edit');

