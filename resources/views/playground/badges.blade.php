<x-layouts.app title="Badge Playground">
    <section class="mx-auto w-full max-w-7xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
        <x-ui.panel title="Badge" description="Blade API backed by DaisyUI badge classes.">
            <div class="space-y-6">
                <div>
                    <h2 class="mb-3 text-sm font-semibold">Variants</h2>
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
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Sizes</h2>
                    <div class="flex flex-wrap items-center gap-2">
                        <x-ui.badge size="xs">Xsmall</x-ui.badge>
                        <x-ui.badge size="sm">Small</x-ui.badge>
                        <x-ui.badge size="md">Medium</x-ui.badge>
                        <x-ui.badge size="lg">Large</x-ui.badge>
                        <x-ui.badge size="xl">Xlarge</x-ui.badge>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Styles</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.badge variant="primary" soft>Soft</x-ui.badge>
                        <x-ui.badge variant="secondary" outline>Outline</x-ui.badge>
                        <x-ui.badge variant="accent" dash>Dash</x-ui.badge>
                        <x-ui.badge ghost>Ghost</x-ui.badge>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Inline Text</h2>
                    <div class="space-y-2">
                        <h1 class="text-xl font-semibold">Heading <x-ui.badge size="xl" variant="primary">New</x-ui.badge></h1>
                        <p class="text-sm text-base-content/70">Status <x-ui.badge size="sm" variant="success" soft>Ready</x-ui.badge></p>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Blade Usage</h2>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>&lt;x-ui.badge variant="success" soft&gt;Ready&lt;/x-ui.badge&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.badge variant="warning" outline size="sm"&gt;Pending&lt;/x-ui.badge&gt;</code></pre>
                    </div>
                </div>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
