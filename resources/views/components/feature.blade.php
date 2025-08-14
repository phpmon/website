<div {{ $attributes->merge(['class' => "flex md:flex-row flex-col m-auto max-w-5xl py-4 md:py-8 gap-x-10"]) }}>
    <div class="lg:w-1/2 w-full flex py-4 md:px-4 align-middle items-center">
        <div class="flex flex-col">
            @isset ($featureTitle)
                <h3 class="text-primary font-bold text-xl mb-5
                border-b-dim border-b-2 pb-1 inline-block">
                    @isset($badge)
                        <span class="bg-blue-800 text-white px-2 py-1 rounded-xl mr-1 text-sm relative bottom-0.5">{{ \Illuminate\Support\Str::upper($badge) }}</span>
                    @endisset
                    {{ $featureTitle }}
                </h3>
            @endisset
            <p class="text-lg text-gray-800">{{ $slot }}</p>
        </div>
    </div>
    <div class="lg:w-1/2 w-full items-center align-middle rounded-lg shadow-lg" style='
        background-color: #EEE;
        background-position: {{ $yPosition ?? 'center' }} {{ $xPosition ?? 'center' }};
        background-image: url("{{ $imgSrc ?? '' }}");
        background-repeat: no-repeat;
        background-size: cover;
        aspect-ratio: 2 / 1;'
    >
    </div>
</div>
