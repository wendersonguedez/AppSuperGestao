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


/* Enviando parâmetros nas rotas.
Route::get('/contato/{nome}/{categoria}', function (string $nome, string $categoria) {
    echo 'Estamos aqui: ' . $nome . ' - ' . $categoria;
});

Tornando o parâmetro 'categoria' opcional. Caso ela não seja informado, um valor default é atribuído para ele.
Route::get(
        '/contato/{nome}/{categoria?}',
        function (
            string $nome,
            string $categoria = 'categoria não informada'
        ) {
            echo 'Estamos aqui: ' . $nome . ' - ' . $categoria;
        }
    );

Utilizando expressões regulares para tratamento dos parâmetros.
Route::get(
    '/contato/{nome}/{categoria_id}',
    function (
        string $nome = 'Desconhecido',
        int $categoria_id = 1 // 1 - Informação
    ) {
        echo 'Estamos aqui: ' . $nome . ' - ' . $categoria_id;
    }
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

*/
