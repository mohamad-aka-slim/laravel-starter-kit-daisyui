@props([
    'vertical' => false,
])

<ul {{ $attributes->class(['steps', $vertical ? 'steps-vertical' : null]) }}>
    {{ $slot }}
</ul>
