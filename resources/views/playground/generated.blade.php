<x-layouts.app :title="$meta['title'] . ' Playground'">
    @php
        $examples = $meta['examples'] ?? [
            [
                'title' => 'Default',
                'description' => $meta['description'],
                'preview' => $meta['preview'],
                'code' => $meta['usage'],
            ],
            [
                'title' => 'DaisyUI Markup',
                'description' => 'The same component can still be composed with raw daisyUI classes when you need full markup control.',
                'preview' => $meta['preview'],
                'code' => $meta['preview'],
            ],
        ];
    @endphp

    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            :title="$meta['title']"
            :name="$meta['name']"
            :description="$meta['description']"
            :docs="$meta['docs']"
        />

        <x-ui.panel title="Examples" description="Generated from the full daisyUI component map for this starter kit.">
            <div class="space-y-8">
                @foreach ($examples as $example)
                    <x-playground.section
                        :title="$example['title']"
                        :description="$example['description'] ?? null"
                    >
                        <div class="grid gap-4 xl:grid-cols-[minmax(0,1fr)_minmax(22rem,0.9fr)]">
                            <div class="overflow-x-auto rounded-lg border border-base-300 bg-base-100 p-5">
                                {!! $example['preview'] !!}
                            </div>

                            <x-playground.code>
                                @foreach (explode("\n", trim($example['code'])) as $line)
                                    <pre data-prefix="{{ $loop->iteration }}"><code>{{ $line }}</code></pre>
                                @endforeach
                            </x-playground.code>
                        </div>
                    </x-playground.section>
                @endforeach

                <x-playground.section title="Props">
                    <x-playground.props :items="$meta['props']" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>{{ $meta['usage'] }}</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
