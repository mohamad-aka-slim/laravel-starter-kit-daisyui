<x-layouts.app title="Tooltip Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Tooltip Playground" name="x-ui.tooltip" description="Tooltips provide short contextual hints on hover or focus. Open state is useful for previews." docs="https://daisyui.com/components/tooltip/" />
        <x-ui.panel title="Examples" description="Tooltips support positions, semantic colors, and forced open preview state.">
            <div class="space-y-8">
                <x-playground.section title="Positions and Colors">
                    <div class="flex flex-wrap gap-6 p-8">
                        @foreach (['top', 'bottom', 'left', 'right'] as $position)
                            <x-ui.tooltip tip="{{ str($position)->headline() }}" :position="$position" open><x-ui.button>{{ str($position)->headline() }}</x-ui.button></x-ui.tooltip>
                        @endforeach
                        <x-ui.tooltip tip="Saved" variant="success" open><x-ui.button variant="success">Success</x-ui.button></x-ui.tooltip>
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'tip', 'values' => 'string', 'description' => 'Sets the data-tip text.'],
                        ['name' => 'position', 'values' => 'top, bottom, left, right', 'description' => 'Controls tooltip placement.'],
                        ['name' => 'variant', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Applies tooltip color.'],
                        ['name' => 'open', 'values' => 'boolean', 'description' => 'Forces tooltip visible.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
