@props([
    'end' => false,
    'center' => false,
])

<div
    @class([
        'card-actions',
        'justify-end' => $end,
        'justify-center' => $center,
    ])
    {{ $attributes }}
>
    {{ $slot }}
</div>
