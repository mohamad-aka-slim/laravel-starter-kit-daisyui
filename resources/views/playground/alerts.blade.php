<x-layouts.app title="Alert Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Alert Playground"
            name="x-ui.alert"
            description="Alerts communicate important feedback such as success, warning, info, or error states. This wrapper maps Blade props to DaisyUI alert classes."
            docs="https://daisyui.com/components/alert/"
        />

        <x-ui.panel title="Examples" description="Alerts can be colored, styled, stacked, or rendered without the default icon.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="grid gap-3">
                        <x-ui.alert>Default alert</x-ui.alert>
                        <x-ui.alert variant="info">Info alert</x-ui.alert>
                        <x-ui.alert variant="success">Success alert</x-ui.alert>
                        <x-ui.alert variant="warning">Warning alert</x-ui.alert>
                        <x-ui.alert variant="error">Error alert</x-ui.alert>
                    </div>
                </x-playground.section>

                <x-playground.section title="Styles and Layout">
                    <div class="grid gap-3 md:grid-cols-2">
                        <x-ui.alert variant="info" outline>Outline alert</x-ui.alert>
                        <x-ui.alert variant="success" soft>Soft alert</x-ui.alert>
                        <x-ui.alert variant="warning" dash>Dash alert</x-ui.alert>
                        <x-ui.alert variant="error" :icon="false">Alert without icon</x-ui.alert>
                        <x-ui.alert vertical>Vertical alert layout</x-ui.alert>
                        <x-ui.alert horizontal>Horizontal alert layout</x-ui.alert>
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, info, success, warning, error', 'description' => 'Maps to DaisyUI alert color classes.'],
                        ['name' => 'outline, soft, dash', 'values' => 'boolean', 'description' => 'Applies visual style modifiers.'],
                        ['name' => 'vertical, horizontal', 'values' => 'boolean', 'description' => 'Controls alert layout direction.'],
                        ['name' => 'icon', 'values' => 'boolean', 'description' => 'Toggles the default informational icon.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.alert variant=&quot;success&quot;&gt;Saved successfully&lt;/x-ui.alert&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.alert variant=&quot;warning&quot; outline&gt;Check your input&lt;/x-ui.alert&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
