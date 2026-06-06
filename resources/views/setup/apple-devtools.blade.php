@extends('layouts.shared')

@section('title', 'Why PHP Monitor needs Apple Command Line Tools')
@section('description', 'Learn why PHP Monitor requires Apple Command Line Tools on macOS and how to install them before continuing setup.')

@section('content')
<div class="bg-dim px-4 py-8 md:py-12">
    <header class="m-auto max-w-3xl">
        <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-bold text-primary underline decoration-primary/40 underline-offset-4 transition hover:decoration-primary">
            Back to PHP Monitor
        </a>
        <div class="mt-8 flex items-start gap-4">
            <x-logo size="90"></x-logo>
            <div>
                <p class="text-lg font-bold uppercase tracking-wide text-black">PHP Monitor Setup</p>
                <h1 class="text-4xl font-bold leading-tight text-black">
                    Apple Command Line Tools
                </h1>
                <p class="mt-5 text-xl leading-8 text-gray-800">
                    PHP Monitor relies on developer tools that macOS provides separately. If Apple Command Line Tools are missing, Setup Assistant will ask you to install them before continuing.
                </p>
            </div>
        </div>
    </header>
</div>

<main class="px-4 py-10 md:py-14">
    <div class="m-auto max-w-3xl">
        <section>
            <h2 class="text-2xl font-bold text-black">How to install Apple Command Line Tools</h2>
            <p class="mt-4 leading-7 text-gray-700">
                Open Terminal, paste this command, and follow the macOS installer prompt:
            </p>
            <pre class="mt-5 overflow-x-auto rounded-md border border-blue-100 bg-gray-950 p-5 text-sm leading-6 text-white shadow-sm"><code>xcode-select --install</code></pre>
            <p class="mt-4 leading-7 text-gray-700">
                A window will pop up, as macOS asks you to install these tools. The installer may take a few minutes. If macOS says the tools are already installed, you can return to PHP Monitor and continue setup.
            </p>
        </section>

        <section class="mt-10">
            <h2 class="text-2xl font-bold text-black">Why this is required</h2>
            <p class="mt-4 leading-7 text-gray-700">
                Apple Command Line Tools provide the system developer utilities used by Homebrew and many PHP-related packages. PHP Monitor does not require the full Xcode app, but it does expect these command line tools to be available.
            </p>
            <ul class="mt-5 space-y-3 leading-7 text-gray-700">
                <li class="flex gap-3">
                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-primary"></span>
                    <span>Homebrew may need these tools to install, build, or repair packages.</span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-primary"></span>
                    <span>Common developer utilities such as Git and compiler tools are provided through this package.</span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-primary"></span>
                    <span>PHP Monitor can guide setup more reliably when macOS has the expected developer toolchain installed.</span>
                </li>
            </ul>
        </section>

        <section class="mt-10 rounded-md border border-blue-100 bg-blue-50 p-5">
            <h2 class="text-2xl font-bold text-black">What's next?</h2>
            <p class="mt-4 leading-7 text-gray-700">
                Once Apple's Command Line Tools have been installed, return to PHP Monitor and continue through Setup Assistant. <a href="{{ route('setup.homebrew') }}" class="underline">Homebrew</a> will be installed next.
            </p>
        </section>
    </div>
</main>

@include('homepage.footer')
@endsection
