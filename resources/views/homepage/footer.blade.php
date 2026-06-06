<footer class="bg-blue-50 flex p-5 mt-6">
    <div class="flex flex-col m-auto max-w-xl space-y-2">
        <p class="text-sm font-bold">I hope you enjoy using the app. I hope you find it makes your day-to-day life a little more productive, enjoyable and most importantly... less stressful. Have a great day!</p>

        <p class="text-xs pt-2">
            <a class="underline" href="{{ route('privacy-policy') }}">Privacy Policy</a>
            | <a class="underline" href="{{ route('release-notes') }}">Release Notes</a>
            | <a class="underline" rel="me" href="https://nicoverbruggen.be">Website</a>
            | <a class="underline" rel="me" href="https://phpc.social/@nicoverbruggen">Mastodon</a>
        </p>
        <p class="text-xs pt-2">
            &copy; {{ date("Y") }}, Nico Verbruggen. All rights reserved.
        </p>
    </div>
</footer>
