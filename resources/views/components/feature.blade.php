<div {{ $attributes->merge(['class' => "flex md:flex-row flex-col m-auto max-w-5xl py-4 md:py-8 gap-x-10"]) }}>
    <div class="lg:w-1/2 w-full flex py-4 md:px-4 align-middle items-center">
        <div class="flex flex-col">
            @isset ($title)
                <h3 class="text-blue-800 font-bold mb-2 uppercase">{{ $title }}</h3>
            @endisset
            <p class="text-lg">{{ $slot }}</p>
        </div>
    </div>
    <div class="lg:w-1/2 w-full items-center align-middle rounded-lg shadow-lg" style='background-color: #EEE; background-position: {{ $yPosition ?? 'center' }} center; background-image: url("{{ $imgSrc ?? '' }}"); background-repeat: no-repeat; background-size: cover; min-height: 250px;'>
    </div>
</div>