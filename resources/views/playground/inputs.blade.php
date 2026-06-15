<x-layouts.app title="Input Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Input"
            name="x-ui.input"
            description="Inputs collect short text values. This component supports direct input rendering and DaisyUI's wrapper-label pattern for prefix/suffix layouts."
            docs="https://daisyui.com/components/input/"
        />

        <x-ui.panel title="Examples" description="Text inputs, validation colors, sizes, states, and wrapper labels.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-3">
                        <x-ui.input placeholder="Default" />
                        <x-ui.input variant="neutral" placeholder="Neutral" />
                        <x-ui.input variant="primary" placeholder="Primary" />
                        <x-ui.input variant="secondary" placeholder="Secondary" />
                        <x-ui.input variant="accent" placeholder="Accent" />
                        <x-ui.input variant="info" placeholder="Info" />
                        <x-ui.input variant="success" placeholder="Success" />
                        <x-ui.input variant="warning" placeholder="Warning" />
                        <x-ui.input variant="error" placeholder="Error" />
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-5">
                        <x-ui.input size="xs" placeholder="XS" />
                        <x-ui.input size="sm" placeholder="SM" />
                        <x-ui.input size="md" placeholder="MD" />
                        <x-ui.input size="lg" placeholder="LG" />
                        <x-ui.input size="xl" placeholder="XL" />
                    </div>
                    <div class="mt-3 grid gap-3 md:grid-cols-3">
                        <x-ui.input value="Readonly value" readonly />
                        <x-ui.input value="Disabled value" disabled />
                        <x-ui.input ghost placeholder="Ghost" />
                    </div>
                </x-playground.section>

                <x-playground.section title="Wrapper Label Pattern" description="Use as='label' when the .input class needs to wrap icons, prefixes, suffixes, or a nested input.">
                    <div class="grid gap-3 md:grid-cols-2">
                        <x-ui.input as="label">
                            <span class="text-base-content/60">https://</span>
                            <input type="text" class="grow" placeholder="example.com" />
                        </x-ui.input>

                        <x-ui.input as="label" variant="primary">
                            <input type="text" class="grow" placeholder="Search" />
                            <kbd class="kbd kbd-sm">⌘</kbd>
                            <kbd class="kbd kbd-sm">K</kbd>
                        </x-ui.input>
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI input color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls input height and spacing.'],
                        ['name' => 'as', 'values' => 'input, label, div, ...', 'description' => 'Renders a direct input or wrapper element.'],
                        ['name' => 'type, name, id, value', 'values' => 'native input attributes', 'description' => 'Forwarded to the direct input element.'],
                        ['name' => 'required, disabled, readonly, ghost', 'values' => 'boolean', 'description' => 'Applies native states or DaisyUI ghost style.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.input name=&quot;email&quot; type=&quot;email&quot; variant=&quot;primary&quot; placeholder=&quot;Email&quot; /&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.input size=&quot;sm&quot; variant=&quot;error&quot; required /&gt;</code></pre>
                        <pre data-prefix="3"><code>&lt;x-ui.input as=&quot;label&quot;&gt;&lt;span&gt;https://&lt;/span&gt;&lt;input class=&quot;grow&quot; /&gt;&lt;/x-ui.input&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
