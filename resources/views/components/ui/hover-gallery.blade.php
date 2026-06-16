@props([
    'images' => [],
    'as' => 'figure',
])

<{{ $as }} {{ $attributes->class('hover-gallery') }}>
    @foreach ($images as $image)
        <img src="{{ $image['src'] ?? $image }}" alt="{{ $image['alt'] ?? 'Gallery image' }}">
    @endforeach

    {{ $slot }}
</{{ $as }}>
