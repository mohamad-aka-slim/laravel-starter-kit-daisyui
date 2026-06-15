<x-layouts.app title="Card Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Card Playground"
            name="x-ui.card"
            description="Cards group content, media, titles, and actions. This is a compound component because DaisyUI cards are built from parts."
            docs="https://daisyui.com/components/card/"
        />

        <x-ui.panel title="Examples" description="Cards support figures, body, title, actions, sizes, borders, dashed style, side layout, and image-full background mode.">
            <div class="space-y-8">
                <x-playground.section title="Basic Cards">
                    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                        <x-ui.card>
                            <x-ui.card.figure src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                            <x-ui.card.body>
                                <x-ui.card.title>Card Title</x-ui.card.title>
                                <p>A card can include a figure, body, title, text, and actions.</p>
                                <x-ui.card.actions end>
                                    <x-ui.button variant="primary">Buy Now</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>

                        <x-ui.card border>
                            <x-ui.card.body>
                                <x-ui.badge size="xs" variant="warning">Most Popular</x-ui.badge>
                                <x-ui.card.title>Border Card</x-ui.card.title>
                                <p>Use border when the card needs stronger separation from the page.</p>
                            </x-ui.card.body>
                        </x-ui.card>

                        <x-ui.card dash>
                            <x-ui.card.body>
                                <x-ui.card.title>Dashed Card</x-ui.card.title>
                                <p>Useful for empty or configurable areas.</p>
                            </x-ui.card.body>
                        </x-ui.card>
                    </div>
                </x-playground.section>

                <x-playground.section title="Image Layouts">
                    <div class="grid gap-4 lg:grid-cols-2">
                        <x-ui.card side class="overflow-hidden">
                            <x-ui.card.figure class="w-48 bg-base-200">
                                <img class="h-full w-full object-cover" src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" alt="City" />
                            </x-ui.card.figure>
                            <x-ui.card.body>
                                <x-ui.card.title>Side Image</x-ui.card.title>
                                <p>The side modifier places media beside the body.</p>
                            </x-ui.card.body>
                        </x-ui.card>

                        <x-ui.card image-full class="min-h-72 overflow-hidden">
                            <x-ui.card.figure src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp" alt="Album" />
                            <x-ui.card.body>
                                <x-ui.card.title>Image Full</x-ui.card.title>
                                <p>The image-full modifier turns the figure into the card background.</p>
                                <x-ui.card.actions end>
                                    <x-ui.button variant="primary">Listen</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls card spacing and scale.'],
                        ['name' => 'border, dash, side, image-full', 'values' => 'boolean', 'description' => 'Applies DaisyUI card modifiers.'],
                        ['name' => 'shadow', 'values' => 'boolean', 'description' => 'Toggles the starter shadow utility.'],
                        ['name' => 'as', 'values' => 'div, article, section, ...', 'description' => 'Changes the wrapper element.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.card border&gt;</code></pre>
                        <pre data-prefix="2"><code>  &lt;x-ui.card.body&gt;</code></pre>
                        <pre data-prefix="3"><code>    &lt;x-ui.card.title&gt;Card Title&lt;/x-ui.card.title&gt;</code></pre>
                        <pre data-prefix="4"><code>    &lt;x-ui.card.actions end&gt;&lt;x-ui.button&gt;Save&lt;/x-ui.button&gt;&lt;/x-ui.card.actions&gt;</code></pre>
                        <pre data-prefix="5"><code>  &lt;/x-ui.card.body&gt;</code></pre>
                        <pre data-prefix="6"><code>&lt;/x-ui.card&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
