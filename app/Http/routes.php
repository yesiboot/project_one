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

/*Route::get('/', function () {
    return view('welcome');

});*/

Route::get('/',[
	'uses' => 'FrontController@index',
	'as'   => 'home'	

	]);


Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function () {
    Route::resource('users', 'UsersController');
    Route::resource('categories', 'CategoriesController');
    Route::resource('articles', 'ArticlesController');
    Route::get('index',[
	'uses' => 'FrontController@admin',
	'as'   => 'administrador'	

	]);
});

Route::get('users/{id}/destroy',[
	'uses' => 'UsersController@destroy',
	'as'   => 'admin.users.destroy'

	]);

Route::get('categories/{id}/destroy',[
	'uses' => 'CategoriesController@destroy',
	'as'   => 'admin.categories.destroy'

	]);
Route::get('articles/{id}/destroy',[
	'uses' => 'ArticlesController@destroy',
	'as'   => 'admin.articles.destroy'

	]);


Route::resource('login', 'LoginController');

Route::get('logout',[
	'uses'=> 'LoginController@logout',
	'as'=>'logout'

	]);