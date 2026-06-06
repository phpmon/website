<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <link rel="canonical" href="@yield('canonical', url()->current())">
    {{-- Web Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    {{-- Vite --}}
    @vite('resources/css/app.css')
    {{-- OG --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image', url('/images/phpmon-social.png'))">
    <meta property="og:site_name" content="PHP Monitor">
    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('image', url('/images/phpmon-social.png'))">
    {{-- Favicons --}}
    <link rel="icon" type="image/svg+xml" href="{{ url('/favicon/favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('/favicon/favicon-96x96.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/favicon/apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ url('/favicon/site.webmanifest') }}">
    {{-- Umami --}}
    <script defer src="https://dna.nicoverbruggen.be/script.js" data-website-id="a94ced9c-2bdd-4a02-9c52-f1b8d34aba89"></script>
    @stack('head')
</head>
<body class="font-sans antialiased">
    @yield('content')
</body>
</html>
