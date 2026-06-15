<x-layouts.app title="Progress Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Progress Playground" name="x-ui.progress" description="Progress bars communicate completion for determinate or indeterminate tasks." docs="https://daisyui.com/components/progress/" />
        <x-ui.panel title="Examples" description="Set value for determinate progress, or omit value for indeterminate progress.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="space-y-3">
                        @foreach (['default', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <x-ui.progress :variant="$variant" value="60" class="w-full" />
                        @endforeach
                        <x-ui.progress class="w-full" />
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, primary, secondary, accent, info, success, warning, error', 'description' => 'Applies progress color.'],
                        ['name' => 'value, max', 'values' => 'number', 'description' => 'Controls determinate progress.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
