@props([
    'question',
    'last' => false,
])

<details {{ $attributes->class([
    'group rounded-md border border-blue-100 bg-white shadow-sm transition hover:border-blue-200 hover:shadow-md open:border-primary/40 open:shadow-md',
]) }}>
    <summary class="flex cursor-pointer list-none items-start justify-between gap-4 rounded-md px-5 py-4 text-left text-lg font-bold leading-7 text-black transition hover:text-primary group-open:rounded-b-none focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-[-2px] focus-visible:outline-primary">
        <span>{{ $question }}</span>
        <span class="mt-1.5 shrink-0 text-primary transition group-open:rotate-90" aria-hidden="true">
            <svg class="h-4 w-4" viewBox="0 0 16 16">
                <path d="M6 3.5v9l5-4.5z" fill="currentColor"/>
            </svg>
        </span>
    </summary>

    <div class="border-t border-blue-100 bg-white pt-4">
        {{ $slot }}
    </div>
</details>
