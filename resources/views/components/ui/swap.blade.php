@props([
    'active' => false,
    'rotate' => false,
    'flip' => false,
])

<label {{ $attributes->class(['swap', $active ? 'swap-active' : null, $rotate ? 'swap-rotate' : null, $flip ? 'swap-flip' : null]) }}>
    <input type="checkbox" @checked($active)>
    {{ $slot }}
</label>
