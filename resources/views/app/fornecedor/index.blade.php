<h3>Fornecedor</h3>

{{-- Exibindo texto de teste usando a sintaxe blade --}}
{{ 'Texto de teste' }}
<br>

{{-- Tag curta para impressão no PHP. --}}
<?= 'Texto de teste <br>' ?>


{{-- Sintaxe blade para comentário --}}

{{-- Dentro do bloco de código abaixo, o blade reconhece que se trata de PHP puro. --}}
@php
// Comentário de uma linha em PHP puro.

/*
    Comentário de multiplas linhas em PHP puro.
*/

echo 'Texto de teste';
@endphp
