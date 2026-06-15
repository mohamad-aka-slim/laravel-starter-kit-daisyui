@props([
    'as' => 'div',
])

<{{ $as }} {{ $attributes->class('navbar bg-base-100 shadow-sm') }}>
    {{ $slot }}
</{{ $as }}>
