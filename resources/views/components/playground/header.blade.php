@props([
    'title',
    'description',
    'name' => null,
    'docs' => null,
])

<div class="space-y-4">
    <div class="flex flex-wrap items-start justify-between gap-4">
        <div class="max-w-3xl">
            @if ($name)
                <x-ui.badge variant="primary" soft>{{ $name }}</x-ui.badge>
            @endif

            <h1 class="mt-3 text-3xl font-bold tracking-normal">{{ $title }}</h1>
            <p class="mt-3 text-base text-base-content/70">{{ $description }}</p>
        </div>

        @if ($docs)
            <x-ui.button href="{{ $docs }}" variant="ghost" size="sm">DaisyUI docs</x-ui.button>
        @endif
    </div>
</div>
