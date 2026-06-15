@props([
    'title',
    'description' => null,
])

<section {{ $attributes->class('space-y-3') }}>
    <div>
        <h2 class="text-base font-semibold">{{ $title }}</h2>
        @if ($description)
            <p class="mt-1 text-sm text-base-content/70">{{ $description }}</p>
        @endif
    </div>

    <div>
        {{ $slot }}
    </div>
</section>
