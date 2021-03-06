<?php

use App\Http\Controllers\Contato;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNos;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;

/* Rotas para as páginas de navegação do usuário */
Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/contato', [Contato::class, 'contato'])->name('site.contato');
Route::post('/contato', [Contato::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobreNos::class, 'sobreNos'])->name('site.sobrenos');

// Realizando o agrupamento das rotas, permitindo o acesso à elas somente após a autenticação do usuário. 'prefix' indica o prefixo que é necessário para acessá-las
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

// Utilizando as rotas de contingência (fallback). Caso o usuário acessa uma rota inválida, é retornada a rota de contingência.
Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.principal') . '">Clique aqui</a> para voltar para a página inicial.';
});

/* Enviando parâmetros da rota para a action 'teste' do parâmetro 'TesteController'.
Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste'); */

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
