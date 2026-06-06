<section class="bg-blue-50 px-4 py-10 md:py-14">
    <div class="m-auto max-w-3xl">
        <h2 class="text-center text-3xl font-bold text-black">Q&A</h2>
        <div class="mt-8 overflow-hidden rounded-md border border-blue-100 bg-white shadow-sm">
            <x-faq-item question="Can PHP Monitor set up PHP on a fresh Mac?">
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    Yes. Setup Assistant can guide you through preparing a local PHP development environment on macOS, including the various packages and dependencies that PHP Monitor expects to find and uses to give you a great development environment.
                </p>
            </x-faq-item>
            <x-faq-item question="Does PHP Monitor require Laravel Valet?">
                <p class="px-5 pb-3 leading-7 text-gray-700">
                    Not required, but recommended.
                </p>
                <p class="px-5 pb-3 leading-7 text-gray-700">
                    I should note that PHP Monitor works best with <a href="https://github.com/laravel/valet" class="text-primary underline">Laravel Valet</a> because many of its project and domain management features integrate with Valet.
                </p>
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    Some PHP version and configuration features can still be useful without it! If you don't have Valet installed, PHP Monitor runs in Standalone Mode.
                </p>
            </x-faq-item>
            <x-faq-item question="Can I use multiple PHP versions?">
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    Yes. PHP Monitor includes a PHP Version Manager for installing, upgrading, removing, repairing, and switching between PHP versions.
                </p>
            </x-faq-item>
            <x-faq-item question="Can each site use a different PHP version?">
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    Yes. PHP Monitor supports site isolation, so individual domains can use their own PHP version while the rest of your system keeps using the global version.
                </p>
            </x-faq-item>
            <x-faq-item question="Can PHP Monitor install PHP extensions?">
                <p class="px-5 pb-3 leading-7 text-gray-700">
                    Yes, some extensions can be installed and removed via the PHP Extension Manager.
                </p>
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    If an uncommon extension is not listed, you can use <a href="https://github.com/php/pie" class="text-primary underline">pie</a> to install and manage that extension, and it will show up in PHP Monitor, too.
                </p>
            </x-faq-item>
            <x-faq-item question="Is PHP Monitor totally free?">
                <p class="px-5 pb-3 leading-7 text-gray-700">
                    Yes. There are no walled off features.
                </p>
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    PHP Monitor is 100% free and open source. Development is supported by voluntary sponsorships and donations.
                </p>
            </x-faq-item>
            <x-faq-item question="Why should I use this instead of Laravel Herd?" :last="true">
                <p class="px-5 pb-3 leading-7 text-gray-700">
                    Well, you should use the developer tooling you find most useful and works best for your workflow!
                </p>
                <p class="px-5 pb-3 leading-7 text-gray-700">
                    I built PHP Monitor because it neatly integrates with <a href="https://brew.sh" class="text-primary underline">Homebrew</a>, which you may already be using for other dependencies, too. It's a great package manager.
                </p>
                <p class="px-5 pb-5 leading-7 text-gray-700">
                    <a href="https://herd.laravel.com" class="text-primary underline">Laravel Herd</a> and other solutions don't integrate with Homebrew, which can be an advantage or disadvantage depending on your use case. You can decide what works best for you. I'm just offering you a free, open-source option here.
                </p>
            </x-faq-item>
        </div>
        <div class="mt-8 text-center">
            <p class="text-lg font-bold text-black">Something unclear?</p>
            <p class="mt-1 leading-7 text-gray-600">The full FAQ is part of the README on GitHub.</p>
            <a href="{{ route('faq') }}" class="mt-4 inline-flex items-center justify-center rounded-md border border-blue-100 bg-blue-50 px-5 py-3 text-lg font-semibold text-black shadow-sm transition hover:border-primary hover:bg-white hover:text-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
                FAQ on GitHub
            </a>
        </div>
    </div>
</section>
