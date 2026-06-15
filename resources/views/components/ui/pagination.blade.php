@props([
    'vertical' => false,
])

<div {{ $attributes->class([
    'join',
    'join-vertical' => $vertical,
    'join-horizontal' => ! $vertical,
]) }}>
    {{ $slot }}
</div>
