# Components

The starter exposes Blade components under `resources/views/components/ui`.

The intended API style is:

```blade
<x-ui.button variant="primary">Save</x-ui.button>
<x-ui.input name="email" variant="primary" />
<x-ui.card border>
    <x-ui.card.body>
        <x-ui.card.title>Title</x-ui.card.title>
    </x-ui.card.body>
</x-ui.card>
```

## Principles

- Use Blade props for common choices.
- Let `class` pass through `$attributes` for local layout tweaks.
- Keep daisyUI class names inside the component where possible.
- Use compound components for daisyUI components that have required child structure.
- Document every component in `/playground`.

## Important Playground Routes

- `/playground` - catalog index
- `/playground/buttons`
- `/playground/forms`
- `/playground/modals`
- `/playground/tables`

Generated routes are backed by `config/daisyui.php` and render through `resources/views/playground/generated.blade.php`.
