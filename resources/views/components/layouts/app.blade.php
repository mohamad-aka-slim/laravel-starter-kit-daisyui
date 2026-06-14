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
        <div class="min-h-screen">
            <header class="border-b border-base-300 bg-base-100">
                <div class="mx-auto flex min-h-16 w-full max-w-7xl items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">
                    <a href="{{ url('/') }}" class="flex min-w-0 items-center gap-3">
                        <span class="grid size-10 shrink-0 place-items-center rounded-lg bg-primary text-primary-content font-bold">L</span>
                        <span class="min-w-0">
                            <span class="block truncate text-sm font-semibold">{{ config('starter.name') }}</span>
                            <span class="block truncate text-xs text-base-content/60">Blade, Tailwind CSS 4, DaisyUI</span>
                        </span>
                    </a>

                    <x-ui.theme-controller />
                </div>
            </header>

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
