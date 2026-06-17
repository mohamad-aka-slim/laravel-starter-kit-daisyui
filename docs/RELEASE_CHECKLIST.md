# Release Checklist

Use this before tagging a starter release.

## Required Checks

```bash
php artisan test
npm run build
```

## Repository Checks

- [ ] `README.md` explains installation, playground, theme system, and roadmap.
- [ ] `CHANGELOG.md` has a section for the release.
- [ ] `LICENSE` exists.
- [ ] `CONTRIBUTING.md` exists.
- [ ] `SECURITY.md` exists.
- [ ] `composer.json` name, description, keywords, and license match the project.
- [ ] No local-only files are staged, such as `.env`, `vendor`, `node_modules`, `.phpunit.result.cache`, or `public/build`.

## Functional Checks

- [ ] `/` renders the starter surface.
- [ ] `/playground` renders the component catalog.
- [ ] Handwritten playground pages render.
- [ ] Generated daisyUI playground pages render.
- [ ] Theme switching works and persists in localStorage.
- [ ] Production build assets load after `npm run build`.

## Versioning

Suggested first release:

```text
v0.1.0
```

Suggested release title:

```text
Laravel DaisyUI Starter Kit v0.1.0
```

Suggested release notes:

```markdown
Initial preview release with Blade UI wrappers, daisyUI 5 theme setup, local theme persistence, and a 65-component playground catalog.
```
