<x-layouts.app title="Pagination Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Pagination Playground" name="x-ui.pagination" description="Pagination in DaisyUI is built from join and join-item buttons. This wrapper makes that pattern reusable." docs="https://daisyui.com/components/pagination/" />
        <x-ui.panel title="Examples" description="Use active and disabled states to communicate the current page and unavailable controls.">
            <div class="space-y-8">
                <x-playground.section title="Horizontal and Vertical">
                    <div class="space-y-4">
                        <x-ui.pagination>
                            <x-ui.pagination.item href="?page=1">1</x-ui.pagination.item>
                            <x-ui.pagination.item active>2</x-ui.pagination.item>
                            <x-ui.pagination.item>3</x-ui.pagination.item>
                            <x-ui.pagination.item disabled>4</x-ui.pagination.item>
                        </x-ui.pagination>
                        <x-ui.pagination vertical>
                            <x-ui.pagination.item size="sm">Previous</x-ui.pagination.item>
                            <x-ui.pagination.item size="sm" active>Current</x-ui.pagination.item>
                            <x-ui.pagination.item size="sm">Next</x-ui.pagination.item>
                        </x-ui.pagination>
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'vertical', 'values' => 'boolean', 'description' => 'Switches join direction.'],
                        ['name' => 'href', 'values' => 'URL string', 'description' => 'Renders pagination item as an anchor.'],
                        ['name' => 'active, disabled', 'values' => 'boolean', 'description' => 'Applies page state classes.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
