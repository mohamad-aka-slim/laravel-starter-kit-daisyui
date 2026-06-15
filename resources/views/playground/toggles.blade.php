<x-layouts.app title="Toggle Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Toggle Playground"
            name="x-ui.toggle"
            description="Toggles are checkbox inputs styled as switches. Use them for settings that can be turned on or off."
            docs="https://daisyui.com/components/toggle/"
        />

        <x-ui.panel title="Examples" description="Toggles support the same color, size, checked, and disabled patterns as checkboxes.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="flex flex-wrap gap-4">
                        @foreach (['default', 'neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <label class="label gap-2">
                                <x-ui.toggle :variant="$variant" checked />
                                {{ str($variant)->headline() }}
                            </label>
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="flex flex-wrap items-center gap-4">
                        @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                            <x-ui.toggle :size="$size" checked />
                        @endforeach
                        <x-ui.toggle disabled />
                        <x-ui.toggle checked disabled />
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI toggle color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls toggle scale.'],
                        ['name' => 'checked, required, disabled', 'values' => 'boolean', 'description' => 'Applies native checkbox states.'],
                        ['name' => 'name, id, value', 'values' => 'native attributes', 'description' => 'Forwarded to the underlying checkbox input.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.toggle name=&quot;notifications&quot; variant=&quot;primary&quot; checked /&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.toggle size=&quot;lg&quot; variant=&quot;success&quot; /&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
