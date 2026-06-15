@props([
    'lines' => [],
])

<div {{ $attributes->class('mockup-code text-sm') }}>
    @foreach ($lines as $line)
        <pre data-prefix="{{ $loop->iteration }}"><code>{{ $line }}</code></pre>
    @endforeach

    {{ $slot }}
</div>
