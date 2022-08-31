<div {{ $attributes->merge(['class' => "flex flex-row m-auto max-w-4xl py-8 space-x-6"]) }}>
    <div class="lg:w-1/2 flex items-center">
        <p class="text-lg">{{ $slot }}</p>
    </div>
    <div class="lg:w-1/2 items-center align-middle">
        <img src="" width="400px" height="150px" class="bg-gray-100 border-none">
    </div>
</div>