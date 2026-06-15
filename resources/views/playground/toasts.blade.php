<x-layouts.app title="Toast Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Toast Playground" name="x-ui.toast" description="Toasts position short-lived feedback on the viewport. They usually contain alert components." docs="https://daisyui.com/components/toast/" />
        <x-ui.panel title="Examples" description="Use x and y props to place toast stacks.">
            <div class="space-y-8">
                <x-playground.section title="Positions">
                    <div class="relative min-h-96 overflow-hidden rounded-lg border border-base-300 bg-base-200">
                        <x-ui.toast x="start" y="top" class="absolute"><x-ui.alert variant="info">New mail arrived.</x-ui.alert></x-ui.toast>
                        <x-ui.toast x="center" y="middle" class="absolute"><x-ui.alert variant="warning">Sync is taking longer than usual.</x-ui.alert></x-ui.toast>
                        <x-ui.toast x="end" y="bottom" class="absolute"><x-ui.alert variant="error">Could not save changes.</x-ui.alert></x-ui.toast>
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'x', 'values' => 'start, center, end', 'description' => 'Controls horizontal position.'],
                        ['name' => 'y', 'values' => 'top, middle, bottom', 'description' => 'Controls vertical position.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
