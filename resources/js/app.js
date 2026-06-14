const storageKey = 'starter-theme';

const getMeta = (name) => document.querySelector(`meta[name="${name}"]`)?.content;

const availableThemes = (getMeta('starter-themes') || '')
    .split(',')
    .map((theme) => theme.trim())
    .filter(Boolean);

const defaultTheme = getMeta('starter-theme-default') || availableThemes[0] || 'light';

const normalizeTheme = (theme) => (availableThemes.includes(theme) ? theme : defaultTheme);

const applyTheme = (theme) => {
    const nextTheme = normalizeTheme(theme);

    document.documentElement.dataset.theme = nextTheme;

    document.querySelectorAll('.theme-controller').forEach((control) => {
        control.checked = control.value === nextTheme;
    });
};

let storedTheme = defaultTheme;

try {
    storedTheme = localStorage.getItem(storageKey) || defaultTheme;
} catch {
    storedTheme = defaultTheme;
}

applyTheme(storedTheme);

document.addEventListener('change', (event) => {
    const control = event.target.closest?.('.theme-controller');

    if (!control) {
        return;
    }

    const nextTheme = normalizeTheme(control.value);

    try {
        localStorage.setItem(storageKey, nextTheme);
    } catch {
        // Theme persistence is progressive enhancement; data-theme still updates.
    }

    applyTheme(nextTheme);
});

window.addEventListener('storage', (event) => {
    if (event.key === storageKey) {
        applyTheme(event.newValue || defaultTheme);
    }
});
