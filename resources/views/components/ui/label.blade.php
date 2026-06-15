@props(['as' => 'span', 'floating' => false])

<{{ $as }} {{ $attributes->class($floating ? 'floating-label' : 'label') }}>
    {{ $slot }}
</{{ $as }}>
