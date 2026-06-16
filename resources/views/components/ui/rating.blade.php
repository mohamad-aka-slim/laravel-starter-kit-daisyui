@props([
    'name' => 'rating',
    'value' => 0,
    'max' => 5,
    'size' => null,
    'half' => false,
    'hiddenReset' => false,
])

@php
    $sizes = [
        'xs' => 'rating-xs',
        'sm' => 'rating-sm',
        'md' => 'rating-md',
        'lg' => 'rating-lg',
        'xl' => 'rating-xl',
    ];
@endphp

<div {{ $attributes->class(['rating', $sizes[$size] ?? null, $half ? 'rating-half' : null]) }}>
    @if ($hiddenReset)
        <input type="radio" name="{{ $name }}" class="rating-hidden" value="0" @checked((int) $value === 0)>
    @endif

    @for ($i = 1; $i <= $max; $i++)
        <input type="radio" name="{{ $name }}" class="mask mask-star-2 bg-orange-400" value="{{ $i }}" @checked((int) $value === $i)>
    @endfor
</div>
