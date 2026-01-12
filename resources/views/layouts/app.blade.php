<!DOCTYPE html>
<html lang="pt-BR" data-theme="dark">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Gui Log Transportes - Soluções completas em transporte e logística para todo o Brasil. Entregas pontuais e segurança garantida." />
    <meta name="keywords" content="transporte, logística, frete, carga, entrega, São Paulo, Brasil" />
    <meta name="author" content="Gui Log Transportes" />
    <meta name="theme-color" content="#0f1729" />

    {{-- Titulo da página --}}
    <title>@yield('title', 'Gui Log Transportes | Logística e Transporte para Todo o Brasil')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-gui.css') }}" />

    {{-- css extra por página --}}
    @stack('css')
</head>

<body>

    {{-- Cabeçalho da página com menu --}}
    @include('layouts.header')


    {{-- Conteúdo do template/site --}}
    @yield('content')
    {{-- Fim do Conteúdo do template/site --}}


    {{-- Rodapé da página com menu --}}
    @include('layouts.menu-footer')

    {{-- scripts extra por página --}}
    @stack('scripts')

    {{-- Footer da página --}}
    @include('layouts.footer')

</body>

</html>
