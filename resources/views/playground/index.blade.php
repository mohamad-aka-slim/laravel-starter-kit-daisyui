<x-layouts.app title="Component Playground">
    @php
        $groups = config('daisyui.groups');
        $total = collect($groups)->flatten(1)->count();
        $generated = count(config('daisyui.components'));
        $handwritten = $total - $generated;
    @endphp

    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <div class="rounded-lg border border-base-300 bg-base-100 p-6 shadow-sm">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-end lg:justify-between">
                <div class="max-w-3xl">
                    <span class="badge badge-primary badge-soft">DaisyUI Blade Kit</span>
                    <h1 class="mt-3 text-3xl font-bold tracking-normal">Component Playground</h1>
                    <p class="mt-3 text-base text-base-content/70">
                        Browse every daisyUI component included in this starter. Each page documents props, examples, raw daisyUI markup, and the Blade wrapper usage.
                    </p>
                </div>

                <div class="stats stats-vertical border border-base-300 bg-base-200 shadow-sm sm:stats-horizontal">
                    <div class="stat px-5 py-4">
                        <div class="stat-title">Components</div>
                        <div class="stat-value text-primary">{{ $total }}</div>
                    </div>
                    <div class="stat px-5 py-4">
                        <div class="stat-title">Generated docs</div>
                        <div class="stat-value text-secondary">{{ $generated }}</div>
                    </div>
                    <div class="stat px-5 py-4">
                        <div class="stat-title">Handwritten docs</div>
                        <div class="stat-value text-accent">{{ $handwritten }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex flex-wrap gap-2">
                @foreach ($groups as $group => $items)
                    <a href="#{{ str($group)->slug() }}" class="btn btn-sm btn-outline">
                        {{ $group }}
                        <span class="badge badge-sm">{{ count($items) }}</span>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="grid gap-6">
            @foreach ($groups as $group => $items)
                <section id="{{ str($group)->slug() }}" class="scroll-mt-6 rounded-lg border border-base-300 bg-base-100 shadow-sm">
                    <div class="flex flex-wrap items-center justify-between gap-3 border-b border-base-300 px-5 py-4">
                        <div>
                            <h2 class="text-lg font-semibold">{{ $group }}</h2>
                            <p class="text-sm text-base-content/60">{{ count($items) }} components</p>
                        </div>

                        <span class="badge badge-neutral badge-outline">{{ $loop->iteration }}/{{ count($groups) }}</span>
                    </div>

                    <div class="grid gap-3 p-5 sm:grid-cols-2 xl:grid-cols-3">
                        @foreach ($items as $item)
                            @php
                                $componentMeta = config("daisyui.components.{$item['slug']}");
                                $isGenerated = (bool) $componentMeta;
                                $componentName = $componentMeta['name'] ?? 'x-ui.' . str($item['slug'])->singular();
                            @endphp

                            <a
                                href="{{ url("/playground/{$item['slug']}") }}"
                                class="group flex h-full flex-col justify-between rounded-lg border border-base-300 bg-base-100 p-4 transition hover:border-primary/50 hover:bg-base-200"
                            >
                                <span>
                                    <span class="flex items-start justify-between gap-3">
                                        <span class="font-semibold group-hover:underline">{{ str($item['slug'])->replace('-', ' ')->headline() }}</span>
                                        <span @class(['badge badge-sm', 'badge-primary badge-soft' => $isGenerated, 'badge-accent badge-soft' => ! $isGenerated])>
                                            {{ $isGenerated ? 'generated' : 'custom' }}
                                        </span>
                                    </span>
                                    <span class="mt-2 block text-sm leading-6 text-base-content/70">{{ $item['description'] }}</span>
                                </span>

                                <span class="mt-4 flex items-center justify-between text-xs text-base-content/50">
                                    <code>{{ $componentName }}</code>
                                    <span>Open</span>
                                </span>
                            </a>
                        @endforeach
                    </div>
                </section>
            @endforeach
        </div>
    </section>
</x-layouts.app>
