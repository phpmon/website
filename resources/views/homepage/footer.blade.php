<footer class="bg-primary px-4 py-8 text-white">
    <div class="m-auto flex max-w-3xl flex-col gap-4">
        <p class="text-sm leading-6 md:text-base">I hope you enjoy using the app. I hope you find it makes your day-to-day life a little more productive, enjoyable and most importantly... less stressful. Have a great day!</p>

        <nav class="flex flex-wrap gap-x-4 gap-y-2 text-sm font-bold">
            <a class="underline decoration-white/60 underline-offset-4 transition hover:decoration-white" href="{{ route('privacy-policy') }}">Privacy Policy</a>
            <a class="underline decoration-white/60 underline-offset-4 transition hover:decoration-white" href="{{ route('release-notes') }}">Release Notes</a>
            <a class="underline decoration-white/60 underline-offset-4 transition hover:decoration-white" rel="me" href="https://nicoverbruggen.be">Website</a>
            <a class="underline decoration-white/60 underline-offset-4 transition hover:decoration-white" rel="me" href="https://phpc.social/@nicoverbruggen">Mastodon</a>
        </nav>
        <p class="text-xs text-white/80">
            &copy; {{ date("Y") }}, Nico Verbruggen. All rights reserved.
        </p>
    </div>
</footer>
