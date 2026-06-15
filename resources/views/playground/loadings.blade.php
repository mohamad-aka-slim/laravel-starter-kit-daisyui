<x-layouts.app title="Loading Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Loading Playground" name="x-ui.loading" description="Loading indicators show that work is in progress. DaisyUI provides multiple animation styles." docs="https://daisyui.com/components/loading/" />
        <x-ui.panel title="Examples" description="Choose a style that matches the density and tone of the surrounding interface.">
            <div class="space-y-8">
                <x-playground.section title="Styles">
                    <div class="flex flex-wrap items-center gap-6">
                        @foreach (['spinner', 'dots', 'ring', 'ball', 'bars', 'infinity'] as $style)
                            <x-ui.loading :style="$style" size="lg" />
                        @endforeach
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'style', 'values' => 'spinner, dots, ring, ball, bars, infinity', 'description' => 'Selects the loading animation class.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls loading indicator size.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
