<x-layouts.app title="Card Playground">
    <section class="mx-auto w-full max-w-7xl space-y-6 px-4 py-6 sm:px-6 lg:px-8">
        <x-ui.panel title="Card" description="Compound Blade components backed by DaisyUI card classes.">
            <div class="space-y-8">
                <div>
                    <h2 class="mb-3 text-sm font-semibold">Basic Card</h2>
                    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                        <x-ui.card>
                            <x-ui.card.figure src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                            <x-ui.card.body>
                                <x-ui.card.title>Card Title</x-ui.card.title>
                                <p>A card component has a figure, a body part, and inside body there are title and actions parts.</p>
                                <x-ui.card.actions end>
                                    <x-ui.button variant="primary">Buy Now</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>

                        <x-ui.card border>
                             <x-ui.card.figure src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                            <x-ui.card.body>

                                <x-ui.badge size="xs" variant="warning">Most Popular</x-ui.badge>
                                <div class="flex items-start justify-between gap-4">
                                    <x-ui.card.title as="h3" class="text-3xl font-bold">Premium</x-ui.card.title>
                                    <span class="text-xl">$29/mo</span>
                                </div>
                                <ul class="mt-4 space-y-2 text-sm">
                                    <li>High-resolution image generation</li>
                                    <li>Customizable style templates</li>
                                    <li>Batch processing capabilities</li>
                                </ul>
                                <x-ui.card.actions class="mt-4">
                                    <x-ui.button variant="primary" block>Subscribe</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>

                        <x-ui.card dash>

                            <x-ui.card.body>
                                <x-ui.card.title>Dashed Card</x-ui.card.title>
                                <p>Use dash when the card is temporary, empty, or waiting for configuration.</p>
                                <x-ui.card.actions end>
                                    <x-ui.button outline>Configure</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Sizes</h2>
                    <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-5">
                        @foreach (['xs' => 'Xsmall', 'sm' => 'Small', 'md' => 'Medium', 'lg' => 'Large', 'xl' => 'Xlarge'] as $size => $label)
                            <x-ui.card :size="$size" border>
                                <x-ui.card.body>
                                    <x-ui.card.title>{{ $label }}</x-ui.card.title>
                                    <p>Card size controls the inner spacing and title scale.</p>
                                </x-ui.card.body>
                            </x-ui.card>
                        @endforeach
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Image Modes</h2>
                    <div class="grid gap-4 lg:grid-cols-2">
                        <x-ui.card side class="overflow-hidden">
                            <x-ui.card.figure class="w-48 bg-base-200">
                                <img class="h-full w-full object-cover" src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" alt="City" />
                            </x-ui.card.figure>
                            <x-ui.card.body>
                                <x-ui.card.title>Side Image</x-ui.card.title>
                                <p>The `card-side` modifier moves the figure beside the body.</p>
                                <x-ui.card.actions end>
                                    <x-ui.button variant="secondary">Open</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>

                        <x-ui.card image-full class="min-h-72 overflow-hidden">
                            <x-ui.card.figure src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp" alt="Album" />
                            <x-ui.card.body>
                                <x-ui.card.title>Image Full</x-ui.card.title>
                                <p>The `image-full` modifier turns the figure into a card background.</p>
                                <x-ui.card.actions end>
                                    <x-ui.button variant="primary">Listen</x-ui.button>
                                </x-ui.card.actions>
                            </x-ui.card.body>
                        </x-ui.card>
                    </div>
                </div>

                <div>
                    <h2 class="mb-3 text-sm font-semibold">Blade Usage</h2>
                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>&lt;x-ui.card border&gt;</code></pre>
                        <pre data-prefix="2"><code>  &lt;x-ui.card.body&gt;</code></pre>
                        <pre data-prefix="3"><code>    &lt;x-ui.card.title&gt;Card Title&lt;/x-ui.card.title&gt;</code></pre>
                        <pre data-prefix="4"><code>    &lt;p&gt;Card content&lt;/p&gt;</code></pre>
                        <pre data-prefix="5"><code>    &lt;x-ui.card.actions end&gt;</code></pre>
                        <pre data-prefix="6"><code>      &lt;x-ui.button variant="primary"&gt;Save&lt;/x-ui.button&gt;</code></pre>
                        <pre data-prefix="7"><code>    &lt;/x-ui.card.actions&gt;</code></pre>
                        <pre data-prefix="8"><code>  &lt;/x-ui.card.body&gt;</code></pre>
                        <pre data-prefix="9"><code>&lt;/x-ui.card&gt;</code></pre>
                    </div>
                </div>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
