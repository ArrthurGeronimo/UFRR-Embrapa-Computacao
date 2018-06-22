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
    return view('welcome');
});

Route::get('profile', 'UserController@profile');
Route::post('profile', 'UserController@update_avatar');

Route::resource('posts', 'PostController');
Route::resource('fazenda', 'FazendaController');
Route::get('fazenda/{id}/talhoes', 'FazendaController@verTalhoes');
Route::get('fazenda/{id}/talhoes/create', 'FazendaController@criarTalhao');
Route::get('fazenda/{id}/animais', 'FazendaController@verAnimais');
Route::get('fazenda/{id}/animais/create', 'FazendaController@criarAnimal');

Route::resource('talhao', 'TalhaoController');
Route::resource('animal', 'AnimalController');
Route::resource('manejoanimal', 'ManejoanimalController');
Route::resource('animaldado', 'AnimaldadoController');
Route::resource('amostra', 'AmostraController');
Route::resource('estacao', 'EstacaoController');
Route::resource('piquete', 'PiqueteController');
Route::resource('operacao', 'OperacaoController');
Route::resource('insumo', 'InsumoController');
Route::resource('servico', 'ServicoController');
Route::resource('praga', 'PragaController');
Route::resource('cultura', 'CulturaController');
Route::resource('plantiocultura', 'PlantioculturaController');
Route::resource('soloamostra', 'SoloamostraController');


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
