@props(['title' => config('starter.name')])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="{{ config('starter.default_theme') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="starter-theme-default" content="{{ config('starter.default_theme') }}">
        <meta name="starter-themes" content="{{ implode(',', config('starter.themes')) }}">

        <title>{{ $title }}</title>

        <script>
            (() => {
                const defaultTheme = document.querySelector('meta[name="starter-theme-default"]')?.content || 'light';

                try {
                    document.documentElement.dataset.theme = localStorage.getItem('starter-theme') || defaultTheme;
                } catch {
                    document.documentElement.dataset.theme = defaultTheme;
                }
            })();
        </script>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="min-h-screen bg-base-200 text-base-content antialiased">
        <div class="drawer lg:drawer-open">
            <input id="app-sidebar" type="checkbox" class="drawer-toggle">

            <div class="drawer-content flex min-h-screen flex-col">
                <header class="sticky top-0 z-30 border-b border-base-300 bg-base-100/95 backdrop-blur">
                    <div class="flex min-h-16 items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
                        <div class="flex min-w-0 items-center gap-3">
                            <label for="app-sidebar" class="btn btn-square btn-ghost relative lg:hidden" aria-label="Open navigation">
                                <span class="block h-0.5 w-5 rounded bg-current"></span>
                                <span class="absolute block h-0.5 w-5 -translate-y-1.5 rounded bg-current"></span>
                                <span class="absolute block h-0.5 w-5 translate-y-1.5 rounded bg-current"></span>
                            </label>

                            <a href="{{ url('/') }}" class="min-w-0">
                                <span class="block truncate text-sm font-semibold">{{ $title }}</span>
                                <span class="block truncate text-xs text-base-content/60">Laravel, Blade, Tailwind CSS 4, daisyUI</span>
                            </a>
                        </div>

                        <div class="flex items-center gap-2">
                            <a href="{{ url('/playground') }}" class="btn btn-sm btn-ghost hidden sm:inline-flex">Playground</a>
                            <x-ui.theme-controller />
                        </div>
                    </div>
                </header>

                <main class="flex-1">
                    {{ $slot }}
                </main>
            </div>

            <div class="drawer-side z-40">
                <label for="app-sidebar" aria-label="Close navigation" class="drawer-overlay"></label>
                <x-layouts.sidebar />
            </div>
        </div>
    </body>
</html>
