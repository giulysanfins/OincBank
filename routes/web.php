<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\WebsiteController@index')->name('website.index');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
	Route::get('/home', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');

	Route::group(['middleware' => 'auth'], function () {
		// Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
		Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	});

	Route::group(['middleware' => 'auth','prefix' => 'usuarios'], function () {
		Route::get('/', ['as' => 'users.index', 'uses' => 'App\Http\Controllers\UsersController@index']);
		Route::get('/criar', ['as' => 'users.create', 'uses' => 'App\Http\Controllers\UsersController@create']);
	});
});



// Route::group(['middleware' => 'auth'], function () {
// 	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
// });

