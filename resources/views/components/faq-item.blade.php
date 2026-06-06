@props([
    'question',
    'last' => false,
])

<details {{ $attributes->class([
    'group',
    'border-b border-blue-100' => ! $last,
]) }}>
    <summary class="flex cursor-pointer list-none items-center justify-between gap-4 bg-white px-5 py-4 text-lg font-bold text-black transition hover:bg-blue-50/70 hover:text-primary group-open:bg-blue-50/60 group-open:text-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-[-2px] focus-visible:outline-primary">
        <span>{{ $question }}</span>
        <span class="shrink-0 text-2xl leading-none text-primary transition group-open:rotate-45">+</span>
    </summary>

    {{ $slot }}
</details>
