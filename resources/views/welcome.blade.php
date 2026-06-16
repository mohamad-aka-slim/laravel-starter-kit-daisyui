<x-layouts.app>
    @php
        $groups = config('daisyui.groups', []);
        $componentTotal = collect($groups)->flatten(1)->count();
        $generatedDocs = count(config('daisyui.components', []));
        $handwrittenDocs = $componentTotal - $generatedDocs;
        $themeTotal = count(config('starter.themes', []));
        $featured = [
            ['slug' => 'buttons', 'label' => 'Buttons', 'class' => 'btn btn-primary'],
            ['slug' => 'cards', 'label' => 'Cards', 'class' => 'card bg-base-100'],
            ['slug' => 'drawers', 'label' => 'Drawers', 'class' => 'drawer'],
            ['slug' => 'ratings', 'label' => 'Ratings', 'class' => 'rating'],
            ['slug' => 'timelines', 'label' => 'Timelines', 'class' => 'timeline'],
            ['slug' => 'validators', 'label' => 'Validators', 'class' => 'validator'],
        ];
    @endphp

    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <div class="grid gap-6 lg:grid-cols-[1.35fr_0.85fr]">
            <section class="rounded-lg border border-base-300 bg-base-100 p-6 shadow-sm">
                <div class="flex flex-wrap items-center gap-2">
                    <x-ui.badge variant="primary">Laravel {{ Illuminate\Foundation\Application::VERSION }}</x-ui.badge>
                    <x-ui.badge variant="secondary">Tailwind CSS 4</x-ui.badge>
                    <x-ui.badge variant="accent">daisyUI 5</x-ui.badge>
                    <x-ui.badge variant="success">Blade-first</x-ui.badge>
                </div>

                <div class="mt-8 max-w-3xl">
                    <p class="text-sm font-semibold uppercase tracking-normal text-primary">{{ config('starter.name') }}</p>
                    <h1 class="mt-3 text-4xl font-bold leading-tight tracking-normal sm:text-5xl">
                        A complete daisyUI starter surface for Laravel Blade apps.
                    </h1>
                    <p class="mt-5 text-base leading-7 text-base-content/70">
                        This starter now ships with theme switching, a full component catalog, cloned daisyUI wrappers, generated playground documentation, and tests that keep the pages from drifting.
                    </p>
                </div>

                <div class="mt-8 flex flex-wrap gap-3">
                    <x-ui.button href="{{ url('/playground') }}" variant="primary">Open Playground</x-ui.button>
                    <x-ui.button href="{{ url('/playground/buttons') }}" outline>Browse Components</x-ui.button>
                    <x-ui.button href="https://daisyui.com/components/" variant="ghost">daisyUI Docs</x-ui.button>
                </div>

                <div class="mt-8 grid gap-3 sm:grid-cols-3">
                    <x-ui.stat label="daisyUI components" value="{{ $componentTotal }}" tone="primary" />
                    <x-ui.stat label="Enabled themes" value="{{ $themeTotal }}" tone="secondary" />
                    <x-ui.stat label="Generated docs" value="{{ $generatedDocs }}" tone="accent" />
                </div>
            </section>

            <section class="rounded-lg border border-base-300 bg-base-100 p-5 shadow-sm">
                <div class="flex items-center justify-between gap-3">
                    <div>
                        <h2 class="font-semibold">Starter Health</h2>
                        <p class="text-sm text-base-content/60">What is ready in this repo.</p>
                    </div>
                    <x-ui.status variant="success" size="lg" />
                </div>

                <div class="mt-5 space-y-4">
                    <div>
                        <div class="mb-2 flex justify-between text-sm">
                            <span>Component coverage</span>
                            <span>{{ $componentTotal }}/65</span>
                        </div>
                        <progress class="progress progress-primary w-full" value="{{ $componentTotal }}" max="65"></progress>
                    </div>

                    <div>
                        <div class="mb-2 flex justify-between text-sm">
                            <span>Generated docs</span>
                            <span>{{ $generatedDocs }}</span>
                        </div>
                        <progress class="progress progress-secondary w-full" value="{{ $generatedDocs }}" max="{{ $componentTotal }}"></progress>
                    </div>

                    <div>
                        <div class="mb-2 flex justify-between text-sm">
                            <span>Handwritten docs</span>
                            <span>{{ $handwrittenDocs }}</span>
                        </div>
                        <progress class="progress progress-accent w-full" value="{{ $handwrittenDocs }}" max="{{ $componentTotal }}"></progress>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="mockup-code text-sm">
                    <pre data-prefix="$"><code>php artisan test</code></pre>
                    <pre data-prefix=">"><code>20 tests passing</code></pre>
                    <pre data-prefix="$"><code>npm run build</code></pre>
                    <pre data-prefix=">"><code>vite build ready</code></pre>
                </div>
            </section>
        </div>

        <section class="grid gap-6 lg:grid-cols-[0.85fr_1.15fr]">
            <x-ui.panel title="Component Families" description="Jump directly into the same categories used by daisyUI.">
                <div class="grid gap-3 sm:grid-cols-2">
                    @foreach ($groups as $group => $items)
                        <a href="{{ url('/playground') }}#{{ str($group)->slug() }}" class="group rounded-lg border border-base-300 p-4 transition hover:border-primary/50 hover:bg-base-200">
                            <span class="flex items-center justify-between gap-3">
                                <span class="font-semibold group-hover:underline">{{ $group }}</span>
                                <span class="badge badge-primary badge-soft">{{ count($items) }}</span>
                            </span>
                            <span class="mt-2 block text-sm text-base-content/60">
                                {{ collect($items)->take(3)->pluck('slug')->map(fn ($slug) => str($slug)->replace('-', ' ')->headline())->implode(', ') }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </x-ui.panel>

            <x-ui.panel title="Featured Components" description="A quick sample of the cloned component surface.">
                <div class="grid gap-3 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach ($featured as $item)
                        <a href="{{ url("/playground/{$item['slug']}") }}" class="rounded-lg border border-base-300 p-4 transition hover:border-primary/50 hover:bg-base-200">
                            <span class="badge badge-outline">{{ $item['class'] }}</span>
                            <span class="mt-4 block font-semibold">{{ $item['label'] }}</span>
                            <span class="mt-1 block text-sm text-base-content/60">Examples, props, and Blade usage.</span>
                        </a>
                    @endforeach
                </div>
            </x-ui.panel>
        </section>

        <section class="grid gap-6 lg:grid-cols-3">
            <x-ui.panel title="Theme Preview" description="The active theme is controlled by daisyUI data-theme.">
                <div class="space-y-4">
                    <div class="flex flex-wrap gap-2">
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-accent">Accent</span>
                        <span class="badge badge-info">Info</span>
                    </div>

                    <div class="join w-full">
                        <button class="btn join-item flex-1">Draft</button>
                        <button class="btn btn-active join-item flex-1">Preview</button>
                        <button class="btn btn-primary join-item flex-1">Ship</button>
                    </div>

                    <label class="label cursor-pointer justify-start gap-3">
                        <input type="checkbox" checked class="toggle toggle-primary">
                        <span class="label-text">Persist selected theme</span>
                    </label>
                </div>
            </x-ui.panel>

            <x-ui.panel title="Docs Workflow" description="Every generated page follows the same documentation shape.">
                <ul class="steps steps-vertical">
                    <li class="step step-primary">Preview</li>
                    <li class="step step-primary">Examples</li>
                    <li class="step step-primary">Props</li>
                    <li class="step">Usage</li>
                </ul>
            </x-ui.panel>

            <x-ui.panel title="Project Files" description="The places you will edit most often.">
                <div class="space-y-3 text-sm">
                    <div class="rounded-lg bg-base-200 p-3">
                        <code>config/daisyui.php</code>
                        <p class="mt-1 text-base-content/60">Component docs, groups, props, and examples.</p>
                    </div>
                    <div class="rounded-lg bg-base-200 p-3">
                        <code>resources/views/components/ui</code>
                        <p class="mt-1 text-base-content/60">Blade wrappers for daisyUI classes and parts.</p>
                    </div>
                    <div class="rounded-lg bg-base-200 p-3">
                        <code>resources/views/playground</code>
                        <p class="mt-1 text-base-content/60">Catalog and documentation pages.</p>
                    </div>
                </div>
            </x-ui.panel>
        </section>
    </section>
</x-layouts.app>
