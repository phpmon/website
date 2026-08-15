@props([
    'featureTitle' => null,
    'featureNumber' => null,
    'badge' => null,
    'imgSrc' => null,
    'imgAlt' => null,
    'xPosition' => 'center',
    'yPosition' => 'center',
])

<div {{ $attributes->merge(['class' => "flex md:flex-row flex-col m-auto max-w-5xl py-4 md:py-8 gap-x-10"]) }}>
    <div class="lg:w-1/2 w-full flex py-4 md:px-4 align-middle items-center">
        <div class="flex flex-col">
            @isset ($featureTitle)
                <h3 class="text-primary font-bold text-xl mb-5
                border-b-dim border-b-2 pb-1 inline-flex max-w-full items-center gap-1.5 leading-snug">
                    @isset($featureNumber)
                        <span class="flex h-[18px] w-[18px] shrink-0 items-center justify-center rounded-full bg-primary text-[0.65rem] font-bold leading-none text-white">{{ $featureNumber }}</span>
                    @endisset
                    @isset($badge)
                        <span class="bg-blue-800 text-white px-2 py-1 rounded-xl mr-1 text-sm relative bottom-0.5">{{ \Illuminate\Support\Str::upper($badge) }}</span>
                    @endisset
                    <span>{{ $featureTitle }}</span>
                </h3>
            @endisset
            <p class="text-lg text-gray-800">{{ $slot }}</p>
        </div>
    </div>
    <div class="lg:w-1/2 w-full items-center align-middle rounded-lg shadow-lg overflow-hidden bg-gray-200">
        @isset($imgSrc)
            <img src="{{ $imgSrc }}"
                 alt="{{ $imgAlt }}"
                 width="1200" height="600"
                 loading="lazy" decoding="async"
                 class="w-full h-full object-cover aspect-[2/1]"
                 style="object-position: {{ $yPosition }} {{ $xPosition }};">
        @endisset
    </div>
</div>
