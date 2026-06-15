<x-layouts.app title="Table Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Table Playground" name="x-ui.table" description="Tables display dense structured data. The wrapper provides the DaisyUI table class and a responsive overflow container." docs="https://daisyui.com/components/table/" />
        <x-ui.panel title="Examples" description="Use zebra rows and pinned rows or columns for scan-heavy data.">
            <div class="space-y-8">
                <x-playground.section title="Zebra and Pinned">
                    <x-ui.table zebra pin-rows pin-cols size="sm">
                        <thead><tr><th></th><th>Name</th><th>Job</th><th>Favorite Color</th></tr></thead>
                        <tbody>
                            <tr><th>1</th><td>Cy Ganderton</td><td>Quality Control Specialist</td><td>Blue</td></tr>
                            <tr><th>2</th><td>Hart Hagerty</td><td>Desktop Support Technician</td><td>Purple</td></tr>
                            <tr><th>3</th><td>Brice Swyre</td><td>Tax Accountant</td><td>Red</td></tr>
                        </tbody>
                    </x-ui.table>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls table density.'],
                        ['name' => 'zebra', 'values' => 'boolean', 'description' => 'Applies alternating row styling.'],
                        ['name' => 'pinRows, pinCols', 'values' => 'boolean', 'description' => 'Applies sticky row or column modifiers.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
