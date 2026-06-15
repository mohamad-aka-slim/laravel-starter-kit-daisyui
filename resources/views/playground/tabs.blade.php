<x-layouts.app title="Tabs Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Tabs Playground" name="x-ui.tabs" description="Tabs switch between related views or sections. This compound component supports DaisyUI styles, sizes, active tabs, disabled tabs, and optional content panels." docs="https://daisyui.com/components/tab/" />
        <x-ui.panel title="Examples" description="Use box, border, and lift styles depending on how much separation the tab bar needs.">
            <div class="space-y-8">
                <x-playground.section title="Styles">
                    @foreach (['box', 'border', 'lift'] as $style)
                        <x-ui.tabs :style="$style" size="lg" class="mb-3">
                            <x-ui.tabs.tab>Tab 1</x-ui.tabs.tab>
                            <x-ui.tabs.tab active>Tab 2</x-ui.tabs.tab>
                            <x-ui.tabs.tab disabled>Tab 3</x-ui.tabs.tab>
                        </x-ui.tabs>
                    @endforeach
                </x-playground.section>
                <x-playground.section title="With Content">
                    <x-ui.tabs style="lift" placement="bottom">
                        <x-ui.tabs.tab active>Preview</x-ui.tabs.tab>
                        <x-ui.tabs.content class="bg-base-100 border-base-300 p-6">Tab content comes right after a tab.</x-ui.tabs.content>
                    </x-ui.tabs>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'style', 'values' => 'box, border, lift', 'description' => 'Applies DaisyUI tab style classes.'],
                        ['name' => 'placement', 'values' => 'top, bottom', 'description' => 'Controls tab content direction.'],
                        ['name' => 'active, disabled', 'values' => 'boolean', 'description' => 'Applies state classes to a tab.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
