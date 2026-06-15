@props([
    'id',
    'checked' => false,
])

<input id="{{ $id }}" type="checkbox" @checked($checked) {{ $attributes->class('modal-toggle') }}>
