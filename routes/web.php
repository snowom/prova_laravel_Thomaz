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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/* ROTAS DE LISTAR TODOS*/
Route::get('/listar_certidao', 'CertidaoController@listar')->name('listarCertidao');
Route::get('/listar_tabeliao', 'TabeliaoController@listar')->name('listarTabeliao');
Route::get('/listar_contrato', 'ContratoController@listar')->name('listarContrato');


/* ROTAS PARA INSERT */
Route::post('/insert_tabeliao', 'TabeliaoController@insert')->name('insertTabeliao');
Route::post('/insert_certidao', 'CertidaoController@insert')->name('insertCertidao');
Route::post('/insert_contrato', 'ContratoController@insert')->name('insertContrato');


/* VIEW DE INSERT */
Route::get('/view_tabeliao', 'TabeliaoController@viewAdc')->name('viewTabeliao');
Route::get('/view_certidao', 'CertidaoController@viewAdc')->name('viewCertidao');
Route::get('/view_contrato', 'ContratoController@viewAdc')->name('viewCertidao');

/* ROTAS PARA BUSCAR */
Route::get('/buscar_tabeliao/{id}', 'TabeliaoController@buscar')->name('buscarTabeliao');
Route::get('/buscar_certidao/{id}', 'CertidaoController@buscar')->name('buscarCertidao');
Route::get('/buscar_contrato/{id}', 'ContratoController@buscar')->name('buscarContrato');


/* ROTAS PARA EDITAR */
Route::put('/editar_tabeliao/{id}', 'TabeliaoController@editar')->name('editarTabeliao');
Route::put('/editar_certidao/{id}', 'CertidaoController@editar')->name('editarCertidao');
Route::put('/editar_contrato/{id}', 'ContratoController@editar')->name('editarContrato');


/* ROTAS PARA DELETAR */
Route::delete('/deletar_tabeliao/{id}', 'TabeliaoController@deletar')->name('deletarTabeliao');
Route::delete('/deletar_certidao/{id}', 'CertidaoController@deletar')->name('deletarCertidao');
Route::delete('/deletar_contrato/{id}', 'ContratoController@deletar')->name('deletarContrato');

