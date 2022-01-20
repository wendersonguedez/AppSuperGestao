<?php

use App\Http\Controllers\Contato;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNos;
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

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [Contato::class, 'contato']);

Route::get('/sobrenos', [SobreNos::class, 'sobreNos']);

// Enviando parâmetros nas rotas
Route::get('/contato/{nome}/{categoria}', function(string $nome, string $categoria) {
    echo 'Estamos aqui: ' . $nome . ' - ' . $categoria;
});
