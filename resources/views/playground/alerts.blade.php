<x-layouts.app title="Alerts Playground">
    <section class="mx-auto w-full max-w-7xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
        <x-ui.panel title="Alert" description="Blade API backed by DaisyUI alert classes.">
            <div class="space-y-6">
                <div>
                    <h2 class="mb-3 text-sm font-semibold">Variants</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.alert>Default</x-ui.alert>
                        <x-ui.alert variant="info">Info</x-ui.alert>
                        <x-ui.alert variant="success">Success</x-ui.alert>
                        <x-ui.alert variant="warning">Warning</x-ui.alert>
                        <x-ui.alert variant="error">Error</x-ui.alert>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Styles</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.alert variant="primary" outline>Outline</x-ui.alert>
                        <x-ui.alert variant="secondary" soft>Soft</x-ui.alert>
                        <x-ui.alert variant="accent" dash>Dash</x-ui.alert>
                        <x-ui.alert ghost>Ghost</x-ui.alert>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Layout</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.alert vertical>Vertical Alert</x-ui.alert>
                        <x-ui.alert horizontal>Horizontal Alert</x-ui.alert>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Icon</h2>
                    <div class="flex flex-wrap gap-2">
                        <x-ui.alert variant="success" icon>With Icon</x-ui.alert>
                        <x-ui.alert variant="error" icon>With Icon</x-ui.alert>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Inline Text</h2>
                    <div class="space-y-2">
                        <p class="text-sm">This is a paragraph with <x-ui.alert variant="success" size="sm" soft>inline
                                alert</x-ui.alert> in the text.</p>
                        <p class="text-sm">Another example with <x-ui.alert variant="warning" size="xs"
                                outline>warning</x-ui.alert> message.</p>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Blade Usage</h2>
                    <div class="mockup-code text-sm">
                        <pre
                            data-prefix="1"><code><x-ui.alert variant="success">Success message</x-ui.alert></code></pre>
                        <pre
                            data-prefix="2"><code><x-ui.alert variant="warning" outline size="sm">Warning</x-ui.alert></code></pre>
                        <pre
                            data-prefix="3"><code><x-ui.alert variant="error" icon>Error with icon</x-ui.alert></code></pre>
                    </div>
                </div>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
