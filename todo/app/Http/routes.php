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

// Route::get('/', function() {
// 	return view('login');
// });


Route::get('/', ['as' => 'get_home', 'uses' => 'TodoController@get_home']);

Route::post('login', ['as' => 'post_login', 'uses' => 'TodoController@post_login']);

Route::post('signup', ['as' => 'post_signup', 'uses' => 'TodoController@post_signup']);

Route::group(['middleware' => 'auth'], function() {
	Route::get('account', ['as' => 'get_account', 'uses' => 'TodoController@get_account']);

	Route::get('logout', ['as' => 'get_logout', 'uses' => 'TodoController@get_logout']);

	Route::post('account/add', ['as' => 'post_new_item', 'uses' => 'TodoController@post_new_item']);

	Route::get('account/{id}/edit', ['as' => 'get_edit_item', 'uses' => 'TodoController@get_edit_item']);

	Route::get('account/{id}/delete', ['as' => 'get_remove_item', 'uses' => 'TodoController@get_remove_item']);

	Route::put('account/{id}/edit', ['as' => 'put_edit_item', 'uses' => 'TodoController@put_edit_item']);

});


Route::get('login', function() {
	return redirect()->route('get_home');
});