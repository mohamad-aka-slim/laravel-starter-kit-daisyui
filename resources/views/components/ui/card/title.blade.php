@props([
    'as' => 'h2',
])

<{{ $as }} {{ $attributes->class('card-title') }}>
    {{ $slot }}
</{{ $as }}>
