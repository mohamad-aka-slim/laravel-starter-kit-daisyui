@props(['url' => null])

<div {{ $attributes->class('mockup-browser border border-base-300 bg-base-300') }}>
    @if ($url)
        <div class="mockup-browser-toolbar">
            <div class="input">{{ $url }}</div>
        </div>
    @endif

    <div class="border-t border-base-300 bg-base-100 p-6">
        {{ $slot }}
    </div>
</div>
