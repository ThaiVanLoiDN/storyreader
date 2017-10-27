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

Route::pattern('slug', '(.*)');
Route::pattern('id', '[0-9]+');

Auth::routes();

Route::group(['namespace' => 'FrontEnd'], function(){

	Route::get('/', 'HomeController@index')->name('frontend.home.index');
	Route::get('all', 'HomeController@all')->name('frontend.home.all');

	Route::get('{slug}-{id}', 'CategoryController@show')->name('frontend.category.show');
	
	Route::get('{slug}-{id}.preview', 'StoryController@preview')->name('frontend.story.preview');
	Route::get('{slug}-{id}.html', 'StoryController@show')->name('frontend.story.show');

	Route::get('search', 'SearchController@search')->name('frontend.search.search');
});

Route::group(['namespace' => 'BackEnd', 'prefix' => 'manage', 'middleware' => 'auth'], function(){

	Route::get('/', 'HomeController@index')->name('home.index');
	
	Route::resource('users', 'UserController');
	Route::resource('stories', 'StoryController');
	Route::resource('categories', 'CategoryController');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
