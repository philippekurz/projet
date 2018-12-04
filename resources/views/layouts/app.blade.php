<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>{{ $titre }}</title>
    <link rel="stylesheet" href="/css/app.css" />
    <script src="/js/app.js"></script>

</head>
<body>
    <header>
        @include('inc.nav')
    </header>

    <main>
        @yield('contenu')
    </main>

    <footer>
        @include('inc.footer')
    </footer>
    
</html>