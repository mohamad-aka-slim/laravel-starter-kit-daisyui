@props([
    'name' => 'filter',
    'options' => [],
    'active' => null,
])

<form {{ $attributes->class('filter') }}>
    <input class="btn btn-square" type="reset" value="x">
    @foreach ($options as $value => $label)
        <input
            class="btn"
            type="radio"
            name="{{ $name }}"
            value="{{ is_string($value) ? $value : $label }}"
            aria-label="{{ $label }}"
            @checked(($active ?? null) === (is_string($value) ? $value : $label))
        >
    @endforeach
    {{ $slot }}
</form>
