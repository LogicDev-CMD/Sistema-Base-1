<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Titulo da página --}}
    <title>@yield('title', 'Sistema Base')</title>

    {{-- Header da página --}}
    @include('layouts.header')

    {{-- css extra por página --}}
    @stack('css')
</head>

<body>

    {{-- Conteúdo do template/site --}}
    @yield('content')
    {{-- Fim do Conteúdo do template/site --}}

    {{-- Footer da página --}}
    @include('layouts.footer')

    {{-- scripts extra por página --}}
    @stack('scripts')
</body>

</html>
