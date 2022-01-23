<h3>Fornecedor</h3>

{{-- Dentro do bloco de código abaixo, o blade reconhece que se trata de PHP puro. --}}
@php
/*
    if () {

    } elseif () {

    } else {

    }
    */
@endphp

{{-- $fornecedores vem do controller 'FornecedorController' --}}
@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
