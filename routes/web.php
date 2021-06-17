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

use Illuminate\Support\Facades\Route;

Route::get('/', ['as'=>'site.mapa', 'uses'=>'Site\MapaController@mapa']);
Route::get('/questionario',['as'=>'site.questionario', 'uses'=>'Site\QuestionarioController@questionario']);
//////////////////////////// LOGIN /////////////////////////////////////////////////////////////////
Route::get('/login',['as'=>'site.login','uses'=>'Site\MapaController@mapa']);
Route::get('/login/sair',['as'=>'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);
/////////////////////////// CONTATO ///////////////////////////////////////////////////////////////////////////
Route::get('/mail', ['as'=>'site.mail', 'uses'=>'Site\ContatoController@mail']);
Route::get('/contato',['as'=>'site.contato', 'uses'=>'Site\ContatoController@contato']);
Route::get('/admin/contato/listar',['as'=>'site.contato.listar', 'uses'=>'Site\ContatoController@listar']);
Route::post('/admin/contato/salvar',['as'=>'site.contato.salvar', 'uses'=>'Site\ContatoController@salvar']);
Route::get('/admin/contato/deletar{id}',['as'=>'site.contato.deletar', 'uses'=>'Site\ContatoController@deletar']);
Route::get('/admin/contato/zoom{id}',['as'=>'site.contato.zoom', 'uses'=>'Site\ContatoController@zoom']);
/////////////////////////// MIDWARE ///////////////////////////////////////////////////////
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin',['as'=>'site.admin', 'uses'=>'Site\LoginController@admin']);
//////////////////////// QUESTIONARIO //////////////////////////////////////////////////////////////////
    Route::get('/admin/perguntas/adicionar',['as'=>'site.questionario.adicionar', 'uses'=>'Site\QuestionarioController@adicionar']);
    Route::get('/admin/perguntas/listar',['as'=>'site.questionario.listar', 'uses'=>'Site\QuestionarioController@listar']);
    Route::post('/admin/perguntas/salvar',['as'=>'site.questionario.salvar', 'uses'=>'Site\QuestionarioController@salvar']);
    Route::get('/admin/perguntas/editar/{id}',['as'=>'site.questionario.editar', 'uses'=>'Site\QuestionarioController@editar']);
    Route::put('/admin/perguntas/atualizar/{id}',['as'=>'site.questionario.atualizar', 'uses'=>'Site\QuestionarioController@atualizar']);
    Route::get('/admin/perguntas/deletar/{id}',['as'=>'site.questionario.deletar', 'uses'=>'Site\QuestionarioController@deletar']);
///////////////////////// PLANETAS //////////////////////////////////////////////////////////////////
    Route::get('/admin/planetas/listar',['as'=>'site.planeta.listar', 'uses'=>'Site\MapaController@listar']);
    Route::get('/admin/planetas/editar/{id}',['as'=>'site.planeta.editar', 'uses'=>'Site\MapaController@editar']);
    Route::put('/admin/planetas/atualizar/{id}',['as'=>'site.planeta.atualizar', 'uses'=>'Site\MapaController@atualizar']);
});