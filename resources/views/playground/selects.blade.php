<x-layouts.app title="Select Playground">
    @php
        $options = ['crimson' => 'Crimson', 'amber' => 'Amber', 'velvet' => 'Velvet'];
    @endphp

    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Select Playground"
            name="x-ui.select"
            description="Select controls let users choose from known options. This component supports placeholders, selected values, multiple mode, and DaisyUI variants."
            docs="https://daisyui.com/components/select/"
        />

        <x-ui.panel title="Examples" description="Options can be passed as an array or rendered manually through the slot.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-3">
                        @foreach (['default', 'neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <x-ui.select :variant="$variant" :options="$options" placeholder="{{ str($variant)->headline() }}" />
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-5">
                        @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                            <x-ui.select :size="$size" :options="$options" selected="amber" />
                        @endforeach
                    </div>
                    <div class="mt-3 grid gap-3 md:grid-cols-3">
                        <x-ui.select ghost :options="$options" placeholder="Ghost" />
                        <x-ui.select :options="$options" selected="velvet" disabled />
                        <x-ui.select :options="$options" :selected="['crimson', 'velvet']" multiple />
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'options', 'values' => 'array', 'description' => 'Renders option elements from value to label pairs.'],
                        ['name' => 'selected', 'values' => 'string or array', 'description' => 'Marks one or more options as selected.'],
                        ['name' => 'variant, size', 'values' => 'DaisyUI select values', 'description' => 'Controls color and scale.'],
                        ['name' => 'placeholder, multiple, required, disabled, ghost', 'values' => 'mixed', 'description' => 'Applies native select behavior and style.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.select name=&quot;color&quot; :options=&quot;$options&quot; selected=&quot;amber&quot; /&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.select variant=&quot;error&quot; placeholder=&quot;Pick one&quot; required /&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
