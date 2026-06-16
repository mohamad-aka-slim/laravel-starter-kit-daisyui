@props([
    'vertical' => false,
])

<div {{ $attributes->class(['join', $vertical ? 'join-vertical' : null]) }}>
    {{ $slot }}
</div>
