@props([
    'value' => 0,
    'label' => null,
])

<span {{ $attributes->class('countdown') }}>
    <span style="--value:{{ (int) $value }};" aria-live="polite" aria-label="{{ $label ?? $value }}">
        {{ $value }}
    </span>
</span>
