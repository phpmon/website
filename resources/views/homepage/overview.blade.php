<div class="px-4">
    <div class="flex flex-col m-auto max-w-3xl py-4 md:py-10">
        <div class="max-w-3xl m-auto" style="position: relative;">
            <img src="{{ url('/images/marketing.jpg?v=2025.11') }}" alt="PHP Monitor" class="m-auto max-w-full bg-gray-100 rounded-xl shadow-lg">
        </div>
        <div class="max-w-2xl m-auto mt-12">
            <p class="text-2xl leading-9 mb-6"><b>PHP Monitor</b> helps you set up and develop <span class="text-primary">Laravel</span> and <span class="text-primary">Symfony</span> projects. It's also great for <span class="text-primary">WordPress</span> or <span class="text-primary">Drupal</span> sites. In fact, it's a great companion for all kinds of projects, no matter the framework or CMS.</p>
        </div>
        @if (Cache::has('stargazers') && Cache::has('downloads'))
            <div class="max-w-2xl m-auto mt-6 pb-6 space-y-3 border border-gray-100 rounded-lg px-8 py-4 shadow-lg">
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
                        <strong>
                            {{ round(Cache::get('downloads'), -3) / 1000 }}k
                        </strong>
                        <span>total downloads</span>
                    </p>
                </div>
            </div>
        @endif
        <div class="max-w-2xl m-auto mt-12">
            <p class="mb-6 text-lg">This app is made with <span class="text-red-500">♥</span> by <a href="https://nicoverbruggen.be" class="text-primary">Nico Verbruggen</a>. It is open source and entirely free to use. Further development of this app is supported by <a class="text-primary" href="https://nicoverbruggen.be/sponsor">your donations</a>. You are also encouraged to <a href="{{ url()->route('github') }}" class="text-primary">star the repository</a> on GitHub.</p>
            <p class="text-gray-500 leading-6">Your stars and sponsorships are very much appreciated. Thanks to your support, the app has seen a steady stream of updates with new features and bugfixes over the last three years, and will continue to be supported as long as it makes sense to do so.</p>
        </div>
    </div>
</div>
