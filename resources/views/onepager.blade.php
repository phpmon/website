<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Monitor</title>
    <meta name="description" content="PHP Monitor: Lightweight, native Mac menu bar app that interacts with Laravel Valet. Helps you manage multiple PHP installations, locate config files and more.">
    {{-- OG --}}
    <meta property="og:title" content="PHP Monitor: Lightweight, native Mac menu bar app that interacts with Laravel Valet. Helps you manage multiple PHP installations, locate config files and more.">
    <meta property="og:image" content="{{ url('/images/phpmon-social.png') }}">
    {{-- Twitter --}}
    <meta name="twitter:image:src" content="{{ url('/images/phpmon-social.png') }}">
    <meta name="twitter:site" content="@nicoverbruggen">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PHP Monitor: Lightweight, native Mac menu bar app that interacts with Laravel Valet. Helps you manage multiple PHP installations, locate config files and more.">
    {{-- Vite --}}
    @vite('resources/css/app.css')
</head>
<body>
<div>
    <div class="bg-blue-50 flex">
        <header class="flex flex-col m-auto max-w-xl py-5 md:py-8 lg:py-10 p-4">
            <div>
                <svg width="100" height="100" viewbox="0 0 22 22" xmlns="http://www.w3.org/2000/svg"><path d="M8.975 8.375H8.3V6.844a.223.223 0 00-.225-.219h-.45a.223.223 0 00-.225.219V9.03c0 .12.101.219.225.219h1.35a.223.223 0 00.225-.219v-.437a.223.223 0 00-.225-.219zm10.575 5.25h-.45v-2.956c0-.347-.143-.68-.397-.927l-2.81-2.731a1.37 1.37 0 00-.953-.386H13.7V5.312C13.7 4.588 13.095 4 12.35 4h-9C2.605 4 2 4.588 2 5.313v8.75c0 .724.605 1.312 1.35 1.312h.45C3.8 16.825 5.01 18 6.5 18c1.49 0 2.7-1.176 2.7-2.625h3.6c0 1.45 1.21 2.625 2.7 2.625 1.49 0 2.7-1.176 2.7-2.625h1.35c.247 0 .45-.197.45-.438v-.874a.445.445 0 00-.45-.438zM6.5 16.688c-.745 0-1.35-.588-1.35-1.313s.605-1.313 1.35-1.313c.745 0 1.35.588 1.35 1.313s-.605 1.313-1.35 1.313zm1.35-4.813c-1.74 0-3.15-1.37-3.15-3.063C4.7 7.12 6.11 5.75 7.85 5.75S11 7.12 11 8.813c0 1.692-1.41 3.062-3.15 3.062zm7.65 4.813c-.745 0-1.35-.588-1.35-1.313s.605-1.313 1.35-1.313c.745 0 1.35.588 1.35 1.313s-.605 1.313-1.35 1.313zM17.75 11H13.7V7.937h1.24l2.81 2.732V11z" fill="rgb(30 64 175)" fill-rule="nonzero"></path></svg>
                <h1 class="text-5xl font-bold mb-3 text-blue-800">
                    Monitor and manage<br/>your PHP installations<br/> <span class="text-black">with ease</span>.
                </h1>
                <p class="text-2xl leading-8 mt-8"><b>PHP Monitor</b> (”phpmon”) is a lightweight, native Mac menu bar app that interacts with <a href="https://github.com/laravel/valet" class="text-blue-800 underline">Laravel Valet</a>.</p>
                <div class="flex justify-center space-x-3 mt-6">
                    <a href="https://nicoverbruggen.be/sponsor" class="mt-4 text-lg px-3 py-2 inline-block bg-blue-900 hover:bg-blue-800 text-white rounded-lg">Sponsor</a>
                    <a href="https://github.com/nicoverbruggen/phpmon" class="mt-4 text-lg px-3 py-2 inline-block bg-blue-900 hover:bg-blue-800 text-white rounded-lg">GitHub</a>
                    <a href="https://github.com/nicoverbruggen/phpmon/releases" class="mt-4 text-lg px-3 py-2 inline-block bg-green-800 hover:bg-blue-800 text-white rounded-lg">Download</a>
                </div>
            </div>
        </header>
    </div>
    <div class="px-4">
        <div class="flex flex-col m-auto max-w-3xl py-10">
            <div class="max-w-3xl m-auto">
                <img src="/images/phpmon.jpg" alt="PHP Monitor" class="m-auto max-w-3xl max-w-full bg-gray-100">
            </div>
            <div class="max-w-2xl m-auto mt-12">
                <p class="text-2xl leading-9 mb-6"><b>PHP Monitor</b> helps you set up and develop <span class="text-blue-800">Laravel</span> and <span class="text-blue-800">Symfony</span> projects. It's also great for <span class="text-blue-800">WordPress</span> or <span class="text-blue-800">Drupal</span> sites. In fact, it's a great companion for all kinds of projects.</p>
                <p class="mb-6 text-lg">This app is made with <span class="text-red-500">♥</span> by <a href="https://nicoverbruggen.be" class="text-blue-800">Nico Verbruggen</a>. It is open source and entirely free to use. Further development of this app is supported by <a class="text-blue-800" href="https://nicoverbruggen.be/sponsor">your donations</a>.</p>
            </div>
        </div>
        <x-feature title="A solid foundation." img-src="/images/valet.png">
            PHP Monitor builds upon the excellent <b>Laravel Valet</b>. That means that PHP Monitor builds upon a solid and trusted foundation. If you've already got that installed, it's easy to get started.
        </x-feature>
        <x-feature title="Information at a glance." img-src="/images/menu-bar.png" y-position="top" class="lg:flex-row-reverse">
            PHP Monitor lives in your menu bar. From here, you can use the bulk of PHP Monitor's functionality, including the <b>global version switcher</b> as well as <b>services status</b> section.
        </x-feature>
        <x-feature title="No more hunting for config files." img-src="/images/config.png" y-position="top">
            Sometimes you need to edit a <b>configuration file</b> or <b>toggle an extension</b>. But where are those pesky config files located again? From the PHP Monitor's menu you can easily find them. Extensions can even be toggled with one click of the button!
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
        <x-feature title="Privacy conscious." img-src="/images/privacy.png" y-position="top">
            No tracking. No bullshit. Nothing to worry about. The only outbound connection PHP Monitor makes is a check (that you can disable!) to see if a newer version is available. If you encounter a bug or crash, please get in touch—I'd be happy to help you out.
        </x-feature>
        <x-feature title="No nagging for donations." img-src="/images/sysres.png" y-position="top" class="lg:flex-row-reverse">
            PHP Monitor will only ask you to donate <em>once</em>, and should never ask you again... unless you install a fresh copy of the app on a new computer, of course. If you can, please do consider sending me some money!
        </x-feature>
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