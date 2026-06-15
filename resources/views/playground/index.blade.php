<x-layouts.app title="Component Playground">
    @php
        $groups = [
            'Foundations' => [
                ['slug' => 'buttons', 'description' => 'Actions, links, loading states, shapes, and sizes.'],
                ['slug' => 'badges', 'description' => 'Short labels for status, metadata, and categories.'],
                ['slug' => 'alerts', 'description' => 'Status messages with colors, layout modes, and icons.'],
                ['slug' => 'cards', 'description' => 'Compound content containers with figures, bodies, titles, and actions.'],
            ],
            'Forms' => [
                ['slug' => 'inputs', 'description' => 'Text fields, wrapper labels, validation colors, and states.'],
                ['slug' => 'textareas', 'description' => 'Multiline text controls with sizes and semantic colors.'],
                ['slug' => 'selects', 'description' => 'Select menus with placeholder, multiple, and selected states.'],
                ['slug' => 'checkboxes', 'description' => 'Boolean inputs with color, size, checked, and disabled states.'],
                ['slug' => 'toggles', 'description' => 'Switch controls for binary settings.'],
                ['slug' => 'radios', 'description' => 'Single-choice inputs grouped by name.'],
                ['slug' => 'ranges', 'description' => 'Range sliders with values, steps, sizes, and colors.'],
                ['slug' => 'file-inputs', 'description' => 'File upload controls with accept and multiple options.'],
                ['slug' => 'fieldsets', 'description' => 'Form grouping with legends, labels, and hints.'],
            ],
            'Navigation' => [
                ['slug' => 'dropdowns', 'description' => 'Trigger and content menus with side and alignment modifiers.'],
                ['slug' => 'navbars', 'description' => 'Start, center, and end navigation regions.'],
                ['slug' => 'tabs', 'description' => 'Tabbed navigation with box, border, and lift styles.'],
                ['slug' => 'breadcrumbs', 'description' => 'Hierarchical page location links.'],
                ['slug' => 'menus', 'description' => 'Vertical and horizontal menu lists.'],
                ['slug' => 'paginations', 'description' => 'Join-based page navigation controls.'],
            ],
            'Feedback' => [
                ['slug' => 'modals', 'description' => 'Dialog and checkbox controlled overlays.'],
                ['slug' => 'toasts', 'description' => 'Positioned alert stacks for transient feedback.'],
                ['slug' => 'tooltips', 'description' => 'Context hints with positions, colors, and open state.'],
                ['slug' => 'loadings', 'description' => 'Loading indicators and animation styles.'],
                ['slug' => 'progresses', 'description' => 'Progress bars with semantic variants.'],
                ['slug' => 'skeletons', 'description' => 'Loading placeholders for cards and lists.'],
            ],
            'Data Display' => [
                ['slug' => 'tables', 'description' => 'Responsive tables with zebra and pinned row/column modifiers.'],
                ['slug' => 'avatars', 'description' => 'Images, placeholders, and online/offline status indicators.'],
            ],
        ];
    @endphp

    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Component Playground"
            name="DaisyUI Blade Kit"
            description="A documentation-style gallery for every Blade component in this starter. Each page should show what the component does, the props it accepts, examples, and the Blade code you would copy into an app."
        />

        <div class="grid gap-6 lg:grid-cols-2">
            @foreach ($groups as $group => $items)
                <x-ui.card border>
                    <x-ui.card.body>
                        <x-ui.card.title>{{ $group }}</x-ui.card.title>

                        <div class="mt-2 grid gap-3">
                            @foreach ($items as $item)
                                <a href="{{ url("/playground/{$item['slug']}") }}" class="group rounded-lg border border-base-300 p-3 transition-colors hover:bg-base-200">
                                    <span class="font-medium group-hover:underline">{{ str($item['slug'])->replace('-', ' ')->headline() }}</span>
                                    <span class="mt-1 block text-sm text-base-content/70">{{ $item['description'] }}</span>
                                </a>
                            @endforeach
                        </div>
                    </x-ui.card.body>
                </x-ui.card>
            @endforeach
        </div>
    </section>
</x-layouts.app>
