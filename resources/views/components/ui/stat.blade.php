@props(['label', 'value', 'tone' => 'primary'])

<div {{ $attributes->class('rounded-lg border border-base-300 bg-base-100 p-4 shadow-sm') }}>
    <p class="text-sm text-base-content/70">{{ $label }}</p>
    <p @class([
        'mt-2 text-2xl font-semibold',
        'text-primary' => $tone === 'primary',
        'text-secondary' => $tone === 'secondary',
        'text-accent' => $tone === 'accent',
        'text-success' => $tone === 'success',
    ])>{{ $value }}</p>
</div>
