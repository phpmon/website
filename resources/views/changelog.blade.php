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
    {{-- Umami --}}
    <script defer src="https://umami.nicoverbruggen.be/script.js" data-website-id="a94ced9c-2bdd-4a02-9c52-f1b8d34aba89"></script>
    {{-- Fathom --}}
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
                font-size: 18px;
                font-weight: bold;
                margin: 32px 0 20px 0;
            }
            ul {
                list-style: square;
                line-height: 160%;
                margin-left: 20px;
            }
            ul li {
                margin-bottom: 10px;
            }
            a {
                text-decoration: underline;
                color: rgb(30, 58, 138);
            }
            p.warning {
                margin-top: 15px;
                background-color: #ffffd0;
                padding: 25px;
                line-height: 160%;
            }
            p.warning::before {
                content: "⚠ ";
            }
            code {
                background-color: #ebf9ff;
                border: 1px solid #bed9ef;
                border-radius: 3px;
                padding: 2px 5px;
                font-size: 14px;
            }
        </style>
        <div class="flex flex-col m-auto max-w-3xl py-4 md:py-10">
            <h1>Changelog</h1>
            <p class="py-4 font-bold">This is the changelog for the early access builds of PHP Monitor. You can gain access to these early access builds by <a href="https://github.com/sponsors/nicoverbruggen" target="_blank">sponsoring the project</a> on a monthly basis on GitHub.</p>
            {!! $content !!}
        </div>
    </div>
</div>
</body>
</html>
