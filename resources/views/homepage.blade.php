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
</head>
<body class="font-sans">
<div>
    <div class="bg-blue-50 flex">
        <header class="flex flex-col m-auto max-w-xl py-5 md:py-8 lg:py-10 p-4">
            <div>
                <x-logo size="100"></x-logo>
                <h1 class="text-5xl font-bold mb-3 text-blue-800">
                    Monitor and manage<br/>your PHP installations<br/> <span class="text-black">with ease</span>.
                </h1>
                <p class="text-2xl leading-8 mt-8"><b>PHP Monitor</b> (“phpmon”) is a lightweight, native Mac menu bar app that interacts with <a href="https://github.com/laravel/valet" class="text-blue-800 underline">Valet</a>.</p>
                <div class="flex space-x-3 mt-6">
                    <a href="https://nicoverbruggen.be/sponsor" class="mt-4 text-lg px-3 py-2 inline-block bg-blue-900 hover:bg-blue-800 text-white rounded-lg shadow-md">Sponsor</a>
                    <a href="https://github.com/nicoverbruggen/phpmon" class="mt-4 text-lg px-3 py-2 inline-block bg-blue-900 hover:bg-blue-800 text-white rounded-lg shadow-md">GitHub</a>
                    <a href="https://github.com/nicoverbruggen/phpmon/releases" class="mt-4 text-lg px-3 py-2 inline-block bg-green-800 hover:bg-blue-800 text-white rounded-lg shadow-md">Download</a>
                </div>
            </div>
        </header>
    </div>
    <div class="px-4">
        <div class="flex flex-col m-auto max-w-3xl py-10">
            <div class="max-w-3xl m-auto">
                <img src="{{ url('/images/phpmon.jpg') }}" alt="PHP Monitor" class="m-auto max-w-3xl max-w-full bg-gray-100 rounded-xl shadow-lg">
            </div>
            <div class="max-w-2xl m-auto mt-12">
                <p class="text-2xl leading-9 mb-6"><b>PHP Monitor</b> helps you set up and develop <span class="text-blue-800">Laravel</span> and <span class="text-blue-800">Symfony</span> projects. It's also great for <span class="text-blue-800">WordPress</span> or <span class="text-blue-800">Drupal</span> sites. In fact, it's a great companion for all kinds of projects.</p>
                <p class="mb-6 text-lg">This app is made with <span class="text-red-500">♥</span> by <a href="https://nicoverbruggen.be" class="text-blue-800">Nico Verbruggen</a>. It is open source and entirely free to use. Further development of this app is supported by <a class="text-blue-800" href="https://nicoverbruggen.be/sponsor">your donations</a>.</p>
            </div>
        </div>
        <x-feature title="A solid foundation." img-src="/images/valet.png">
            PHP Monitor interacts with your local <b>Laravel Valet</b> installation. That means that PHP Monitor builds upon a solid and trusted foundation. If you've already got that installed, it's very easy to get started.
        </x-feature>
        <x-feature title="Information at a glance." img-src="/images/menu-bar.png" y-position="top" class="lg:flex-row-reverse">
            PHP Monitor lives in your menu bar. From here, you can use the bulk of PHP Monitor's functionality, including the <b>global version switcher</b> as well as <b>services status</b> section.
        </x-feature>
        <x-feature title="No more hunting for config files." img-src="/images/config.png" y-position="top">
            Sometimes you need to edit a <b>configuration file</b> or <b>toggle an extension</b>. But where are those pesky config files located again? From PHP Monitor's menu you can easily find them. Extensions can even be toggled with one click of the button!
        </x-feature>
        <x-feature title="All of your domains in a single list." img-src="/images/domains.png" y-position="top" class="lg:flex-row-reverse">
            Do you have many projects or legacy sites? No worries, the app includes a <b>domain list</b> that you can use to get a quick overview of all domains and proxies you have set up, as well as their PHP version, what type of project they are, and more.
        </x-feature>
        <x-feature title="Quickly link a new domain or proxy." img-src="/images/link-folder.png" y-position="top">
            You can easily <b>link or proxy</b> a folder: you can even easily customize the name of the domain and secure this new domain by simply checking a box. This will make these projects accessible as *.test domains on your system.
        </x-feature>
        <x-feature title="A different PHP version per domain." img-src="/images/isolation.png" y-position="bottom" class="lg:flex-row-reverse">
            In addition to offering a global version switcher (which switches the PHP version for all of your projects), this app also includes support for Valet's <b>site isolation</b> feature. This allows you to use a specific version of PHP with a specific domain, all while retaining the globally linked PHP version.
        </x-feature>
        <x-feature title="Determine compatibility." img-src="/images/phpinfo.png" y-position="top">
            PHP Monitor will help you figure out if your sites are <b>compatible</b> with the <b>currently linked version of PHP</b>. You will receive suggestions when site isolation may be of use.
        </x-feature>
        <x-feature title="A tiny footprint." img-src="/images/sysres.png" y-position="top" class="lg:flex-row-reverse">
            Laravel Valet is a lightweight solution that is much leaner than Docker, and PHP Monitor as a companion tool uses equally few system resources. It is light on RAM and its CPU usage is negligible.
        </x-feature>
        <div class="flex lg:flex-row flex-col m-auto max-w-5xl py-8 gap-x-10">
            <x-single-feature title="Privacy conscious.">
                No tracking. No bullshit. Nothing to worry about. The only outbound connection PHP Monitor makes is a check (that you can disable!) to see if a newer version is available. If you encounter a bug or crash, please get in touch—I'd be happy to help you out.
            </x-single-feature>
            <x-single-feature title="No nagging for donations.">
                PHP Monitor will only ask you to donate <em>once</em>, and should never ask you again... unless you install a fresh copy of the app on a new computer, of course. If you can, please do consider sending me some money!
            </x-single-feature>
        </div>
    </div>
    <footer class="bg-blue-50 flex p-5 mt-6">
        <div class="flex flex-col m-auto max-w-xl space-y-2">
            <p class="text-sm">I hope you enjoy using the app. I hope you find it makes your day-to-day life a little more productive, enjoyable and most importantly... less stressful. Have a great day!</p>
            <p class="text-xs pt-2">&copy; {{ date("Y") }}, Nico Verbruggen. All rights reserved.</p>
        </div>
    </footer>
</div>
</body>
</html>