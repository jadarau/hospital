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
    
    return view('principal.pages.home');
});
//MENUS

Route::get('hospital','MenuController@hospital');
Route::get('ubs','MenuController@ubs');
Route::resource('busca','PessoasController');
Route::get('home','MenuController@home');
Route::get('classificados', function () {
    return view('pages.classificados');
});
Route::get('classificacao','ClassificaController@index');
Route::get('historico','ClassificaController@result');
// Route::get('novopac','MenuController@paciente');
Route::get('class','MenuController@class');
Route::get('ubs/recepcao','MenuController@recepcao');
Route::get('atendimento','MenuController@atendimento');
Route::get('internacao','MenuController@internacao');
Route::get('profissional','MenuController@profissional');
Route::get('enfermaria','MenuController@enfermaria');
Route::get('leito','MenuController@leito');
Route::get('laboratorio','MenuController@laboratorio');
Route::get('geografiapaises','GeografiaController@geopais');
// Route::get('geografiaestados/{id}','GeografiaController@getEstados');
Route::post('geografiaestados','GeografiaController@estados')->name('uf');
Route::get('geografiamunicipios','GeografiaController@geomunicipios');

//PACIENTE
Route::get('ubs/paciente/novo','UbsController@paciente');
// Route::get('paciente','PacienteController@paciente');
Route::get('ubs/buscapaciente','PacienteController@localizar');
Route::post('ubs/paciente/cadastro','PacienteController@cadastro');
Route::get('buscapac','PacienteController@localizar');
//Route::get('direciona2','PacienteController@direciona2');
// Route::get('/editarpac/{id}','PacienteController@editar');
Route::get('ubs/editarpac/{id}','PacienteController@editar');

Route::get('encaminhar', function(){
    return view ('telas.encaminhar');
});
// Route::get('parametro/{idPessoa}', function ($id = null) {
//     return "{$id}";
// });

//Route::post('ajaxRequestPost', 'PacienteController@ajaxRequestPost');

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