@props([
    'for' => null,
])

@if ($for)
    <label for="{{ $for }}" {{ $attributes->class('modal-backdrop') }}>
        {{ $slot->isEmpty() ? 'Close' : $slot }}
    </label>
@else
    <form method="dialog" {{ $attributes->class('modal-backdrop') }}>
        <button>{{ $slot->isEmpty() ? 'Close' : $slot }}</button>
    </form>
@endif
