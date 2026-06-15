@props(['src' => null, 'alt' => '', 'size' => 'md', 'online' => false, 'offline' => false, 'placeholder' => null, 'rounded' => true])

@php
    $sizes = [
        'xs' => 'w-8',
        'sm' => 'w-10',
        'md' => 'w-12',
        'lg' => 'w-16',
        'xl' => 'w-24',
    ];
@endphp

<div {{ $attributes->class(['avatar', 'avatar-online' => $online, 'avatar-offline' => $offline, 'avatar-placeholder' => $placeholder]) }}>
    <div @class(['bg-neutral text-neutral-content', $sizes[$size] ?? $sizes['md'], 'rounded-full' => $rounded])>
        @if ($src)
            <img src="{{ $src }}" alt="{{ $alt }}">
        @elseif ($placeholder)
            <span>{{ $placeholder }}</span>
        @else
            {{ $slot }}
        @endif
    </div>
</div>
