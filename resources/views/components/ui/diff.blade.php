@props([
    'before' => 'Before',
    'after' => 'After',
    'split' => 50,
])

<figure {{ $attributes->class('diff aspect-16/9') }} tabindex="0">
    <div class="diff-item-1" role="img">
        <div class="grid place-content-center bg-primary text-4xl font-black text-primary-content">
            {{ $before }}
        </div>
    </div>
    <div class="diff-item-2" role="img" tabindex="0">
        <div class="grid place-content-center bg-base-200 text-4xl font-black">
            {{ $after }}
        </div>
    </div>
    <div class="diff-resizer" style="--range: {{ (int) $split }}%;"></div>
</figure>
