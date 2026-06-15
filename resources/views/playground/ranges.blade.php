<x-layouts.app title="Range Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Range Playground"
            name="x-ui.range"
            description="Range sliders collect numeric values between a minimum and maximum. DaisyUI provides colors and sizes for the native range input."
            docs="https://daisyui.com/components/range/"
        />

        <x-ui.panel title="Examples" description="Use range for volume, percentages, thresholds, and other bounded values.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach (['default', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <x-ui.range :variant="$variant" value="50" step="10" />
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes">
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                            <x-ui.range :size="$size" value="70" />
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI range color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls slider scale.'],
                        ['name' => 'min, max, step, value', 'values' => 'number', 'description' => 'Forwarded to the native range input.'],
                        ['name' => 'disabled', 'values' => 'boolean', 'description' => 'Disables slider interaction.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
