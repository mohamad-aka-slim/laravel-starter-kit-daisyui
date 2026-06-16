@props([
    'as' => 'input',
    'type' => 'text',
    'hint' => null,
])

@if ($as === 'input')
    <input type="{{ $type }}" {{ $attributes->class('validator') }}>
@else
    <{{ $as }} {{ $attributes->class('validator') }}>
        {{ $slot }}
    </{{ $as }}>
@endif

@if ($hint)
    <p class="validator-hint">{{ $hint }}</p>
@endif
