<h3>Fornecedor</h3>

{{-- Dentro do bloco de código abaixo, o blade reconhece que se trata de PHP puro. --}}
@php

@endphp

{{-- $fornecedores vem do controller 'FornecedorController' --}}
{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif --}}


{{-- @unless executa se o retorno for false. --}}

Fornecedor: {{ $fornecedores2[0]['nome'] }}
<br>
Status: {{ $fornecedores2[0]['status'] }}
<br>


@if (!($fornecedores2[0]['status'] == 'S'))
    Fornecedor inativo
@endif

<br>

@unless($fornecedores2[0]['status'] == 'S') <!-- Se o retorna da condição for false. -->
    Fornecedor inativo
@endunless
