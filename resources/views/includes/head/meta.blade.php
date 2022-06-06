<!--metas du portfolio-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="title" content="Eosia | {{  $title ?? 'Accueil' }}">
<meta name="description" content="Eosia | {{  $description ?? ', développeur web la trentaine, basé à Liège en Belgique, passionné de cybersécurité et de code' }}">
<meta name="keywords" lang="fr" content="code, web, web developement, web developer, web développement,
web développeur, site web, code source, html, css, php, symfony, création de site web, seo, backend,
frontend, fullstack, adminsys, it, cybersécurité, belgique, liège, belgium, belgium developer" />
<meta name="robots" content="index, follow">
<meta name="language" content="French">
<meta name="Author" content="Eosia" />
<meta name="Identifier-Url" content="https://www.eosia.dev" />
<link rel="canonical" href="{{ $canonical ?? 'https://www.eosia.dev' }}" />
<!--metas du portfolio/-->

<!--og-->

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.eosia.dev">
<meta property="og:title" content="Eosia | {{  $title ?? 'Accueil' }}">
<meta property="og:description" content="Eosia | {{  $description ?? ', développeur web la trentaine, basé à Liège en Belgique, passionné de cybersécurité et de code' }}">
<meta property="og:image" content="{{ asset('assets/img/favicon/logo.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.eosia.dev">
<meta property="twitter:title" content="Eosia Web développeur">
<meta property="twitter:description" content="Eosia | {{  $description ?? ', développeur web la trentaine, basé à Liège en Belgique, passionné de cybersécurité et de code' }}">
<meta property="twitter:image" content="{{ asset('assets/img/favicon/logo.png') }}">
<!--og/-->

<!--csrf token-->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<!--csrf token/-->

