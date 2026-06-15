<x-layouts.app title="Dropdown Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Dropdown Playground" name="x-ui.dropdown" description="Dropdowns reveal contextual menu content from a trigger. The component exposes alignment, side, hover, open, and close modifiers." docs="https://daisyui.com/components/dropdown/" />
        <x-ui.panel title="Examples" description="Dropdown is compound: wrapper, trigger, and content.">
            <div class="space-y-8">
                <x-playground.section title="Positions and States">
                    <div class="flex flex-wrap gap-4">
                        <x-ui.dropdown>
                            <x-ui.dropdown.trigger>Default</x-ui.dropdown.trigger>
                            <x-ui.dropdown.content><li><a>Item 1</a></li><li><a>Item 2</a></li></x-ui.dropdown.content>
                        </x-ui.dropdown>
                        <x-ui.dropdown align="end" side="right" hover open>
                            <x-ui.dropdown.trigger class="btn-primary">End Right</x-ui.dropdown.trigger>
                            <x-ui.dropdown.content><li><a>Profile</a></li><li><a>Settings</a></li></x-ui.dropdown.content>
                        </x-ui.dropdown>
                        <x-ui.dropdown align="center" side="top" close>
                            <x-ui.dropdown.trigger class="btn-secondary">Forced Close</x-ui.dropdown.trigger>
                            <x-ui.dropdown.content><li><a>Hidden Item</a></li></x-ui.dropdown.content>
                        </x-ui.dropdown>
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'align', 'values' => 'start, center, end', 'description' => 'Controls dropdown horizontal alignment.'],
                        ['name' => 'side', 'values' => 'top, bottom, left, right', 'description' => 'Controls where the menu opens.'],
                        ['name' => 'hover, open, close', 'values' => 'boolean', 'description' => 'Applies DaisyUI behavior/state modifiers.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
