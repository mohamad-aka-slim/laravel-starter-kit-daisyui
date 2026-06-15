<x-layouts.app title="Skeleton Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Skeleton Playground" name="x-ui.skeleton" description="Skeletons reserve layout space while content is loading." docs="https://daisyui.com/components/skeleton/" />
        <x-ui.panel title="Examples" description="Compose skeleton blocks to mimic the eventual content shape.">
            <div class="space-y-8">
                <x-playground.section title="Profile Card Placeholder">
                    <div class="flex w-full max-w-md flex-col gap-4">
                        <div class="flex items-center gap-4">
                            <x-ui.skeleton class="h-16 w-16 shrink-0 rounded-full" />
                            <div class="flex flex-col gap-4">
                                <x-ui.skeleton class="h-4 w-32" />
                                <x-ui.skeleton class="h-4 w-48" />
                            </div>
                        </div>
                        <x-ui.skeleton class="h-32 w-full" />
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'as', 'values' => 'div, span, li, ...', 'description' => 'Changes the rendered wrapper element.'],
                        ['name' => 'class', 'values' => 'Tailwind utilities', 'description' => 'Controls skeleton size and shape.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
