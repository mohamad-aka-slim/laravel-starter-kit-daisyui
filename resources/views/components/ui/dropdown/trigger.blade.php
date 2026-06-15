@props([
    'as' => 'div',
])

<{{ $as }} tabindex="0" role="button" {{ $attributes->class('btn') }}>
    {{ $slot }}
</{{ $as }}>
