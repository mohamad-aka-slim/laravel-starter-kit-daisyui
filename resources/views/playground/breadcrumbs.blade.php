<x-layouts.app title="Breadcrumbs Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Breadcrumbs Playground" name="x-ui.breadcrumbs" description="Breadcrumbs show the current page location within a hierarchy." docs="https://daisyui.com/components/breadcrumbs/" />
        <x-ui.panel title="Examples" description="Pass an items array or provide custom li elements in the slot.">
            <div class="space-y-8">
                <x-playground.section title="Items Array">
                    <x-ui.breadcrumbs :items="['Home' => '/', 'Components' => '/playground', 'Breadcrumbs' => null]" />
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'items', 'values' => 'array label => url|null', 'description' => 'Renders breadcrumb list items.'],
                        ['name' => 'slot', 'values' => 'custom li markup', 'description' => 'Allows fully custom breadcrumb contents.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
