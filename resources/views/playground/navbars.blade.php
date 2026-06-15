<x-layouts.app title="Navbar Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Navbar Playground" name="x-ui.navbar" description="Navbar arranges navigation into start, center, and end regions. Use it for app bars, dashboards, and compact site headers." docs="https://daisyui.com/components/navbar/" />
        <x-ui.panel title="Examples" description="Navbar parts match DaisyUI's navbar-start, navbar-center, and navbar-end classes.">
            <div class="space-y-8">
                <x-playground.section title="Application Navbar">
                    <x-ui.navbar>
                        <x-ui.navbar.start><x-ui.button variant="ghost" class="text-xl">Starter</x-ui.button></x-ui.navbar.start>
                        <x-ui.navbar.center class="hidden lg:flex">
                            <x-ui.menu horizontal class="px-1"><li><a>Docs</a></li><li><a>Components</a></li></x-ui.menu>
                        </x-ui.navbar.center>
                        <x-ui.navbar.end><x-ui.button variant="primary" size="sm">Sign in</x-ui.button></x-ui.navbar.end>
                    </x-ui.navbar>
                </x-playground.section>
                <x-playground.section title="Parts">
                    <x-playground.props :items="[
                        ['name' => 'x-ui.navbar.start', 'values' => 'slot', 'description' => 'Left side content region.'],
                        ['name' => 'x-ui.navbar.center', 'values' => 'slot', 'description' => 'Centered navigation or brand region.'],
                        ['name' => 'x-ui.navbar.end', 'values' => 'slot', 'description' => 'Right side actions region.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
