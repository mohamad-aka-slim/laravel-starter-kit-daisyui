@props(['items' => []])

<div {{ $attributes->class('breadcrumbs text-sm') }}>
    <ul>
        @foreach ($items as $label => $url)
            <li>
                @if ($url)
                    <a href="{{ $url }}">{{ $label }}</a>
                @else
                    {{ $label }}
                @endif
            </li>
        @endforeach

        {{ $slot }}
    </ul>
</div>
