@php
    $groups = config('daisyui.groups', []);
    $isPlayground = request()->is('playground*');
@endphp

<aside {{ $attributes->class('min-h-full w-72 border-r border-base-300 bg-base-100') }}>
    <div class="flex h-full flex-col">
        <div class="border-b border-base-300 p-4">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <span class="grid size-10 shrink-0 place-items-center rounded-lg bg-primary font-bold text-primary-content">L</span>
                <span class="min-w-0">
                    <span class="block truncate text-sm font-semibold">{{ config('starter.name') }}</span>
                    <span class="block truncate text-xs text-base-content/60">Blade + daisyUI</span>
                </span>
            </a>
        </div>

        <nav class="flex-1 overflow-y-auto p-3">
            <ul class="menu menu-sm gap-1">
                <li>
                    <a href="{{ url('/') }}" @class(['active' => request()->is('/')])>
                        <span class="status status-primary"></span>
                        Welcome
                    </a>
                </li>
                <li>
                    <a href="{{ url('/playground') }}" @class(['active' => request()->is('playground')])>
                        <span class="status status-secondary"></span>
                        Component Playground
                    </a>
                </li>
            </ul>

            <div class="divider my-3 text-xs">Components</div>

            <div class="space-y-2">
                @foreach ($groups as $group => $items)
                    @php
                        $groupHasActive = collect($items)->contains(fn ($item) => request()->is("playground/{$item['slug']}"));
                    @endphp

                    <details @if ($groupHasActive || ($isPlayground && $loop->first)) open @endif class="group rounded-lg border border-base-300 bg-base-100">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-3 px-3 py-2 text-sm font-semibold">
                            <span>{{ $group }}</span>
                            <span class="badge badge-sm badge-outline">{{ count($items) }}</span>
                        </summary>

                        <ul class="menu menu-xs gap-1 border-t border-base-300 p-2">
                            @foreach ($items as $item)
                                @php
                                    $meta = config("daisyui.components.{$item['slug']}");
                                    $componentName = $meta['name'] ?? 'x-ui.' . str($item['slug'])->singular();
                                @endphp

                                <li>
                                    <a href="{{ url("/playground/{$item['slug']}") }}" @class(['active' => request()->is("playground/{$item['slug']}")])>
                                        <span class="truncate">{{ str($item['slug'])->replace('-', ' ')->headline() }}</span>
                                        <code class="ml-auto hidden text-[0.65rem] opacity-50 xl:inline">{{ $componentName }}</code>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </details>
                @endforeach
            </div>
        </nav>

        <div class="border-t border-base-300 p-4">
            <div class="flex items-center justify-between gap-3 text-xs text-base-content/60">
                <span>{{ collect($groups)->flatten(1)->count() }} components</span>
                <span>{{ count(config('starter.themes', [])) }} themes</span>
            </div>
        </div>
    </div>
</aside>
