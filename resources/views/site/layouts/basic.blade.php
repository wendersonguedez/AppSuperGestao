<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('title')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    {{-- Incluindo o topo da paǵina nas views --}}
    @include('site.layouts._partials.topo')
    {{-- Os blocos HTML que estão vindo da view, serão renderizados aqui. --}}
    @yield('content')
</body>

</html>
