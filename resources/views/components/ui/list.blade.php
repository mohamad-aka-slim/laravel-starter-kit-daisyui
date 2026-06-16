@props(['as' => 'ul'])

<{{ $as }} {{ $attributes->class('list bg-base-100 rounded-box shadow-md') }}>
    {{ $slot }}
</{{ $as }}>
