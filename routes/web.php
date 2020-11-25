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
Route::get('/termos-e-condicoes', 'App\Http\Controllers\WebsiteController@tos')->name('website.tos');
Route::get('/politica-de-privacidade', 'App\Http\Controllers\WebsiteController@politica')->name('website.politica');

Route::group(['prefix' => 'campanhas'], function () {
	Route::get('/', 'App\Http\Controllers\WebsiteController@campanhas')->name('website.campanhas');
	Route::get('/detalhes/{id}', 'App\Http\Controllers\WebsiteController@detalhes')->name('website.campanhas.detalhes');
});

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

	Route::group(['prefix' => 'campanhas','middleware' => 'auth'], function () {
		Route::get('/', ['as' => 'campanha.index', 'uses' => 'App\Http\Controllers\CampanhaController@index']);
		Route::get('/criar', ['as' => 'campanha.create', 'uses' => 'App\Http\Controllers\CampanhaController@create']);
		Route::post('/criar', ['as' => 'campanha.store', 'uses' => 'App\Http\Controllers\CampanhaController@store']);
		Route::get('/alterar/{id}', ['as' => 'campanha.edit', 'uses' => 'App\Http\Controllers\CampanhaController@edit']);
        Route::put('/update/{id}', ['as' => 'campanha.update', 'uses' => 'App\Http\Controllers\CampanhaController@update']);
        Route::put('/d/{id}', ['as' => 'campanha.desativar', 'uses' => 'App\Http\Controllers\CampanhaController@desativar']);
        Route::put('/a/{id}', ['as' => 'campanha.ativar', 'uses' => 'App\Http\Controllers\CampanhaController@ativar']);

	});

	Route::group(['prefix' => 'categorias'], function () {
		Route::get('/', ['as' => 'categorias.index', 'uses' => 'App\Http\Controllers\CategoryController@index']);
		Route::post('/create', ['as' => 'categorias.store', 'uses' => 'App\Http\Controllers\CategoryController@store']);
		Route::put('/update/{id}', ['as' => 'categorias.update', 'uses' => 'App\Http\Controllers\CategoryController@update']);
		Route::put('/deactive/{id}', ['as' => 'categorias.deactive', 'uses' => 'App\Http\Controllers\CategoryController@deactive']);
		Route::put('/active/{id}', ['as' => 'categorias.active', 'uses' => 'App\Http\Controllers\CategoryController@active']);
	});

});