<x-layouts.app title="Fieldset Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Fieldset Playground"
            name="x-ui.fieldset / x-ui.label"
            description="Fieldset groups related form controls, while label covers normal label text and DaisyUI floating labels."
            docs="https://daisyui.com/components/label/"
        />

        <x-ui.panel title="Examples" description="Use these helpers to keep form spacing and label markup consistent.">
            <div class="space-y-8">
                <x-playground.section title="Fieldset">
                    <div class="grid gap-4 md:grid-cols-2">
                        <x-ui.fieldset legend="Profile" label="Optional">
                            <x-ui.input placeholder="Name" />
                            <x-ui.textarea rows="3" placeholder="Bio" />
                        </x-ui.fieldset>

                        <div class="space-y-3">
                            <x-ui.input as="label">
                                <x-ui.label>https://</x-ui.label>
                                <input type="text" class="grow" placeholder="example.com" />
                            </x-ui.input>
                            <x-ui.label as="label" floating>
                                <x-ui.input placeholder="Email" />
                                <span>Email</span>
                            </x-ui.label>
                        </div>
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'legend', 'values' => 'string', 'description' => 'Renders a fieldset legend.'],
                        ['name' => 'label', 'values' => 'string', 'description' => 'Renders helper label text below the fieldset.'],
                        ['name' => 'floating', 'values' => 'boolean', 'description' => 'Makes x-ui.label render DaisyUI floating-label.'],
                        ['name' => 'as', 'values' => 'span, label, div, ...', 'description' => 'Changes the label wrapper element.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
