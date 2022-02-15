<h3>Fornecedor</h3>

{{-- Dentro do bloco de código abaixo, o blade reconhece que se trata de PHP puro. --}}
@php

@endphp

{{-- $fornecedores vem do controller 'FornecedorController'

Bloco de código @if/@else no blade.
    @if (count($fornecedores) > 0 && count($fornecedores) < 10)
        <h3>Existem alguns fornecedores cadastrados</h3>
    @elseif (count($fornecedores) > 10)
        <h3>Existem vários fornecedores cadastrados</h3>
    @else
        <h3>Ainda não existem fornecedores cadastrados</h3>
    @endif


{{-- Fornecedor: {{ $fornecedores2[0]['nome'] }}
<br>
Status: {{ $fornecedores2[0]['status'] }}
<br>


@unless executa se o retorno for false.
    @unless($fornecedores2[0]['status'] == 'S')
        Fornecedor inativo
        <br>
    @endunless --}}

{{-- @isset retorna true se a variável passada como parâmetro estiver setada. --}}
@isset($fornecedores2)
    Fornecedor: {{ $fornecedores2[0]['nome'] }}
    <br>
    Status: {{ $fornecedores2[0]['status'] }}
    <br>
    @isset($fornecedores2[0]['cnpj'])
        CNPJ: {{ $fornecedores2[0]['cnpj'] }}
        @empty($fornecedores2[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset

{{-- @empty retorna true se a variável passada como parâmetro estiver vazia. 
    - ''
    - 0
    - 0.0   
    - '0'
    - null
    - false
    - array()
    - $var 
--}}
