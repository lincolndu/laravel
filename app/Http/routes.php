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

Route::any('student','StdController@student');
Route::any('register','StdController@register');

Route::any('do_register','StdController@do_register');

Route::any('all_user','StdController@all_user');
Route::any('delete/{user}','StdController@delete');

Route::any('edit/{id}','StdController@edit');
Route::post('update/{id}', 'CrudController@update');

