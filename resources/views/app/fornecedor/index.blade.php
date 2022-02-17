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

@unless executa se o retorno for false.
    @unless($fornecedores[0]['status'] == 'S')
        Fornecedor inativo
        <br>
    @endunless
    
@isset retorna true se a variável passada como parâmetro estiver setada.
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

Bloco de código switch no blade.
    @switch($fornecedores[2]['ddd'])
        @case ('11')
            São Paulo - SP
            @break
        @case ('32')
            Juiz de Fora - Minas Gerais
            @break
        @case ('85')
            Fortaleza - CE
            @break
        @default
            Estado não identificado
    @endswitch

Bloco de código for no blade.
    @isset($fornecedores)
        @for($i = 0; isset($fornecedores[$i]); $i++)
            Fornecedor: {{ $fornecedores[$i]['nome'] }}
            <br>
            Status: {{ $fornecedores[$i]['status'] }}
            <br>
            CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        
                '??', só executa caso:
                $variavel testada não estiver definida (isset)
                ou
                $variavel testada possui o valor null
            
            <br>
            Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
            <hr>
        @endfor
    @endisset

Bloco de código while no blade.
    @isset($fornecedores)
        @php $i = 0 @endphp
        @while(isset($fornecedores[$i]))
            Fornecedor: {{ $fornecedores[$i]['nome'] }}
            <br>
            Status: {{ $fornecedores[$i]['status'] }}
            <br>
            CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
            
                '??', só executa caso:
                $variavel testada não estiver definida (isset)
                ou
                $variavel testada possui o valor null
            
            <br>
            Telefone: ({{ $fornecedores[$i]['ddd'] ?? ''}}) {{ $fornecedores[$i]['telefone'] ?? '' }}
            <hr>
            @php $i++ @endphp
        @endwhile
    @endisset

Bloco de código foreach no blade.
    @isset($fornecedores)
        @foreach($fornecedores as $fornecedor)
            Fornecedor: {{ $fornecedor['nome'] }}
            <br>
            Status: {{ $fornecedor['status'] }}
            <br>
            CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
                '??', só executa caso:
                $variavel testada não estiver definida (isset)
                ou
                $variavel testada possui o valor null
            <br>
            Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}
            <hr>
        @endforeach
    @endisset
--}}

@isset($fornecedores)
    @foreach($fornecedores as $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        {{--
            '??', só executa caso:
            $variavel testada não estiver definida (isset)
            ou
            $variavel testada possui o valor null
        --}}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? ''}}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @endforeach
@endisset
