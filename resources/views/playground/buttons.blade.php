<x-layouts.app title="Button Playground">
    <section class="mx-auto w-full max-w-7xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
        <x-ui.panel title="Button" description="Blade API backed by DaisyUI button classes.">
            <div class="space-y-6">
                <div>
                    <h2 class="mb-3 text-sm font-semibold">Variants</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button>Default</x-ui.button>
                        <x-ui.button variant="neutral">Neutral</x-ui.button>
                        <x-ui.button variant="primary">Primary</x-ui.button>
                        <x-ui.button variant="secondary">Secondary</x-ui.button>
                        <x-ui.button variant="accent">Accent</x-ui.button>
                        <x-ui.button variant="ghost">Ghost</x-ui.button>
                        <x-ui.button variant="link">Link</x-ui.button>
                        <x-ui.button variant="info">Info</x-ui.button>
                        <x-ui.button variant="success">Success</x-ui.button>
                        <x-ui.button variant="warning">Warning</x-ui.button>
                        <x-ui.button variant="error">Error</x-ui.button>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Sizes</h2>
                    <div class="flex flex-wrap items-center gap-2">
                        <x-ui.button size="xs">Xsmall</x-ui.button>
                        <x-ui.button size="sm">Small</x-ui.button>
                        <x-ui.button size="md">Medium</x-ui.button>
                        <x-ui.button size="lg">Large</x-ui.button>
                        <x-ui.button size="xl">Xlarge</x-ui.button>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Styles</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button variant="primary" outline>Outline</x-ui.button>
                        <x-ui.button variant="secondary" wide>Wide</x-ui.button>
                        <x-ui.button variant="accent" active>Active</x-ui.button>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">States</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.button variant="primary" loading>Loading</x-ui.button>
                        <x-ui.button variant="neutral" disabled>Disabled</x-ui.button>
                        <x-ui.button href="https://daisyui.com/components/button/" variant="primary">Anchor Button</x-ui.button>
                        <x-ui.button href="https://daisyui.com/components/button/" variant="primary" disabled>Disabled Link</x-ui.button>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Shapes</h2>
                    <div class="flex flex-wrap items-center gap-2">
                        <x-ui.button square variant="primary">S</x-ui.button>
                        <x-ui.button circle variant="secondary">C</x-ui.button>
                        <x-ui.button block variant="accent">Block Button</x-ui.button>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Joined Buttons</h2>
                    <div class="join w-full max-w-md">
                        <x-ui.button class="join-item flex-1">Draft</x-ui.button>
                        <x-ui.button class="join-item flex-1" active>Preview</x-ui.button>
                        <x-ui.button class="join-item flex-1" variant="primary">Ship</x-ui.button>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Blade Usage</h2>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>&lt;x-ui.button variant="primary"&gt;Save&lt;/x-ui.button&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.button variant="warning" outline size="sm"&gt;Pending&lt;/x-ui.button&gt;</code></pre>
                        <pre data-prefix="3"><code>&lt;x-ui.button href="/docs" variant="ghost"&gt;Read docs&lt;/x-ui.button&gt;</code></pre>
                    </div>
                </div>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
