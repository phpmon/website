<section class="bg-blue-50 px-4 py-10 md:py-14">
    <div class="m-auto max-w-3xl">
        <h2 class="text-center text-3xl font-bold text-black">Q&A</h2>
        <div class="mt-8 space-y-3">
            @foreach (\App\Content\Faq::questions() as $faq)
                <x-faq-item :question="$faq->question">
                    {{ $faq->answer }}
                </x-faq-item>
            @endforeach
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
