<?php

use App\Mail\newLaravelTips;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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
Route::get('/duvidas-frequentes', 'App\Http\Controllers\WebsiteController@duvidas')->name('website.duvidas');
Route::post('/pesquisar','App\Http\Controllers\WebsiteController@search')->name('website.search');
Route::get('/duvidas-frequencia', 'App\Http\Controllers\WebsiteController@faq')->name('website.faq');
Route::get('/sobre', 'App\Http\Controllers\WebsiteController@sobre')->name('website.sobre');



Route::get('/envio-email/{id}', 'App\Http\Controllers\CampanhaController@destroy');


Route::group(['prefix' => 'cofrinhos'], function () {
	Route::get('/', 'App\Http\Controllers\WebsiteController@campanhas')->name('website.campanhas');
	Route::get('/detalhes/{id}', 'App\Http\Controllers\WebsiteController@detalhes')->name('website.campanhas.detalhes');
});

Route::group(['prefix' => 'pagamento'], function () {
	Route::post('/{id}','App\Http\Controllers\WebsiteController@payment')->name('website.payment.store');
	Route::get('/checkout/{id}','App\Http\Controllers\WebsiteController@checkout')->name('website.payment.checkout');
	Route::get('/sucesso/{id}','App\Http\Controllers\WebsiteController@sucesso')->name('website.payment.success');
	Route::get('/falha/{id}','App\Http\Controllers\WebsiteController@failed')->name('website.payment.failed');
	Route::get('/pendente/{id}','App\Http\Controllers\WebsiteController@pending')->name('website.payment.pending');
});

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => ['CheckPermission','auth']], function () {
	Route::get('/home', 'App\Http\Controllers\HomeController@dashboard')->name('dashboard');

	Route::group(['middleware' => ['auth','CheckPermission']], function () {
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::patch('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
		Route::patch('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	});

	Route::group(['middlware' => ['auth','CheckPermission']], function () {
		Route::resource('usuario', 'App\Http\Controllers\UsersController', ['except' => ['show']]);
	});

	Route::group(['middleware' => ['auth','CheckPermission'],'prefix' => 'usuarios'], function () {
		Route::get('/', ['as' => 'users.index', 'uses' => 'App\Http\Controllers\UsersController@index']);
		Route::get('/criar', ['as' => 'users.create', 'uses' => 'App\Http\Controllers\UsersController@create']);
	});

	Route::group(['prefix' => 'cofrinhos','middleware' => ['auth','CheckPermission']], function () {
		Route::get('/', ['as' => 'campanha.index', 'uses' => 'App\Http\Controllers\CampanhaController@index']);
		Route::get('/criar', ['as' => 'campanha.create', 'uses' => 'App\Http\Controllers\CampanhaController@create']);
		Route::post('/criar', ['as' => 'campanha.store', 'uses' => 'App\Http\Controllers\CampanhaController@store']);
		Route::get('/deletar', ['as' => 'campanha.index_delete', 'uses' => 'App\Http\Controllers\CampanhaController@index_delete']);
        Route::put('/deletar', ['as' => 'campanha.apagar_adm', 'uses' => 'App\Http\Controllers\CampanhaController@apagar_adm']);
		Route::get('/alterar/{id}', ['as' => 'campanha.edit', 'uses' => 'App\Http\Controllers\CampanhaController@edit']);
        Route::put('/update/{id}', ['as' => 'campanha.update', 'uses' => 'App\Http\Controllers\CampanhaController@update']);
        Route::get('/d/{id}', ['as' => 'campanha.desativar', 'uses' => 'App\Http\Controllers\CampanhaController@desativar']);
        Route::put('/deletar/{id}', ['as' => 'campanha.destroy', 'uses' => 'App\Http\Controllers\CampanhaController@destroy']);
		Route::get('/a/{id}', ['as' => 'campanha.ativar', 'uses' => 'App\Http\Controllers\CampanhaController@ativar']);
        Route::get('/visualizacao/{id}', ['as' => 'campanha.show', 'uses' => 'App\Http\Controllers\CampanhaController@show']);
	});

	Route::group(['prefix' => 'categorias', 'middleware' => ['auth','CheckPermission']], function () {
		Route::get('/', ['as' => 'categorias.index', 'uses' => 'App\Http\Controllers\CategoryController@index']);
		Route::post('/create', ['as' => 'categorias.store', 'uses' => 'App\Http\Controllers\CategoryController@store']);
		Route::put('/update/{id}', ['as' => 'categorias.update', 'uses' => 'App\Http\Controllers\CategoryController@update']);
		Route::put('/deactive/{id}', ['as' => 'categorias.deactive', 'uses' => 'App\Http\Controllers\CategoryController@deactive']);
		Route::put('/active/{id}', ['as' => 'categorias.active', 'uses' => 'App\Http\Controllers\CategoryController@active']);
    });

	Route::group(['middleware' => ['auth','CheckPermission']], function () {
		Route::resource('pagamentos', 'App\Http\Controllers\PaymentController');
		Route::post('pagamentos/saque/{id}','App\Http\Controllers\PaymentController@saque')->name('pagamentos.saque');
		Route::put('pagamentos/saque/{id}','App\Http\Controllers\PaymentController@update')->name('pagamentos.saque.atualizar');

	});

	Route::group(['middleware' => ['auth','CheckPermission'], 'prefix' => 'parametros'], function () {
		Route::get('/',['as' => 'parametros.index', 'uses' => 'App\Http\Controllers\ParametersController@index']);
		Route::put('/update/{id}',['as' => 'parametros.update', 'uses' => 'App\Http\Controllers\ParametersController@update']);
	});

});
