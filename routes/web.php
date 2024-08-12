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


Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () { return 'login'; })->name('site.login');


Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get(
        '/fornecedores',
        [App\Http\Controllers\FornecedorController::class, 'index']
    )->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste']);

// Rota de fallback - 404
Route::fallback(function () {
    return 'ERROR 404: A pagina que você está tentando acessar não foi encontrada. <a href="' . route('site.index') . '">Clique aqui</a> para se direcionar a página principal';
});
