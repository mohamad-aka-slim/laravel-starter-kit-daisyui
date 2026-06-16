@props([
    'flower' => false,
])

<div {{ $attributes->class(['fab', $flower ? 'fab-flower' : null]) }}>
    {{ $slot }}
</div>
