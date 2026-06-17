# Contributing

Thanks for helping improve Laravel DaisyUI Starter Kit.

## Local Setup

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Run the app:

```bash
composer run dev
```

Run checks:

```bash
php artisan test
npm run build
```

## Component Guidelines

- Prefer Blade props over exposing raw daisyUI classes directly.
- Keep daisyUI as the implementation detail behind `x-ui.*` components.
- Match daisyUI naming where possible: `variant`, `size`, `disabled`, `checked`, `active`, `open`.
- Add or update a playground example for every component API change.
- Add tests for every new playground route or generated catalog route.
- Keep component files small. Use compound components for structured daisyUI components like card, modal, dropdown, navbar, and tabs.

## Pull Request Checklist

- [ ] The component API is documented in the playground.
- [ ] The playground page includes examples and props.
- [ ] `php artisan test` passes.
- [ ] `npm run build` passes.
- [ ] README or changelog is updated when user-facing behavior changes.
