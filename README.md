# Laravel DaisyUI Starter Kit

A Blade-first Laravel starter for building application interfaces with Tailwind CSS 4 and daisyUI 5.

This repository includes a full daisyUI component playground, Blade wrappers for the daisyUI component set, theme switching, and documentation-style examples that are ready to browse locally or share in a GitHub pull request.

## What Is Included

- Laravel application scaffold with Blade views.
- Tailwind CSS 4 and daisyUI configured in `resources/css/app.css`.
- Theme switching with daisyUI `theme-controller`, `data-theme`, and local browser persistence.
- Blade UI components under `resources/views/components/ui`.
- A `/playground` catalog covering all 65 daisyUI components.
- Generated documentation pages for the cloned daisyUI components.
- Handwritten playground pages for the starter's original components.
- Feature tests that verify the starter surface and all playground routes.

## Component Playground

Open the playground at:

```text
/playground
```

The playground index groups components by the same families used by daisyUI:

- Actions
- Data Display
- Navigation
- Feedback
- Data Input
- Layout
- Mockup

Each generated playground page includes:

- live examples,
- raw daisyUI markup,
- Blade wrapper usage,
- prop documentation,
- a link back to the official daisyUI docs.

## Key Files

- `config/starter.php` controls the starter name, default theme, and enabled daisyUI themes.
- `config/daisyui.php` defines the 65-component playground catalog, component metadata, props, and generated examples.
- `resources/views/playground/index.blade.php` renders the component catalog.
- `resources/views/playground/generated.blade.php` renders generated documentation pages.
- `resources/views/components/ui` contains the Blade component wrappers.
- `resources/js/app.js` applies, persists, and syncs selected themes.

## Installation

Install PHP and Node dependencies:

```bash
composer install
npm install
```

Copy the environment file if needed:

```bash
cp .env.example .env
php artisan key:generate
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

The starter defaults to the `light` daisyUI theme.

Set another default theme with:

```env
STARTER_DEFAULT_THEME=dark
```

The selected browser theme is stored under `starter-theme` in `localStorage`. Server-side user theme persistence can be added later without changing the component API.

## Pull Request Summary

Suggested GitHub PR title:

```text
Add full daisyUI Blade component playground
```

Suggested PR body:

```markdown
## Summary
- add Blade wrappers for the remaining daisyUI components
- add a 65-component playground catalog grouped by daisyUI category
- add generated documentation pages with examples, props, and usage snippets
- add route coverage tests for every playground page

## Verification
- php artisan test
- npm run build
```

## Roadmap

1. Stabilize the Blade component APIs through real application screens.
2. Add more handwritten examples for high-use components where custom guidance is useful.
3. Extract the reusable structure into a Composer package after naming and config settle.
4. Add an installer command once the defaults are stable enough to automate.
