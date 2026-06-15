<x-layouts.app title="Modal Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Modal Playground" name="x-ui.modal" description="Modals show focused content above the page. This compound component supports native dialog and checkbox-controlled DaisyUI patterns." docs="https://daisyui.com/components/modal/" />
        <x-ui.panel title="Examples" description="Modal is built from wrapper, box, action, backdrop, and optional toggle parts.">
            <div class="space-y-8">
                <x-playground.section title="Dialog Modal">
                    <x-ui.button onclick="demo_modal.showModal()" variant="primary">Open Dialog Modal</x-ui.button>
                    <x-ui.modal id="demo_modal">
                        <x-ui.modal.box>
                            <h3 class="text-lg font-bold">Hello!</h3>
                            <p class="py-4">This modal uses the native dialog element.</p>
                            <x-ui.modal.action><form method="dialog"><x-ui.button>Close</x-ui.button></form></x-ui.modal.action>
                        </x-ui.modal.box>
                        <x-ui.modal.backdrop />
                    </x-ui.modal>
                </x-playground.section>
                <x-playground.section title="Checkbox and Placement">
                    <x-ui.modal.toggle id="checkbox_modal" />
                    <label for="checkbox_modal" class="btn btn-secondary">Open Checkbox Modal</label>
                    <x-ui.modal id="checkbox_modal_container" as="div" placement="bottom">
                        <x-ui.modal.box>
                            <h3 class="text-lg font-bold">Checkbox controlled</h3>
                            <p class="py-4">This follows DaisyUI's checkbox modal method.</p>
                            <x-ui.modal.action><label for="checkbox_modal" class="btn">Close</label></x-ui.modal.action>
                        </x-ui.modal.box>
                        <x-ui.modal.backdrop for="checkbox_modal" />
                    </x-ui.modal>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'id', 'values' => 'required string', 'description' => 'Identifies the modal for dialog or checkbox control.'],
                        ['name' => 'as', 'values' => 'dialog, div', 'description' => 'Chooses native dialog or checkbox pattern wrapper.'],
                        ['name' => 'placement', 'values' => 'top, middle, bottom, start, end', 'description' => 'Applies modal placement class.'],
                        ['name' => 'open', 'values' => 'boolean', 'description' => 'Applies modal-open or open attribute for previews.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
