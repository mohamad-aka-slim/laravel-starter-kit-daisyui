# laravel-starter-kit-daisyui

A Blade-first Laravel starter for building application interfaces with Tailwind CSS 4 and DaisyUI.

This repository is intentionally a starter first. Once the component names, config shape, and theme behavior prove useful, the next step is a Composer package. An installer command should come later, after the defaults are stable enough to automate.

## Stack

- Laravel application scaffold
- Blade-first UI components
- Tailwind CSS 4 CSS entry
- DaisyUI plugin configured in `resources/css/app.css`
- DaisyUI theme switching through `data-theme` and `theme-controller`
- Local theme persistence through `localStorage`

## Starter Structure

- `config/starter.php` contains the starter name, default theme, and enabled DaisyUI theme list.
- `resources/views/components/layouts/app.blade.php` provides the base app shell.
- `resources/views/components/ui/theme-controller.blade.php` renders the DaisyUI theme controller.
- `resources/views/components/ui/panel.blade.php` and `resources/views/components/ui/stat.blade.php` are small starter components used by the welcome screen.
- `resources/js/app.js` applies, persists, and syncs the selected theme.
- `resources/css/app.css` imports Tailwind CSS 4 and registers DaisyUI with the known theme list.

## Development

Install dependencies:

```bash
composer install
npm install
```

Run the app:

```bash
composer run dev
```

Build frontend assets:

```bash
npm run build
```

Run tests:

```bash
php artisan test
```

## Theme Configuration

The starter defaults to the `light` DaisyUI theme and enables the standard DaisyUI theme set from `config/starter.php`.

You can override the default theme with:

```env
STARTER_DEFAULT_THEME=dark
```

The selected browser theme is stored under `starter-theme` in `localStorage`. User profile persistence can be added later without changing the component API.

## Roadmap

1. Stabilize the starter repository through real app screens and component usage.
2. Extract the reusable structure into a Composer package once naming and config settle.
3. Add an optional installer command after the choices are stable.

Optional adapters for Livewire or Inertia can be added after the Blade-first layer is useful on its own.
