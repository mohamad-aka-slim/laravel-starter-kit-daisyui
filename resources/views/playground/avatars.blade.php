<x-layouts.app title="Avatar Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header title="Avatar Playground" name="x-ui.avatar" description="Avatars show users, entities, or placeholders with optional online/offline status." docs="https://daisyui.com/components/avatar/" />
        <x-ui.panel title="Examples" description="Use image avatars when you have a photo, and placeholder avatars when you only have initials.">
            <div class="space-y-8">
                <x-playground.section title="Images and Status">
                    <div class="flex flex-wrap items-center gap-4">
                        <x-ui.avatar size="xs" src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="Cat" />
                        <x-ui.avatar size="md" online src="https://img.daisyui.com/images/profile/demo/batperson@192.webp" alt="Person" />
                        <x-ui.avatar size="lg" offline src="https://img.daisyui.com/images/profile/demo/spiderperson@192.webp" alt="Person" />
                        <x-ui.avatar size="xl" placeholder="UI" />
                    </div>
                </x-playground.section>
                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'src, alt', 'values' => 'string', 'description' => 'Renders an image avatar.'],
                        ['name' => 'placeholder', 'values' => 'string', 'description' => 'Renders text inside avatar-placeholder.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Maps to safe Tailwind width classes.'],
                        ['name' => 'online, offline', 'values' => 'boolean', 'description' => 'Applies status indicator classes.'],
                    ]" />
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
