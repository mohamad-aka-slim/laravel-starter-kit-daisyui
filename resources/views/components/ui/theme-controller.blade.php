@props([
    'themes' => config('starter.themes'),
    'current' => config('starter.default_theme'),
])

<div class="dropdown dropdown-end">
    <button type="button" tabindex="0" class="btn btn-sm btn-ghost" aria-label="Choose theme">
        <span class="hidden sm:inline">Theme</span>
        <span class="size-2 rounded-full bg-primary"></span>
    </button>

    <ul tabindex="0" class="menu dropdown-content z-10 mt-3 max-h-80 w-56 overflow-auto rounded-lg border border-base-300 bg-base-100 p-2 shadow-xl">
        @foreach ($themes as $theme)
            <li>
                <label class="gap-3">
                    <input
                        type="radio"
                        name="starter-theme"
                        class="theme-controller radio radio-xs"
                        value="{{ $theme }}"
                        @checked($theme === $current)
                    >
                    <span>{{ str($theme)->headline() }}</span>
                </label>
            </li>
        @endforeach
    </ul>
</div>
