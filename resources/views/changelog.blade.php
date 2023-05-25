<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Monitor</title>
    <meta name="description" content="PHP Monitor: Lightweight, native Mac menu bar app that interacts with Laravel Valet. Helps you manage multiple PHP installations, locate config files and more.">
    {{-- Web Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    {{-- Vite --}}
    @vite('resources/css/app.css')
    {{-- OG --}}
    <meta property="og:title" content="PHP Monitor: Lightweight, native Mac menu bar app that interacts with Laravel Valet. Helps you manage multiple PHP installations, locate config files and more.">
    <meta property="og:image" content="{{ url('/images/phpmon-social.png') }}">
    {{-- Twitter --}}
    <meta name="twitter:image:src" content="{{ url('/images/phpmon-social.png') }}">
    <meta name="twitter:site" content="@nicoverbruggen">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PHP Monitor: Lightweight, native Mac menu bar app that interacts with Laravel Valet. Helps you manage multiple PHP installations, locate config files and more.">
    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ url('/favicons/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link rel="shortcut icon" href="{{ url('/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="{{ url('/favicons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="https://cdn.usefathom.com/script.js" data-site="HVPVBSJR" defer></script>
</head>
<body class="font-sans antialiased">
<div>
    <div class="bg-blue-900 flex">
        <header class="flex flex-col m-auto max-w-xl py-5 md:py-8 lg:py-10 p-4">
            <div>
                <x-logo size="100"></x-logo>
                <h1 class="text-5xl font-bold mb-3 text-white">
                    PHP Monitor<br/>
                    <span class="text-blue-400">Early Access</span>
                </h1>
            </div>
        </header>
    </div>
    <div class="px-4">
        <style>
            h1 {
                font-size: 26px;
                font-weight: bold;
            }
            h3 {
                font-size: 15px;
                font-weight: bold;
                margin: 16px 0;
            }
            ul {
                list-style: square;
                margin-left: 20px;
            }
            ul li {
                margin-bottom: 4px;
            }
        </style>
        <div class="flex flex-col m-auto max-w-3xl py-4 md:py-10">
            <h1>Changelog</h1>
            {!! $content !!}
        </div>
    </div>
</div>
</body>
</html>