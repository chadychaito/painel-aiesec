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


/* Principal */
Route::get('/', 'PrincipalController@home');
Route::get('/index', 'PrincipalController@index')->middleware('auth');
Route::get('/home', 'PrincipalController@home');

/* Rotas Autenticação */
Auth::routes();

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
Route::get('/remover-pontos-atrativos', 'PontosController@destroy');

/* Faqs */
Route::get('/cadastrar-faq', function (){
    return view('pages.dashboard.faq.form-faq');
});
Route::post('/store-faq', 'FaqController@store');
Route::get('/listar-faq', 'FaqController@show');
Route::get('/editar-faq', 'FaqController@edit');
Route::post('/update-faq', 'FaqController@update');
Route::get('/remover-faq', 'FaqController@destroy');

/* Hosts */
Route::get('/cadastrar-hosts', function(){
    return view('pages.dashboard.hosts.form-host');
});
Route::post('/store-hosts', 'HostController@store');
Route::get('/listar-hosts', 'HostController@show');
Route::get('/editar-hosts', 'HostController@edit');
Route::post('/update-hosts', 'HostController@update');
Route::get('/remover-hosts', 'HostController@destroy');

/* Ongs */
Route::get('/cadastrar-ongs', function(){
    return view('pages.dashboard.ongs.form-ong');
});
Route::post('/store-ongs', 'OngController@store');
Route::get('/listar-ongs', 'OngController@show');
Route::get('/editar-ongs', 'OngController@edit');
Route::post('/update-ongs', 'OngController@update');
Route::get('/remover-ongs', 'OngController@destroy');

/* Projetos */
Route::get('/cadastrar-projetos', function(){
    return view('pages.dashboard.projetos.form-projeto');
});
Route::post('/store-projetos', 'ProjetoController@store');
Route::get('/listar-projetos', 'ProjetoController@show');
Route::get('/editar-projetos', 'ProjetoController@edit');
Route::post('/update-projetos', 'ProjetoController@update');
Route::get('/remover-projetos', 'ProjetoController@destroy');


/* Buddies */
Route::get('/cadastrar-buddies', function(){
    return view('pages.dashboard.buddies.form-buddy');
});
Route::post('/store-buddies', 'BuddyController@store');
Route::get('/listar-buddies', 'BuddyController@show');
Route::get('/editar-buddies', 'BuddyController@edit');
Route::post('/update-buddies', 'BuddyController@update');
Route::get('/remover-buddies', 'BuddyController@destroy');
