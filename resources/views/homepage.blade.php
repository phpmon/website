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
                    Monitor and manage<br/>your PHP installations<br/> <span class="text-blue-400">with ease</span>.
                </h1>
                <p class="text-2xl leading-9 mt-8 text-white"><b>PHP Monitor</b> is a lightweight, native Mac menu bar app that works best when accompanied by <a href="https://github.com/laravel/valet" class="underline">Laravel Valet</a> (but it also works without it).</p>
                <div class="flex md:space-x-3 mt-6 flex-col md:flex-row">
                    <a href="{{ url()->route('releases') }}" class="mt-4 text-lg md:text-xl px-4 py-2 bg-green-400 hover:bg-green-500 text-black hover:text-gray-900 rounded-lg shadow-md flex">
                        <svg width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M13 13v5.585l1.828-1.828l1.415 1.415L12 22.414l-4.243-4.242l1.415-1.415L11 18.585V13h2zM12 2a7.001 7.001 0 0 1 6.954 6.194a5.5 5.5 0 0 1-.953 10.784v-2.014a3.5 3.5 0 1 0-1.112-6.91a5 5 0 1 0-9.777 0a3.5 3.5 0 0 0-1.292 6.88l.18.03v2.014a5.5 5.5 0 0 1-.954-10.784A7 7 0 0 1 12 2z"/></svg>
                        <span class="ml-2">Download</span>
                    </a>
                    <a href="{{ url()->route('github') }}" class="mt-4 text-lg md:text-xl px-3 py-2 bg-white hover:bg-blue-200 text-black rounded-lg shadow-md flex">
                        <svg width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M13 21v2.5l-3-2l-3 2V21h-.5A3.5 3.5 0 0 1 3 17.5V5a3 3 0 0 1 3-3h14a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1h-7zm0-2h6v-3H6.5a1.5 1.5 0 0 0 0 3H7v-2h6v2zm6-5V4H6v10.035A3.53 3.53 0 0 1 6.5 14H19zM7 5h2v2H7V5zm0 3h2v2H7V8zm0 3h2v2H7v-2z"/></svg>
                        <span class="ml-2">GitHub</span>
                    </a>
                    <a href="{{ url()->route('sponsor') }}" class="mt-4 text-lg md:text-xl px-3 py-2 bg-white hover:bg-blue-200 text-black rounded-lg shadow-md flex">
                        <svg width="28" height="28" viewBox="0 0 24 24"><path fill="rgb(191, 57, 137)" d="M17.625 1.499c-2.32 0-4.354 1.203-5.625 3.03c-1.271-1.827-3.305-3.03-5.625-3.03C3.129 1.499 0 4.253 0 8.249c0 4.275 3.068 7.847 5.828 10.227a33.14 33.14 0 0 0 5.616 3.876l.028.017l.008.003l-.001.003c.163.085.342.126.521.125c.179.001.358-.041.521-.125l-.001-.003l.008-.003l.028-.017a33.14 33.14 0 0 0 5.616-3.876C20.932 16.096 24 12.524 24 8.249c0-3.996-3.129-6.75-6.375-6.75zm-.919 15.275a30.766 30.766 0 0 1-4.703 3.316l-.004-.002l-.004.002a30.955 30.955 0 0 1-4.703-3.316c-2.677-2.307-5.047-5.298-5.047-8.523c0-2.754 2.121-4.5 4.125-4.5c2.06 0 3.914 1.479 4.544 3.684c.143.495.596.797 1.086.796c.49.001.943-.302 1.085-.796c.63-2.205 2.484-3.684 4.544-3.684c2.004 0 4.125 1.746 4.125 4.5c0 3.225-2.37 6.216-5.048 8.523z"/></svg>
                        <span class="ml-2">Sponsor</span>
                    </a>
                </div>
            </div>
        </header>
    </div>
    <div class="px-4">
        <div class="flex flex-col m-auto max-w-3xl py-4 md:py-10">
            <div class="max-w-3xl m-auto" style="position: relative;">
                <img src="{{ url('/images/marketing.jpg?v=6.0') }}" alt="PHP Monitor" class="m-auto max-w-full bg-gray-100 rounded-xl shadow-lg">
            </div>
            <div class="max-w-2xl m-auto mt-12">
                <p class="text-2xl leading-9 mb-6"><b>PHP Monitor</b> helps you set up and develop <span class="text-blue-800">Laravel</span> and <span class="text-blue-800">Symfony</span> projects. It's also great for <span class="text-blue-800">WordPress</span> or <span class="text-blue-800">Drupal</span> sites. In fact, it's a great companion for all kinds of projects, no matter the framework or CMS.</p>
            </div>
            @if (Cache::has('stargazers') && Cache::has('downloads'))
                <div class="max-w-2xl m-auto mt-6 pb-6 space-y-3 border border-b-gray-200 rounded-lg px-8 py-4 shadow-lg">
                    <p class="uppercase font-bold text-center mt-1 mb-5 flex items-center space-x-2">
                        <svg width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2A10 10 0 0 0 2 12c0 4.42 2.87 8.17 6.84 9.5c.5.08.66-.23.66-.5v-1.69c-2.77.6-3.36-1.34-3.36-1.34c-.46-1.16-1.11-1.47-1.11-1.47c-.91-.62.07-.6.07-.6c1 .07 1.53 1.03 1.53 1.03c.87 1.52 2.34 1.07 2.91.83c.09-.65.35-1.09.63-1.34c-2.22-.25-4.55-1.11-4.55-4.92c0-1.11.38-2 1.03-2.71c-.1-.25-.45-1.29.1-2.64c0 0 .84-.27 2.75 1.02c.79-.22 1.65-.33 2.5-.33c.85 0 1.71.11 2.5.33c1.91-1.29 2.75-1.02 2.75-1.02c.55 1.35.2 2.39.1 2.64c.65.71 1.03 1.6 1.03 2.71c0 3.82-2.34 4.66-4.57 4.91c.36.31.69.92.69 1.85V21c0 .27.16.59.67.5C19.14 20.16 22 16.42 22 12A10 10 0 0 0 12 2Z"/></svg>
                        <span>GitHub Stats</span>
                    </p>
                    <div class="flex md:flex-row flex-col md:space-x-6 md:space-y-0">
                        <p class="text-xl flex items-center space-x-1 mb-4 md:mb-0 text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 24 24"><path fill="#eac54f" d="m5.825 22l1.625-7.025L2 10.25l7.2-.625L12 3l2.8 6.625l7.2.625l-5.45 4.725L18.175 22L12 18.275Z"/></svg>
                            <strong>{{ round(Cache::get('stargazers'), -2) / 1000 }}k</strong>
                            <span>stargazers</span>
                        </p>
                        <p class="text-xl flex items-center space-x-1 text-gray-700">
                            <svg width="20" height="20" viewBox="0 0 24 24"><path fill="currentColor" d="M7 20.981a6.5 6.5 0 0 1-2.936-12a8.001 8.001 0 0 1 15.872 0a6.5 6.5 0 0 1-2.936 12V21H7v-.019zM13 12V8h-2v4H8l4 5l4-5h-3z"/></svg>
                            <strong>{{ round(Cache::get('downloads'), -3) / 1000 }}k</strong>
                            <span>total downloads</span>
                        </p>
                    </div>
                </div>
            @endif
            <div class="max-w-2xl m-auto mt-12">
                <p class="mb-6 text-lg">This app is made with <span class="text-red-500">♥</span> by <a href="https://nicoverbruggen.be" class="text-blue-800">Nico Verbruggen</a>. It is open source and entirely free to use. Further development of this app is supported by <a class="text-blue-800" href="https://nicoverbruggen.be/sponsor">your donations</a>. You are also encouraged to <a href="{{ url()->route('github') }}" class="text-blue-800">star the repository</a> on GitHub.</p>
                <p class="text-gray-500 leading-6">Your stars and sponsorships are very much appreciated. Thanks to your support, the app has seen a steady stream of updates with new features and bugfixes over the last two years, and will continue to be supported as long as it makes sense to do so.</p>
            </div>
        </div>
    </div>
    <div class="bg-blue-50 flex p-5 py-10 my-6">
        <div class="flex flex-col m-auto max-w-xl space-y-2 py-8">
            <h2 class="text-3xl mb-3">
                <span class="inline-block bg-blue-800 px-2 py-1 text-white text-2xl rounded">
                    PHP Monitor 6 is now available.
                </span>
            </h2>
            <div class="text-xl mt-8 leading-8">
                <p class="mb-4">With the latest major update, PHP Monitor now comes with the hotly anticipated <b>PHP Version Manager</b>, the often requested <b>Standalone Mode</b>, and additional improvements.</p>
                <p class="text-base">Learn more in the <a href="https://nicoverbruggen.be/blog/phpmon-6.0-release" class="text-blue-800">dedicated blog post</a> on my personal website, or explore all of PHP Monitor's features below.</p>
            </div>
        </div>
    </div>
    <div class="px-4">
        <x-feature feature-title="Works great with Laravel Valet." img-src="/images/valet.png">
            PHP Monitor can interact with your local <b>Laravel Valet</b> installation. That means that PHP Monitor builds upon a solid and trusted foundation. If you've already got that installed, it's very easy to get started.
        </x-feature>
        <x-feature feature-title="Also works standalone." img-src="/images/standalone.jpg" class="lg:flex-row-reverse" y-position="top" new>
            PHP Monitor <b>can also be used without</b> Laravel Valet. With the introduction of Standalone Mode some features will not be available, but I'm sure that you'll find the app a real help to your workflow if you don't use Laravel Valet.
        </x-feature>
        <x-feature feature-title="A GUI for managing PHP versions." img-src="/images/version-manager.jpg" new y-position="top">
            With the new PHP Version Manager, you can easily <b>install, upgrade and remove</b> individual PHP versions without needing to manually type or copy Homebrew commands. The app will also attempt to <b>automatically fix</b> broken PHP versions.
        </x-feature>
        <x-feature feature-title="Information at a glance." img-src="/images/menu-bar.jpg" y-position="top" class="lg:flex-row-reverse">
            PHP Monitor lives in your menu bar. From here, you can use the bulk of PHP Monitor's functionality, including the <b>global version switcher</b> as well as <b>services status</b> section.
        </x-feature>
        <x-feature feature-title="No more hunting for config files." img-src="/images/config.jpg" y-position="top">
            Sometimes you need to edit a <b>configuration file</b> or <b>toggle an extension</b>. But where are those pesky config files located again? From PHP Monitor's menu you can easily find them. Extensions can even be toggled with one click of the button!
        </x-feature>
        <x-feature feature-title="All of your domains in a single list." img-src="/images/domains.jpg" y-position="top" class="lg:flex-row-reverse">
            Do you have many projects or legacy sites? No worries, the app includes a <b>domain list</b> that you can use to get a quick overview of all domains and proxies you have set up, as well as their PHP version, what type of project they are, and more.
        </x-feature>
        <x-feature feature-title="Quickly link a new domain or proxy." img-src="/images/link-folder.jpg" y-position="top">
            You can easily <b>link or proxy</b> a folder: you can even easily customize the name of the domain and secure this new domain by simply checking a box. This will make these projects accessible as *.test domains on your system.
        </x-feature>
        <x-feature feature-title="A different PHP version per domain." img-src="/images/isolation.jpg" y-position="bottom" class="lg:flex-row-reverse">
            In addition to offering a global version switcher (which switches the PHP version for all of your projects), this app also includes support for Valet's <b>site isolation</b> feature. This allows you to use a specific version of PHP with a specific domain, all while retaining the globally linked PHP version.
        </x-feature>
        <x-feature feature-title="Determine compatibility." img-src="/images/phpinfo.jpg" y-position="top">
            PHP Monitor will help you figure out if your sites are <b>compatible</b> with the <b>currently linked version of PHP</b>. You will receive suggestions when <b>site isolation</b> may be of use for a given domain.
        </x-feature>
        <x-feature feature-title="Small, fast and easy updates." img-src="/images/updater.jpg" y-position="bottom" class="lg:flex-row-reverse" new>
            The app also comes with an optional (but very fast) <b>built-in updater</b>, which allows you to stay up-to-date with the latest developments and bug fixes, so you can have a seamless PHP switching experience.
        </x-feature>
        <div class="flex lg:flex-row flex-col m-auto max-w-5xl py-4 md:py-8 gap-x-10">
            <x-single-feature feature-title="A tiny footprint.">
                Laravel Valet is a lightweight solution that is much leaner than Docker, and PHP Monitor as a companion tool uses equally few system resources. It is light on RAM and its CPU usage is negligible.
            </x-single-feature>
            <x-single-feature feature-title="Privacy conscious.">
                No tracking. No bullshit. Nothing to worry about. The only outbound connection PHP Monitor makes is a check to see if a newer version is available, and you can disable it.
            </x-single-feature>
            <x-single-feature feature-title="No nagging for donations.">
                PHP Monitor will only ask you to donate <em>once</em>, and should never ask you again... unless you install a fresh copy of the app on a new computer, of course. If you can, please do consider sending me some money!
            </x-single-feature>
        </div>
    </div>
    <footer class="bg-blue-50 flex p-5 mt-6">
        <div class="flex flex-col m-auto max-w-xl space-y-2">
            <p class="text-sm">I hope you enjoy using the app. I hope you find it makes your day-to-day life a little more productive, enjoyable and most importantly... less stressful. Have a great day!</p>
            <p class="text-xs pt-2">
                &copy; {{ date("Y") }}, Nico Verbruggen. All rights reserved.
                <div class="hidden">
                | <a rel="me" href="https://nicoverbruggen.be">Website</a>
                | <a rel="me" href="https://phpc.social/@nicoverbruggen">Mastodon</a>
                </div>
            </p>
        </div>
    </footer>
</div>
</body>
</html>
