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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [Contato::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobreNos::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/login', function () {
    return 'Login';
})->name('site.login');

// Realizando o agrupamento das rotas, permitindo o acesso à elas somente após a autenticação do usuário. 'prefix' indica o prefixo que é necessário para acessá-las
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');
    Route::get('/fornecedores', function () {
        return 'Fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

/*
Realizando o redirecionamento de rotas.
Route::get('/rota1', function () {
    echo 'Rota 1';
})->name('site.rota1');

Redirecionamento dentro da função de callback. Essa mesma forma de redirecionamento pode ser utilizada nos Controllers.
Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

Ao acessar a Rota 2, o usuário é redirecionado para a Rota 1.
Route::redirect('/rota2', '/rota1');


Enviando parâmetros nas rotas.
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
