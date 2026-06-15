@props([
    'as' => 'a',
    'active' => false,
    'disabled' => false,
])

<{{ $as }}
    role="tab"
    @if ($disabled) aria-disabled="true" @endif
    {{ $attributes->class([
        'tab',
        'tab-active' => $active,
        'tab-disabled' => $disabled,
    ]) }}
>
    {{ $slot }}
</{{ $as }}>
