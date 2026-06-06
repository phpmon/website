@if ($latestReleaseVersion)
    <div class="bg-dim flex p-5 py-10 my-6">
        <div class="flex flex-col m-auto max-w-xl py-8">
            <h2 class="text-3xl mb-4">
                <span class="inline-block bg-primary px-2 py-1 text-white text-2xl rounded font-bold">
                    PHP Monitor {{ $latestReleaseVersion }} is now available!
                </span>
            </h2>
            <div class="text-xl leading-8">
                <p class="mb-6">I am releasing monthly updates with minor improvements and quality of life changes for the foreseeable future to better support the app.</p>
                <p class="mb-4">
                    <a href="https://github.com/nicoverbruggen/phpmon/releases" class="inline-flex items-center rounded-lg bg-white px-4 py-2 text-base font-semibold text-black shadow-md transition hover:bg-blue-200">
                        Read the release notes
                        <span class="ml-2 text-lg leading-none">›</span>
                    </a>
                </p>
                @if ($latestReleasePublishedAt)
                    <p class="text-sm text-gray-500">PHP Monitor was last updated on {{ \Illuminate\Support\Carbon::parse($latestReleasePublishedAt)->format('d/m/Y') }}.</p>
                @endif
            </div>
        </div>
    </div>
@endif
