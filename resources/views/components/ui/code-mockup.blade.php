@props(['lines' => []])

<div {{ $attributes->class('mockup-code') }}>
    @forelse ($lines as $line)
        <pre data-prefix="{{ $line['prefix'] ?? '>' }}"><code>{{ $line['code'] ?? $line }}</code></pre>
    @empty
        {{ $slot }}
    @endforelse
</div>
