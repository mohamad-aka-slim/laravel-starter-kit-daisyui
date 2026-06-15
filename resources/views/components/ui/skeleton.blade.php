@props(['as' => 'div'])

<{{ $as }} {{ $attributes->class('skeleton') }}>
    {{ $slot }}
</{{ $as }}>
