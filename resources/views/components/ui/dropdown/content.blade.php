@props([
    'as' => 'ul',
])

<{{ $as }} tabindex="-1" {{ $attributes->class('dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm') }}>
    {{ $slot }}
</{{ $as }}>
