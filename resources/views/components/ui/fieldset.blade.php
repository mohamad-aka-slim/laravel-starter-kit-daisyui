@props(['legend' => null, 'label' => null])

<fieldset {{ $attributes->class('fieldset') }}>
    @if ($legend)
        <legend class="fieldset-legend">{{ $legend }}</legend>
    @endif

    {{ $slot }}

    @if ($label)
        <p class="label">{{ $label }}</p>
    @endif
</fieldset>
