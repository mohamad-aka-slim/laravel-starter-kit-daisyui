<x-layouts.app title="Badge Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Badge"
            name="x-ui.badge"
            description="Badges label status, metadata, counts, or short categories. The component keeps DaisyUI badge classes behind a small Blade API."
            docs="https://daisyui.com/components/badge/"
        />

        <x-ui.panel title="Examples" description="Use badges inline with text, inside cards, or as compact status indicators.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="flex flex-wrap gap-2">
                        <x-ui.badge>Default</x-ui.badge>
                        <x-ui.badge variant="neutral">Neutral</x-ui.badge>
                        <x-ui.badge variant="primary">Primary</x-ui.badge>
                        <x-ui.badge variant="secondary">Secondary</x-ui.badge>
                        <x-ui.badge variant="accent">Accent</x-ui.badge>
                        <x-ui.badge variant="info">Info</x-ui.badge>
                        <x-ui.badge variant="success">Success</x-ui.badge>
                        <x-ui.badge variant="warning">Warning</x-ui.badge>
                        <x-ui.badge variant="error">Error</x-ui.badge>
                    </div>
                </x-playground.section>

                <x-playground.section title="Styles">
                    <div class="flex flex-wrap gap-2">
                        <x-ui.badge variant="primary" soft>Soft</x-ui.badge>
                        <x-ui.badge variant="secondary" outline>Outline</x-ui.badge>
                        <x-ui.badge variant="accent" dash>Dash</x-ui.badge>
                        <x-ui.badge ghost>Ghost</x-ui.badge>
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and Inline Usage">
                    <div class="space-y-3">
                        <div class="flex flex-wrap items-center gap-2">
                            <x-ui.badge size="xs">XS</x-ui.badge>
                            <x-ui.badge size="sm">SM</x-ui.badge>
                            <x-ui.badge size="md">MD</x-ui.badge>
                            <x-ui.badge size="lg">LG</x-ui.badge>
                            <x-ui.badge size="xl">XL</x-ui.badge>
                        </div>
                        <h2 class="text-xl font-semibold">Package <x-ui.badge variant="primary" size="lg">New</x-ui.badge></h2>
                        <p class="text-sm text-base-content/70">Build status <x-ui.badge variant="success" soft>Passing</x-ui.badge></p>
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI badge color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls badge height and text size.'],
                        ['name' => 'outline, dash, soft, ghost', 'values' => 'boolean', 'description' => 'Applies visual style modifiers.'],
                        ['name' => 'as', 'values' => 'span, div, a, ...', 'description' => 'Changes the rendered element.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.badge variant=&quot;success&quot; soft&gt;Ready&lt;/x-ui.badge&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.badge variant=&quot;warning&quot; outline size=&quot;sm&quot;&gt;Pending&lt;/x-ui.badge&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
