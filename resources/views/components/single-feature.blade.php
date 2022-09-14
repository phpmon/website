<div class="lg:w-1/2 w-full flex py-4 md:px-4 align-middle items-center">
    <div class="flex flex-col">
        @isset ($title)
            <h3 class="text-blue-800 font-bold mb-2 uppercase">{{ $title }}</h3>
        @endisset
        <p class="text-lg">{{ $slot }}</p>
    </div>
</div>