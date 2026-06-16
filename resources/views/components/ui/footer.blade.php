@props([
    'center' => false,
    'direction' => null,
])

@php
    $directions = [
        'horizontal' => 'footer-horizontal',
        'vertical' => 'footer-vertical',
    ];
@endphp

<footer {{ $attributes->class(['footer', $center ? 'footer-center' : null, $directions[$direction] ?? null]) }}>
    {{ $slot }}
</footer>
