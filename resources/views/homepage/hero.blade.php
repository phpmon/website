<div class="bg-dim flex">
    <header class="flex flex-col m-auto max-w-2xl py-5 md:py-8 lg:py-10 p-4">
        <div>
            <x-logo size="100"></x-logo>
            <p class="text-2xl font-bold mb-5 uppercase tracking-wide">
                PHP Monitor
            </p>
            <h1 class="text-5xl font-bold leading-13 mb-3 text-black">
                Set up PHP on your Mac and keep it <span class="text-primary">trucking along</span>.
            </h1>
            <p class="text-xl md:text-2xl leading-8 md:leading-9 mt-8 text-black">Easily install and configure your development environment with PHP. Serve sites with <a href="https://github.com/laravel/valet" class="underline">Laravel Valet</a>, switch PHP versions, manage extensions, and spot issues before they slow you down.</p>
            <div class="flex flex-col gap-3 mt-8 sm:flex-row sm:items-center">
                <a href="{{ url()->route('releases') }}" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 rounded-md bg-green-400 px-5 py-3 text-lg md:text-xl font-semibold text-black shadow-md transition hover:bg-green-500 hover:text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
                    <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13 13v5.585l1.828-1.828l1.415 1.415L12 22.414l-4.243-4.242l1.415-1.415L11 18.585V13h2zM12 2a7.001 7.001 0 0 1 6.954 6.194a5.5 5.5 0 0 1-.953 10.784v-2.014a3.5 3.5 0 1 0-1.112-6.91a5 5 0 1 0-9.777 0a3.5 3.5 0 0 0-1.292 6.88l.18.03v2.014a5.5 5.5 0 0 1-.954-10.784A7 7 0 0 1 12 2z"/></svg>
                    <span>Download</span>
                </a>
                <div class="flex flex-col gap-3 sm:ml-auto sm:flex-row">
                    <a href="{{ url()->route('github') }}" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-5 py-3 text-lg md:text-xl font-semibold text-black shadow-sm transition hover:border-blue-200 hover:bg-blue-50 hover:text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                        <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13 21v2.5l-3-2l-3 2V21h-.5A3.5 3.5 0 0 1 3 17.5V5a3 3 0 0 1 3-3h14a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1h-7zm0-2h6v-3H6.5a1.5 1.5 0 0 0 0 3H7v-2h6v2zm6-5V4H6v10.035A3.53 3.53 0 0 1 6.5 14H19zM7 5h2v2H7V5zm0 3h2v2H7V8zm0 3h2v2H7v-2z"/></svg>
                        <span>GitHub</span>
                    </a>
                    <a href="{{ url()->route('sponsor') }}" class="inline-flex w-full sm:w-auto items-center justify-center gap-2 rounded-md border border-gray-200 bg-white px-5 py-3 text-lg md:text-xl font-semibold text-black shadow-sm transition hover:border-pink-200 hover:bg-pink-50 hover:text-gray-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-500">
                        <svg width="28" height="28" viewBox="0 0 24 24" aria-hidden="true"><path fill="rgb(191, 57, 137)" d="M17.625 1.499c-2.32 0-4.354 1.203-5.625 3.03c-1.271-1.827-3.305-3.03-5.625-3.03C3.129 1.499 0 4.253 0 8.249c0 4.275 3.068 7.847 5.828 10.227a33.14 33.14 0 0 0 5.616 3.876l.028.017l.008.003l-.001.003c.163.085.342.126.521.125c.179.001.358-.041.521-.125l-.001-.003l.008-.003l.028-.017a33.14 33.14 0 0 0 5.616-3.876C20.932 16.096 24 12.524 24 8.249c0-3.996-3.129-6.75-6.375-6.75zm-.919 15.275a30.766 30.766 0 0 1-4.703 3.316l-.004-.002l-.004.002a30.955 30.955 0 0 1-4.703-3.316c-2.677-2.307-5.047-5.298-5.047-8.523c0-2.754 2.121-4.5 4.125-4.5c2.06 0 3.914 1.479 4.544 3.684c.143.495.596.797 1.086.796c.49.001.943-.302 1.085-.796c.63-2.205 2.484-3.684 4.544-3.684c2.004 0 4.125 1.746 4.125 4.5c0 3.225-2.37 6.216-5.048 8.523z"/></svg>
                        <span>Sponsor</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
</div>
