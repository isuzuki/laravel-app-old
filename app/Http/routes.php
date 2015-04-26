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

Route::get('/', 'WelcomeController@index');

Route::group(['namespace' => 'Sample'], function()
{
	Route::group(['prefix' => 'sample/eloquent'], function()
	{
		Route::get('basic', 'EloquentController@basic');
		Route::get('eager', 'EloquentController@eager');
	});
});
