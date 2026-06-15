<x-layouts.app title="Button Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Button"
            name="x-ui.button"
            description="Buttons trigger actions, submit forms, or render links with the same Blade API. The component maps friendly props to DaisyUI btn classes."
            docs="https://daisyui.com/components/button/"
        />

        <x-ui.panel title="Examples" description="Common button styles, states, sizes, and link usage.">
            <div class="space-y-8">
                <x-playground.section title="Colors" description="Use variant for DaisyUI semantic colors.">
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button>Default</x-ui.button>
                        <x-ui.button variant="neutral">Neutral</x-ui.button>
                        <x-ui.button variant="primary">Primary</x-ui.button>
                        <x-ui.button variant="secondary">Secondary</x-ui.button>
                        <x-ui.button variant="accent">Accent</x-ui.button>
                        <x-ui.button variant="info">Info</x-ui.button>
                        <x-ui.button variant="success">Success</x-ui.button>
                        <x-ui.button variant="warning">Warning</x-ui.button>
                        <x-ui.button variant="error">Error</x-ui.button>
                    </div>
                </x-playground.section>

                <x-playground.section title="Styles" description="Style props can be combined with colors.">
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button variant="primary" outline>Outline</x-ui.button>
                        <x-ui.button variant="primary" soft>Soft</x-ui.button>
                        <x-ui.button variant="primary" dash>Dash</x-ui.button>
                        <x-ui.button variant="ghost">Ghost</x-ui.button>
                        <x-ui.button variant="link">Link</x-ui.button>
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and Shapes">
                    <div class="flex flex-wrap items-center gap-2">
                        <x-ui.button size="xs">XS</x-ui.button>
                        <x-ui.button size="sm">SM</x-ui.button>
                        <x-ui.button size="md">MD</x-ui.button>
                        <x-ui.button size="lg">LG</x-ui.button>
                        <x-ui.button size="xl">XL</x-ui.button>
                        <x-ui.button square variant="primary">S</x-ui.button>
                        <x-ui.button circle variant="secondary">C</x-ui.button>
                    </div>
                </x-playground.section>

                <x-playground.section title="States and Links">
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button variant="primary" loading>Loading</x-ui.button>
                        <x-ui.button variant="neutral" disabled>Disabled</x-ui.button>
                        <x-ui.button href="https://daisyui.com/components/button/" variant="primary">Anchor Button</x-ui.button>
                        <x-ui.button block variant="accent">Block Button</x-ui.button>
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, ghost, link, info, success, warning, error', 'description' => 'Maps to DaisyUI color and style classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls button height and text scale.'],
                        ['name' => 'outline, soft, dash', 'values' => 'boolean', 'description' => 'Applies visual style modifiers.'],
                        ['name' => 'wide, block, square, circle', 'values' => 'boolean', 'description' => 'Controls shape and layout.'],
                        ['name' => 'href', 'values' => 'URL string', 'description' => 'Renders an anchor instead of a button.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.button variant=&quot;primary&quot;&gt;Save&lt;/x-ui.button&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.button variant=&quot;warning&quot; outline size=&quot;sm&quot;&gt;Pending&lt;/x-ui.button&gt;</code></pre>
                        <pre data-prefix="3"><code>&lt;x-ui.button href=&quot;/docs&quot; variant=&quot;ghost&quot;&gt;Read docs&lt;/x-ui.button&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
