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

Auth::routes();

Route::get('/index', function () {
    return view('index');
});

/* Intercambistas */
Route::get('/cadastrar-intercambista', function () {
    return view('pages.dashboard.intercambistas.form-intercambista');
});
Route::post('/store_intercambista', 'IntercambistaController@store');
Route::get('/listar-intercambista', 'IntercambistaController@show');
Route::get('/editar-intercambista', 'IntercambistaController@edit');
Route::post('/update-intercambista', 'IntercambistaController@update');
Route::get('/remover-intercambista', 'IntercambistaController@destroy');


/* Pontos Atrativos */
Route::get('/cadastrar-pontos-atrativos', function(){
    return view ('pages.dashboard.pontos-turisticos.form-pontos-turisticos');
});
Route::post('/store-pontos-atrativos', 'PontosController@store');
Route::get('/listar-pontos-atrativos', 'PontosController@show');
Route::get('/editar-pontos-atrativos', 'PontosController@edit');
Route::post('/update-pontos-atrativos', 'PontosController@update');