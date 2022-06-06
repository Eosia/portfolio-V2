<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head.index')
    <title> Eosia Web Développeur  | {{  $title ?? 'Accueil' }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

</head>
<body class="font-sans antialiased user-select-none" >
<x-jet-banner />


<div class="min-h-screen bg-gray-100">

    @livewire('navigation-menu')

    @include('includes.loader.index')

    @include('includes.header.index')

    <!-- Bloc de page -->
    <main>
        @yield('content')
    </main>
    <!-- Bloc de page/ -->

    @include('includes.footer.index')
</div>

@stack('modals')

@livewireScripts
</body>
</html>
