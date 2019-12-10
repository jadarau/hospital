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



Route::get('/', function () {
    
    return view('pages.home');
});
//MENUS


Route::resource('busca','PessoasController');
Route::get('home','MenuController@home');
Route::get('classificados', function () {
    return view('pages.classificados');
});
Route::get('classificacao','ClassificaController@index');
Route::get('historico','ClassificaController@result');

Route::get('class','MenuController@class');
Route::get('paciente','MenuController@paciente');
Route::get('recepcao','MenuController@recepcao');
Route::get('atendimento','MenuController@atendimento');
Route::get('internacao','MenuController@internacao');
Route::get('profissional','MenuController@profissional');
Route::get('enfermaria','MenuController@enfermaria');
Route::get('leito','MenuController@leito');
Route::get('laboratorio','MenuController@laboratorio');

//PACIENTE
//Route::get('cadastro','PacienteController@cadastro');
Route::post('paciente/cadastro','PacienteController@cadastro');
Route::get('buscapac','PacienteController@localizar');
Route::get('direciona2','PacienteController@direciona2');
Route::get('/direciona/{id}','PacienteController@direciona');
// Route::get('parametro/{idPessoa}', function ($id = null) {
//     return "{$id}";
// });

Route::post('ajaxRequestPost', 'PacienteController@ajaxRequestPost');

//RECEPCAO
Route::get('recepcao/admissao','RecepcaoController@admissao');
Route::get('recepcao/encaminha','RecepcaoController@encaminha');
Route::get('recepcao/agendamento','RecepcaoController@agendamento');

//CLASSIFICACAO


//ATENDIMENTO


//INTERNAMENTO


//ALTA INTERNACAO


//DISPENSACAO


//LABORATORIO


//ALMOXARIFADO


//PACIENTES


//UNIDADES


//PROFISSIONAIS


//ENFERMARIA


//LEITOS