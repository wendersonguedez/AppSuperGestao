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


{{-- Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>


@unless executa se o retorno for false.
    @unless($fornecedores[0]['status'] == 'S')
        Fornecedor inativo
        <br>
    @endunless --}}

{{-- @isset retorna true se a variável passada como parâmetro estiver setada.
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio
        @endempty
    @endisset
@endisset

@empty retorna true se a variável passada como parâmetro estiver vazia. 
    - ''
    - 0
    - 0.0   
    - '0'
    - null
    - false
    - array()
    - $var  
--}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
    {{--
        $variavel testada não estiver definida (isset)
        ou
        $variavel testada possui o valor null
    --}}
@endif
