@props(['as' => 'div'])

<{{ $as }} {{ $attributes->class('hover-3d') }}>
    {{ $slot }}
    @for ($i = 0; $i < 8; $i++)
        <div></div>
    @endfor
</{{ $as }}>
