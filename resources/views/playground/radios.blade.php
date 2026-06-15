<x-layouts.app title="Radio Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Radio Playground"
            name="x-ui.radio"
            description="Radio inputs let users choose one option from a named group. This wrapper keeps color and size options aligned with DaisyUI."
            docs="https://daisyui.com/components/radio/"
        />

        <x-ui.panel title="Examples" description="All radios with the same name belong to the same choice group.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="flex flex-wrap gap-4">
                        @foreach (['default', 'neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <label class="label gap-2">
                                <x-ui.radio name="radio-variants" :variant="$variant" :checked="$loop->first" />
                                {{ str($variant)->headline() }}
                            </label>
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="flex flex-wrap items-center gap-4">
                        @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                            <x-ui.radio name="radio-sizes" :size="$size" checked />
                        @endforeach
                        <x-ui.radio name="radio-disabled" disabled />
                        <x-ui.radio name="radio-disabled" checked disabled />
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI radio color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls radio scale.'],
                        ['name' => 'name', 'values' => 'string', 'description' => 'Groups radio options together.'],
                        ['name' => 'checked, required, disabled', 'values' => 'boolean', 'description' => 'Applies native radio states.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
