@props(['words' => []])

<span {{ $attributes->class('text-rotate') }}>
    <span>
        @foreach ($words as $word)
            <span>{{ $word }}</span>
        @endforeach

        {{ $slot }}
    </span>
</span>
