<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/* API DE LISTAR TODOS*/
Route::get('/listar_certidao', 'CertidaoController@APIlistar')->name('APIlistarCertidao');
Route::get('/listar_tabeliao', 'TabeliaoController@APIlistar')->name('APIlistarTabeliao');
Route::get('/listar_contrato', 'ContratoController@APIlistar')->name('APIlistarContrato');


/* API PARA INSERT */
Route::post('/insert_tabeliao', 'TabeliaoController@APIinsert')->name('APIinsertTabeliao');
Route::post('/insert_certidao', 'CertidaoController@APIinsert')->name('APIinsertCertidao');
Route::post('/insert_contrato', 'ContratoController@APIinsert')->name('APIinsertContrato');


/* API PARA BUSCAR */
Route::get('/buscar_tabeliao/{id}', 'TabeliaoController@APIbuscar')->name('APIbuscarTabeliao');
Route::get('/buscar_certidao/{id}', 'CertidaoController@APIbuscar')->name('APIbuscarCertidao');
Route::get('/buscar_contrato/{id}', 'ContratoController@APIbuscar')->name('APIbuscarContrato');


/* API PARA EDITAR */
Route::put('/editar_tabeliao/{id}', 'TabeliaoController@APIeditar')->name('APIeditarTabeliao');
Route::put('/editar_certidao/{id}', 'CertidaoController@APIeditar')->name('APIeditarCertidao');
Route::put('/editar_contrato/{id}', 'ContratoController@APIeditar')->name('APIeditarContrato');


/* API PARA DELETAR */
Route::delete('/deletar_tabeliao/{id}', 'TabeliaoController@APIdeletar')->name('APIdeletarTabeliao');
Route::delete('/deletar_certidao/{id}', 'CertidaoController@APIdeletar')->name('APIdeletarCertidao');
Route::delete('/deletar_contrato/{id}', 'ContratoController@APIdeletar')->name('APIdeletarContrato');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
