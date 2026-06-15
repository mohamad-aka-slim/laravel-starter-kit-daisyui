<x-layouts.app title="Checkbox Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Checkbox Playground"
            name="x-ui.checkbox"
            description="Checkboxes capture one or more independent boolean choices. This wrapper exposes DaisyUI colors, sizes, checked, and disabled states."
            docs="https://daisyui.com/components/checkbox/"
        />

        <x-ui.panel title="Examples" description="Checkboxes are often used with labels, lists, filters, and consent controls.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="flex flex-wrap gap-4">
                        @foreach (['default', 'neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <label class="label gap-2">
                                <x-ui.checkbox :variant="$variant" checked />
                                {{ str($variant)->headline() }}
                            </label>
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="flex flex-wrap items-center gap-4">
                        @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                            <x-ui.checkbox :size="$size" checked />
                        @endforeach
                        <x-ui.checkbox disabled />
                        <x-ui.checkbox checked disabled />
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI checkbox color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls checkbox scale.'],
                        ['name' => 'checked, required, disabled', 'values' => 'boolean', 'description' => 'Applies native checkbox states.'],
                        ['name' => 'name, id, value', 'values' => 'native attributes', 'description' => 'Forwarded to the checkbox input.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.checkbox name=&quot;remember&quot; variant=&quot;primary&quot; checked /&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.checkbox size=&quot;lg&quot; variant=&quot;success&quot; /&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
