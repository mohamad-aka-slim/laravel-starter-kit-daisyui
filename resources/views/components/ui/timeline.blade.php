@props([
    'vertical' => true,
    'compact' => false,
    'snap' => false,
])

<ul {{ $attributes->class(['timeline', $vertical ? 'timeline-vertical' : 'timeline-horizontal', $compact ? 'timeline-compact' : null, $snap ? 'timeline-snap-icon' : null]) }}>
    {{ $slot }}
</ul>
