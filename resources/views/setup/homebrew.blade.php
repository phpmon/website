@extends('layouts.shared')

@section('title', 'Why PHP Monitor needs Homebrew')
@section('description', 'Learn why PHP Monitor requires Homebrew on macOS and how to install Homebrew before continuing setup.')

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
                <h1 class="mt--2 text-4xl font-bold leading-tight text-black">
                    Homebrew
                </h1>
                <p class="mt-5 text-xl leading-8 text-gray-800">
                    PHP Monitor uses <a href="https://brew.sh" class="underline">Homebrew</a> to install PHP and various dependencies, including PHP extensions. If Homebrew is not installed yet, Setup Assistant will ask you to install it.
                </p>
            </div>
        </div>
    </header>
</div>

<main class="px-4 py-10 md:py-14">
    <div class="m-auto max-w-3xl">
        <section>
            <h2 class="text-2xl font-bold text-black">How to install Homebrew</h2>
            <p class="mt-4 leading-7 text-gray-700">
                Open Terminal, paste this command, and follow the instructions printed by the Homebrew installer:
            </p>
            <pre class="mt-5 overflow-x-auto rounded-md border border-blue-100 bg-gray-950 p-5 text-sm leading-6 text-white shadow-sm"><code>/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"</code></pre>
            <p class="mt-4 leading-7 text-gray-700">
                The installer may ask for your macOS password and may install <a href="{{ route('setup.apple-devtools') }}" class="text-primary underline">Apple Command Line Tools</a> if they are missing. When it finishes, follow any "Next steps" it prints, especially if it asks you to add Homebrew to your shell environment.
            </p>
        </section>

        <section class="mt-10">
            <h2 class="text-2xl font-bold text-black">Why this is required</h2>
            <p class="mt-4 leading-7 text-gray-700">
                Homebrew is the package manager PHP Monitor integrates with. PHP Monitor expects Homebrew to be available because it uses Homebrew's PHP packages and services instead of bundling a separate PHP environment inside the app.
            </p>
            <ul class="mt-5 space-y-3 leading-7 text-gray-700">
                <li class="flex gap-3">
                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-primary"></span>
                    <span>PHP versions are installed and updated through Homebrew.</span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-primary"></span>
                    <span>Services and dependencies used by a local PHP environment can be managed through the same package manager.</span>
                </li>
                <li class="flex gap-3">
                    <span class="mt-2 h-2 w-2 shrink-0 rounded-full bg-primary"></span>
                    <span>PHP Monitor can detect installed PHP versions, help repair common issues, and guide setup while leaving the packages managed by Homebrew.</span>
                </li>
            </ul>
        </section>

        <section class="mt-10 rounded-md border border-blue-100 bg-blue-50 p-5">
            <h2 class="text-2xl font-bold text-black">What's next?</h2>
            <p class="mt-4 leading-7 text-gray-700">
                Return to PHP Monitor and continue through Setup Assistant. PHP Monitor will check your Homebrew installation and continue with the setup process.
            </p>
        </section>
    </div>
</main>

@include('homepage.footer')
@endsection
