<x-layouts.app>
    <section class="mx-auto grid w-full max-w-7xl gap-6 px-4 py-6 sm:px-6 lg:grid-cols-[1.4fr_0.8fr] lg:px-8">
        <x-ui.panel title="Starter Surface" description="A Blade-first Laravel starter with DaisyUI themes controlled from one config file.">
            <div class="grid gap-5 lg:grid-cols-[1fr_18rem]">
                <div class="space-y-5">
                    <div class="rounded-lg bg-base-200 p-5">
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="badge badge-primary">Laravel {{ Illuminate\Foundation\Application::VERSION }}</span>
                            <span class="badge badge-secondary">Tailwind CSS 4</span>
                            <span class="badge badge-accent">DaisyUI</span>
                        </div>

                        <h1 class="mt-5 max-w-2xl text-3xl font-bold leading-tight sm:text-4xl">
                            A starter repo for building Laravel interfaces with Blade components and DaisyUI themes.
                        </h1>

                        <p class="mt-4 max-w-2xl text-base text-base-content/70">
                            The first layer is intentionally small: CSS plugin setup, theme persistence, reusable Blade components, and a visible page that makes the structure easy to judge before extracting a package.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-3">
                            <x-ui.button href="https://laravel.com/docs" variant="primary">Laravel Docs</x-ui.button>
                            <x-ui.button href="https://daisyui.com/docs/themes/" outline>DaisyUI Themes</x-ui.button>
                        </div>
                    </div>

                    <div class="grid gap-3 sm:grid-cols-3">
                        <x-ui.stat label="Blade components" value="4" tone="primary" />
                        <x-ui.stat label="Enabled themes" value="{{ count(config('starter.themes')) }}" tone="secondary" />
                        <x-ui.stat label="Starter mode" value="Repo" tone="accent" />
                    </div>
                </div>

                <div class="rounded-lg border border-base-300 bg-base-100 p-4">
                    <div class="mockup-code text-sm">
                        <pre data-prefix="1"><code>@import 'tailwindcss';</code></pre>
                        <pre data-prefix="2"><code>@plugin 'daisyui';</code></pre>
                        <pre data-prefix="3"><code>data-theme="light"</code></pre>
                    </div>

                    <div class="mt-4 space-y-3">
                        <progress class="progress progress-primary w-full" value="45" max="100"></progress>
                        <progress class="progress progress-secondary w-full" value="65" max="100"></progress>
                        <progress class="progress progress-accent w-full" value="85" max="100"></progress>
                    </div>
                </div>
            </div>
        </x-ui.panel>

        <div class="space-y-6">
            <x-ui.panel title="Architecture">
                <div class="space-y-4">
                    <div class="flex gap-3">
                        <span class="mt-1 size-3 shrink-0 rounded-full bg-primary"></span>
                        <div>
                            <p class="font-medium">Laravel layer</p>
                            <p class="text-sm text-base-content/70">Application scaffold, Blade components, and starter config. Package provider comes later.</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <span class="mt-1 size-3 shrink-0 rounded-full bg-secondary"></span>
                        <div>
                            <p class="font-medium">Frontend layer</p>
                            <p class="text-sm text-base-content/70">Tailwind CSS 4 entry, DaisyUI plugin, known theme list, and data-theme switching.</p>
                        </div>
                    </div>

                    <div class="flex gap-3">
                        <span class="mt-1 size-3 shrink-0 rounded-full bg-accent"></span>
                        <div>
                            <p class="font-medium">Persistence</p>
                            <p class="text-sm text-base-content/70">Theme preference is stored in localStorage, ready for user profile persistence later.</p>
                        </div>
                    </div>
                </div>
            </x-ui.panel>

            <x-ui.panel title="Component Preview">
                <div class="space-y-4">
                    <div class="alert alert-info">
                        <span>DaisyUI classes are available directly in Blade.</span>
                    </div>

                    <div class="join w-full">
                        <x-ui.button class="join-item flex-1">Draft</x-ui.button>
                        <x-ui.button class="join-item flex-1" active>Preview</x-ui.button>
                        <x-ui.button class="join-item flex-1" variant="primary">Ship</x-ui.button>
                    </div>

                    <div class="form-control">
                        <label class="label cursor-pointer justify-start gap-3">
                            <input type="checkbox" checked class="toggle toggle-primary">
                            <span class="label-text">Theme persistence</span>
                        </label>
                    </div>
                </div>
            </x-ui.panel>
        </div>
    </section>
</x-layouts.app>
