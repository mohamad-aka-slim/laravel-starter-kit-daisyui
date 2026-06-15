<x-layouts.app title="Menu Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Menu Playground" name="x-ui.menu" description="Menus organize navigation actions in vertical or horizontal lists." docs="https://daisyui.com/components/menu/" />
        <x-ui.panel title="Examples" description="Menu accepts arbitrary li/a children and optional size or horizontal layout.">
            <div class="space-y-8">
                <x-playground.section title="Vertical and Horizontal">
                    <div class="flex flex-wrap gap-6">
                        <x-ui.menu class="bg-base-100 rounded-box w-56 p-2 shadow-sm"><li><a class="active">Dashboard</a></li><li><a>Projects</a></li><li><a>Settings</a></li></x-ui.menu>
                        <x-ui.menu horizontal class="bg-base-100 rounded-box p-2 shadow-sm"><li><a>Inbox</a></li><li><a>Archive</a></li><li><a>Trash</a></li></x-ui.menu>
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls menu density.'],
                        ['name' => 'horizontal', 'values' => 'boolean', 'description' => 'Applies menu-horizontal.'],
                        ['name' => 'as', 'values' => 'ul, div, nav, ...', 'description' => 'Changes the wrapper element.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
