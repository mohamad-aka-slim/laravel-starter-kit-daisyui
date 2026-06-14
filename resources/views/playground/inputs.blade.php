<x-layouts.app title="Input Playground">
    <section class="mx-auto w-full max-w-7xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
        <x-ui.panel title="Input" description="Blade API backed by DaisyUI input classes.">
            <div class="space-y-6">
                <div>
                    <h2 class="mb-3 text-sm font-semibold">Variants</h2>
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
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Sizes</h2>
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-5">
                        <x-ui.input size="xs" placeholder="Xsmall" />
                        <x-ui.input size="sm" placeholder="Small" />
                        <x-ui.input size="md" placeholder="Medium" />
                        <x-ui.input size="lg" placeholder="Large" />
                        <x-ui.input size="xl" placeholder="Xlarge" />
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">States</h2>
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                        <x-ui.input value="Readonly value" readonly />
                        <x-ui.input value="Disabled value" disabled />
                        <x-ui.input type="number" min="1" max="10" step="1" placeholder="Number" />
                        <x-ui.input minlength="3" maxlength="12" placeholder="Length 3-12" />
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Styles</h2>
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-3">
                        <x-ui.input ghost placeholder="Ghost" />
                        <x-ui.input :bordered="false" placeholder="No border" />
                        <x-ui.input class="w-full" variant="primary" placeholder="Full width with custom class" />
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Blade Usage</h2>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>&lt;x-ui.input name="email" type="email" variant="primary" placeholder="Email" /&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.input size="sm" variant="error" required /&gt;</code></pre>
                        <pre data-prefix="3"><code>&lt;x-ui.input class="w-full" value="Readonly" readonly /&gt;</code></pre>
                    </div>
                </div>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
