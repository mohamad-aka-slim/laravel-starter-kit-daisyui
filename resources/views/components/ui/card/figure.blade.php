@props([
    'src' => null,
    'alt' => '',
])

<figure {{ $attributes }}>
    @if ($src)
        <img src="{{ $src }}" alt="{{ $alt }}">
    @else
        {{ $slot }}
    @endif
</figure>
