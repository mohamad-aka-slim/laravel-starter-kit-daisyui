@props(['title' => null, 'description' => null])

<section {{ $attributes->class('rounded-lg border border-base-300 bg-base-100 shadow-sm') }}>
    @if ($title || $description)
        <div class="border-b border-base-300 px-5 py-4">
            @if ($title)
                <h2 class="text-base font-semibold">{{ $title }}</h2>
            @endif

            @if ($description)
                <p class="mt-1 text-sm text-base-content/70">{{ $description }}</p>
            @endif
        </div>
    @endif

    <div class="p-5">
        {{ $slot }}
    </div>
</section>
