<x-layouts.app title="File Input Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="File Input Playground"
            name="x-ui.file-input"
            description="File inputs collect files from the user. This wrapper supports DaisyUI color, size, ghost style, and native upload attributes."
            docs="https://daisyui.com/components/file-input/"
        />

        <x-ui.panel title="Examples" description="Use accept and multiple for upload-specific behavior.">
            <div class="space-y-8">
                <x-playground.section title="Colors and Styles">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-3">
                        @foreach (['default', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <x-ui.file-input :variant="$variant" />
                        @endforeach
                        <x-ui.file-input ghost />
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-4">
                        <x-ui.file-input size="xs" />
                        <x-ui.file-input size="sm" />
                        <x-ui.file-input size="lg" />
                        <x-ui.file-input size="xl" multiple accept="image/*" />
                        <x-ui.file-input disabled />
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant, size', 'values' => 'DaisyUI file-input values', 'description' => 'Controls color and scale.'],
                        ['name' => 'ghost', 'values' => 'boolean', 'description' => 'Applies file-input-ghost.'],
                        ['name' => 'accept, multiple', 'values' => 'native attributes', 'description' => 'Controls which files can be selected.'],
                        ['name' => 'required, disabled', 'values' => 'boolean', 'description' => 'Applies native upload states.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
