@props([
    'image' => null,
    'overlay' => false,
])

<section
    @if ($image) style="background-image: url({{ $image }});" @endif
    {{ $attributes->class(['hero', $image ? 'bg-cover bg-center' : null]) }}
>
    @if ($overlay)
        <div class="hero-overlay bg-opacity-60"></div>
    @endif

    <div class="hero-content text-center">
        {{ $slot }}
    </div>
</section>
