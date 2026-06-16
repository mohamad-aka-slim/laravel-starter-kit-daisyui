<?php

return [
    'groups' => [
        'Actions' => [
            ['slug' => 'buttons', 'description' => 'Actions, links, loading states, shapes, and sizes.'],
            ['slug' => 'dropdowns', 'description' => 'Trigger and content menus with side and alignment modifiers.'],
            ['slug' => 'fabs', 'description' => 'Floating action buttons and speed dial actions.'],
            ['slug' => 'modals', 'description' => 'Dialog and checkbox controlled overlays.'],
            ['slug' => 'swaps', 'description' => 'Toggle between on and off content.'],
            ['slug' => 'theme-controllers', 'description' => 'Theme radio and checkbox controls.'],
        ],
        'Data Display' => [
            ['slug' => 'accordions', 'description' => 'One-open-at-a-time disclosure groups.'],
            ['slug' => 'avatars', 'description' => 'Images, placeholders, and online/offline status indicators.'],
            ['slug' => 'badges', 'description' => 'Short labels for status, metadata, and categories.'],
            ['slug' => 'cards', 'description' => 'Compound content containers with figures, bodies, titles, and actions.'],
            ['slug' => 'carousels', 'description' => 'Scrollable content and image tracks.'],
            ['slug' => 'chat-bubbles', 'description' => 'Conversation rows with avatars, metadata, and bubbles.'],
            ['slug' => 'collapses', 'description' => 'Independent show and hide content blocks.'],
            ['slug' => 'countdowns', 'description' => 'Animated numeric counters.'],
            ['slug' => 'diffs', 'description' => 'Resizable before and after comparisons.'],
            ['slug' => 'hover-3d', 'description' => '3D tilt wrappers for non-interactive content.'],
            ['slug' => 'hover-galleries', 'description' => 'Image galleries revealed by horizontal hover zones.'],
            ['slug' => 'kbds', 'description' => 'Keyboard shortcuts and key labels.'],
            ['slug' => 'lists', 'description' => 'Structured rows for compact repeated content.'],
            ['slug' => 'stats', 'description' => 'Numbers, labels, descriptions, and actions.'],
            ['slug' => 'statuses', 'description' => 'Small status dots with semantic colors and sizes.'],
            ['slug' => 'tables', 'description' => 'Responsive tables with zebra and pinned row/column modifiers.'],
            ['slug' => 'text-rotates', 'description' => 'Looping animated words and phrases.'],
            ['slug' => 'timelines', 'description' => 'Chronological events in vertical or horizontal layouts.'],
        ],
        'Navigation' => [
            ['slug' => 'breadcrumbs', 'description' => 'Hierarchical page location links.'],
            ['slug' => 'docks', 'description' => 'Bottom navigation bars.'],
            ['slug' => 'links', 'description' => 'Styled links and semantic link colors.'],
            ['slug' => 'menus', 'description' => 'Vertical and horizontal menu lists.'],
            ['slug' => 'navbars', 'description' => 'Start, center, and end navigation regions.'],
            ['slug' => 'paginations', 'description' => 'Join-based page navigation controls.'],
            ['slug' => 'steps', 'description' => 'Step indicators for flows and progress.'],
            ['slug' => 'tabs', 'description' => 'Tabbed navigation with box, border, and lift styles.'],
        ],
        'Feedback' => [
            ['slug' => 'alerts', 'description' => 'Status messages with colors, layout modes, and icons.'],
            ['slug' => 'loadings', 'description' => 'Loading indicators and animation styles.'],
            ['slug' => 'progresses', 'description' => 'Progress bars with semantic variants.'],
            ['slug' => 'radial-progresses', 'description' => 'Circular progress meters.'],
            ['slug' => 'skeletons', 'description' => 'Loading placeholders for cards and lists.'],
            ['slug' => 'toasts', 'description' => 'Positioned alert stacks for transient feedback.'],
            ['slug' => 'tooltips', 'description' => 'Context hints with positions, colors, and open state.'],
        ],
        'Data Input' => [
            ['slug' => 'calendars', 'description' => 'Native date inputs and supported calendar library classes.'],
            ['slug' => 'checkboxes', 'description' => 'Boolean inputs with color, size, checked, and disabled states.'],
            ['slug' => 'fieldsets', 'description' => 'Form grouping with legends, labels, and hints.'],
            ['slug' => 'file-inputs', 'description' => 'File upload controls with accept and multiple options.'],
            ['slug' => 'filters', 'description' => 'Radio-button filters with reset behavior.'],
            ['slug' => 'labels', 'description' => 'Input labels, including floating labels.'],
            ['slug' => 'radios', 'description' => 'Single-choice inputs grouped by name.'],
            ['slug' => 'ranges', 'description' => 'Range sliders with values, steps, sizes, and colors.'],
            ['slug' => 'ratings', 'description' => 'Radio-based star ratings.'],
            ['slug' => 'selects', 'description' => 'Select menus with placeholder, multiple, and selected states.'],
            ['slug' => 'inputs', 'description' => 'Text fields, wrapper labels, validation colors, and states.'],
            ['slug' => 'textareas', 'description' => 'Multiline text controls with sizes and semantic colors.'],
            ['slug' => 'toggles', 'description' => 'Switch controls for binary settings.'],
            ['slug' => 'validators', 'description' => 'Native validation states and hints.'],
        ],
        'Layout' => [
            ['slug' => 'dividers', 'description' => 'Horizontal or vertical separators with labels.'],
            ['slug' => 'drawers', 'description' => 'Responsive off-canvas sidebars.'],
            ['slug' => 'footers', 'description' => 'Footer layouts for links, branding, and metadata.'],
            ['slug' => 'heroes', 'description' => 'Large feature sections with centered content and optional overlays.'],
            ['slug' => 'indicators', 'description' => 'Badges and markers anchored to another element.'],
            ['slug' => 'joins', 'description' => 'Grouped controls with joined borders.'],
            ['slug' => 'masks', 'description' => 'Crop images or content into common shapes.'],
            ['slug' => 'stacks', 'description' => 'Layered items arranged on top of each other.'],
        ],
        'Mockup' => [
            ['slug' => 'browser-mockups', 'description' => 'Browser-frame content previews.'],
            ['slug' => 'code-mockups', 'description' => 'Terminal and code block mockups.'],
            ['slug' => 'phone-mockups', 'description' => 'Phone-frame content previews.'],
            ['slug' => 'window-mockups', 'description' => 'Desktop window-frame content previews.'],
        ],
    ],

    'components' => [
        'accordions' => [
            'title' => 'Accordion',
            'name' => 'x-ui.accordion',
            'docs' => 'https://daisyui.com/components/accordion/',
            'description' => 'Accordion uses the collapse parts with radio inputs or details elements so only one item in a named group stays open.',
            'preview' => <<<'HTML'
<div class="space-y-2">
    <div class="collapse collapse-arrow bg-base-100 border border-base-300">
        <input type="radio" name="demo-accordion" checked>
        <div class="collapse-title font-semibold">How do I create an account?</div>
        <div class="collapse-content text-sm">Click sign up and follow the registration flow.</div>
    </div>
    <div class="collapse collapse-arrow bg-base-100 border border-base-300">
        <input type="radio" name="demo-accordion">
        <div class="collapse-title font-semibold">Can I change my plan later?</div>
        <div class="collapse-content text-sm">Yes, billing settings can be changed at any time.</div>
    </div>
</div>
HTML,
            'props' => [
                ['name' => 'title', 'values' => 'string', 'description' => 'Text rendered in the collapse title.'],
                ['name' => 'name', 'values' => 'string', 'description' => 'Radio or details group name for one-open behavior.'],
                ['name' => 'checked, open', 'values' => 'boolean', 'description' => 'Controls initial and forced open state.'],
                ['name' => 'icon', 'values' => 'arrow, plus', 'description' => 'Adds DaisyUI collapse icon modifiers.'],
                ['name' => 'as', 'values' => 'div, details', 'description' => 'Chooses radio-input or details markup.'],
            ],
            'usage' => '<x-ui.accordion title="Question" name="faq" checked icon="arrow">Answer text.</x-ui.accordion>',
        ],
        'calendars' => [
            'title' => 'Calendar',
            'name' => 'x-ui.calendar',
            'docs' => 'https://daisyui.com/components/calendar/',
            'description' => 'Calendar exposes daisyUI classes for native inputs and supported calendar libraries: Cally, Pikaday, and React Day Picker.',
            'preview' => <<<'HTML'
<div class="grid gap-3 sm:grid-cols-2">
    <input type="date" class="input">
    <input type="text" class="input pika-single" value="Pick a day">
</div>
HTML,
            'props' => [
                ['name' => 'library', 'values' => 'native, cally, pikaday, react-day-picker', 'description' => 'Maps to the documented calendar styling class.'],
                ['name' => 'as', 'values' => 'input, calendar-date, div', 'description' => 'Controls the rendered element.'],
                ['name' => 'type, value, placeholder', 'values' => 'input attributes', 'description' => 'Passed to native or text input calendars.'],
            ],
            'usage' => '<x-ui.calendar library="native" value="2026-06-16" />',
        ],
        'carousels' => [
            'title' => 'Carousel',
            'name' => 'x-ui.carousel',
            'docs' => 'https://daisyui.com/components/carousel/',
            'description' => 'Carousel creates a scrollable track. Add carousel-item children for each slide.',
            'preview' => <<<'HTML'
<div class="carousel carousel-center max-w-md space-x-4 rounded-box">
    <div class="carousel-item w-44 rounded-box bg-primary p-10 text-primary-content">Slide 1</div>
    <div class="carousel-item w-44 rounded-box bg-secondary p-10 text-secondary-content">Slide 2</div>
    <div class="carousel-item w-44 rounded-box bg-accent p-10 text-accent-content">Slide 3</div>
</div>
HTML,
            'props' => [
                ['name' => 'snap', 'values' => 'center, end', 'description' => 'Applies carousel-center or carousel-end.'],
                ['name' => 'vertical', 'values' => 'boolean', 'description' => 'Uses carousel-vertical.'],
            ],
            'usage' => '<x-ui.carousel snap="center"><div class="carousel-item">Slide</div></x-ui.carousel>',
        ],
        'chat-bubbles' => [
            'title' => 'Chat Bubble',
            'name' => 'x-ui.chat',
            'docs' => 'https://daisyui.com/components/chat/',
            'description' => 'Chat bubbles show one message with optional avatar, name, time, footer, side, and semantic bubble color.',
            'preview' => <<<'HTML'
<div>
    <div class="chat chat-start">
        <div class="chat-header">Taylor <time class="text-xs opacity-50">12:45</time></div>
        <div class="chat-bubble chat-bubble-primary">Can you review the draft?</div>
        <div class="chat-footer opacity-50">Delivered</div>
    </div>
    <div class="chat chat-end">
        <div class="chat-bubble chat-bubble-success">Already on it.</div>
    </div>
</div>
HTML,
            'props' => [
                ['name' => 'side', 'values' => 'start, end', 'description' => 'Controls left or right message alignment.'],
                ['name' => 'name, time, footer', 'values' => 'string', 'description' => 'Optional message metadata.'],
                ['name' => 'image', 'values' => 'URL string', 'description' => 'Renders chat-image avatar markup.'],
                ['name' => 'variant', 'values' => 'primary, secondary, accent, info, success, warning, error', 'description' => 'Applies chat-bubble color modifiers.'],
            ],
            'usage' => '<x-ui.chat side="end" variant="success">Already on it.</x-ui.chat>',
        ],
        'collapses' => [
            'title' => 'Collapse',
            'name' => 'x-ui.collapse',
            'docs' => 'https://daisyui.com/components/collapse/',
            'description' => 'Collapse shows and hides content independently using details or checkbox markup.',
            'preview' => <<<'HTML'
<details class="collapse collapse-plus bg-base-100 border border-base-300" open>
    <summary class="collapse-title font-semibold">Open by default</summary>
    <div class="collapse-content text-sm">This content is visible until the title is toggled.</div>
</details>
HTML,
            'props' => [
                ['name' => 'title', 'values' => 'string', 'description' => 'Title shown in the clickable header.'],
                ['name' => 'open, close', 'values' => 'boolean', 'description' => 'Controls initial or forced state.'],
                ['name' => 'icon', 'values' => 'arrow, plus', 'description' => 'Adds the documented icon modifiers.'],
                ['name' => 'as', 'values' => 'details, div', 'description' => 'Chooses details or checkbox markup.'],
            ],
            'usage' => '<x-ui.collapse title="Details" open icon="plus">Hidden content.</x-ui.collapse>',
        ],
        'countdowns' => [
            'title' => 'Countdown',
            'name' => 'x-ui.countdown',
            'docs' => 'https://daisyui.com/components/countdown/',
            'description' => 'Countdown renders the required --value style for animated numeric transitions.',
            'preview' => '<span class="countdown text-4xl"><span style="--value:42;" aria-live="polite">42</span></span>',
            'props' => [
                ['name' => 'value', 'values' => '0-999', 'description' => 'Numeric value assigned to --value.'],
                ['name' => 'label', 'values' => 'string', 'description' => 'Accessible label for the animated number.'],
            ],
            'usage' => '<x-ui.countdown value="42" class="text-4xl" />',
        ],
        'diffs' => [
            'title' => 'Diff',
            'name' => 'x-ui.diff',
            'docs' => 'https://daisyui.com/components/diff/',
            'description' => 'Diff compares two panels with diff-item-1, diff-item-2, and a draggable diff-resizer.',
            'preview' => <<<'HTML'
<figure class="diff aspect-16/9 max-w-lg" tabindex="0">
    <div class="diff-item-1"><div class="grid place-content-center bg-primary text-3xl font-black text-primary-content">Before</div></div>
    <div class="diff-item-2"><div class="grid place-content-center bg-base-200 text-3xl font-black">After</div></div>
    <div class="diff-resizer"></div>
</figure>
HTML,
            'props' => [
                ['name' => 'before, after', 'values' => 'string', 'description' => 'Labels rendered into the compared panels.'],
                ['name' => 'split', 'values' => '0-100', 'description' => 'Initial resizer position as a percentage.'],
            ],
            'usage' => '<x-ui.diff before="Before" after="After" split="60" class="max-w-lg" />',
        ],
        'dividers' => [
            'title' => 'Divider',
            'name' => 'x-ui.divider',
            'docs' => 'https://daisyui.com/components/divider/',
            'description' => 'Divider separates content horizontally or vertically and can include text.',
            'preview' => '<div class="divider divider-primary">OR</div>',
            'props' => [
                ['name' => 'orientation', 'values' => 'horizontal, vertical', 'description' => 'Applies divider-horizontal for side-by-side layouts.'],
                ['name' => 'placement', 'values' => 'start, end', 'description' => 'Moves divider text to the start or end.'],
                ['name' => 'variant', 'values' => 'neutral, primary, secondary, accent, success, warning, info, error', 'description' => 'Applies semantic divider color.'],
            ],
            'usage' => '<x-ui.divider variant="primary">OR</x-ui.divider>',
        ],
        'docks' => [
            'title' => 'Dock',
            'name' => 'x-ui.dock',
            'docs' => 'https://daisyui.com/components/dock/',
            'description' => 'Dock is a bottom navigation container. Use dock-active and dock-label on child buttons.',
            'preview' => <<<'HTML'
<div class="relative min-h-24 rounded-box bg-base-200">
    <div class="dock dock-md absolute">
        <button><span class="text-xl">H</span><span class="dock-label">Home</span></button>
        <button class="dock-active"><span class="text-xl">S</span><span class="dock-label">Search</span></button>
        <button><span class="text-xl">U</span><span class="dock-label">User</span></button>
    </div>
</div>
HTML,
            'props' => [
                ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Applies dock size modifiers.'],
            ],
            'usage' => '<x-ui.dock size="md"><button class="dock-active">Home</button></x-ui.dock>',
        ],
        'drawers' => [
            'title' => 'Drawer',
            'name' => 'x-ui.drawer',
            'docs' => 'https://daisyui.com/components/drawer/',
            'description' => 'Drawer creates the required toggle, content, side, and overlay markup for an off-canvas sidebar.',
            'preview' => <<<'HTML'
<div class="drawer drawer-open h-56 rounded-box overflow-hidden">
    <input id="demo-drawer" type="checkbox" class="drawer-toggle" checked>
    <div class="drawer-content grid place-items-center bg-base-100">
        <label for="demo-drawer" class="btn btn-primary drawer-button">Open drawer</label>
    </div>
    <div class="drawer-side">
        <label for="demo-drawer" class="drawer-overlay"></label>
        <ul class="menu min-h-full w-64 bg-base-200 p-4">
            <li><a>Sidebar item</a></li>
            <li><a>Another item</a></li>
        </ul>
    </div>
</div>
HTML,
            'props' => [
                ['name' => 'id', 'values' => 'string', 'description' => 'Connects the drawer-toggle input and labels.'],
                ['name' => 'open', 'values' => 'boolean', 'description' => 'Applies drawer-open and checks the toggle.'],
                ['name' => 'end', 'values' => 'boolean', 'description' => 'Moves the sidebar to the end side.'],
                ['name' => 'drawer slot', 'values' => 'named slot', 'description' => 'Overrides the default sidebar menu.'],
            ],
            'usage' => '<x-ui.drawer id="app-drawer"><label for="app-drawer" class="btn">Open</label></x-ui.drawer>',
        ],
        'fabs' => [
            'title' => 'FAB / Speed Dial',
            'name' => 'x-ui.fab',
            'docs' => 'https://daisyui.com/components/fab/',
            'description' => 'FAB wraps a focusable main action and any secondary speed-dial buttons.',
            'preview' => <<<'HTML'
<div class="relative min-h-36 rounded-box bg-base-200">
    <div class="fab absolute">
        <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
        <button class="btn btn-lg btn-circle">A</button>
        <button class="btn btn-lg btn-circle">B</button>
    </div>
</div>
HTML,
            'props' => [
                ['name' => 'flower', 'values' => 'boolean', 'description' => 'Uses fab-flower quarter-circle arrangement.'],
            ],
            'usage' => '<x-ui.fab><div tabindex="0" role="button" class="btn btn-circle btn-primary">F</div></x-ui.fab>',
        ],
        'filters' => [
            'title' => 'Filter',
            'name' => 'x-ui.filter',
            'docs' => 'https://daisyui.com/components/filter/',
            'description' => 'Filter is a radio group where the selected option hides the other options and shows a reset button.',
            'preview' => <<<'HTML'
<form class="filter">
    <input class="btn btn-square" type="reset" value="x">
    <input class="btn" type="radio" name="frameworks" aria-label="Laravel">
    <input class="btn" type="radio" name="frameworks" aria-label="Vue">
    <input class="btn" type="radio" name="frameworks" aria-label="React">
</form>
HTML,
            'props' => [
                ['name' => 'name', 'values' => 'string', 'description' => 'Radio group name.'],
                ['name' => 'options', 'values' => 'array', 'description' => 'Labels or value-label pairs rendered as radio buttons.'],
                ['name' => 'active', 'values' => 'string', 'description' => 'Initial checked option value.'],
            ],
            'usage' => '<x-ui.filter name="stack" :options="[\'Laravel\', \'Vue\', \'React\']" />',
        ],
        'footers' => [
            'title' => 'Footer',
            'name' => 'x-ui.footer',
            'docs' => 'https://daisyui.com/components/footer/',
            'description' => 'Footer lays out groups of links, logos, copyright text, and form controls.',
            'preview' => <<<'HTML'
<footer class="footer sm:footer-horizontal bg-base-300 text-base-content p-6 rounded-box">
    <aside>
        <p class="font-bold">Laravel DaisyUI<br><span class="font-normal">Blade components starter kit</span></p>
    </aside>
    <nav>
        <h6 class="footer-title">Links</h6>
        <a class="link link-hover">Docs</a>
        <a class="link link-hover">Components</a>
    </nav>
</footer>
HTML,
            'props' => [
                ['name' => 'center', 'values' => 'boolean', 'description' => 'Applies footer-center.'],
                ['name' => 'direction', 'values' => 'horizontal, vertical', 'description' => 'Applies footer-horizontal or footer-vertical.'],
            ],
            'usage' => '<x-ui.footer direction="horizontal" class="bg-base-300 p-6"><nav>Links</nav></x-ui.footer>',
        ],
        'heroes' => [
            'title' => 'Hero',
            'name' => 'x-ui.hero',
            'docs' => 'https://daisyui.com/components/hero/',
            'description' => 'Hero provides a large centered content area with optional background image and overlay.',
            'preview' => <<<'HTML'
<section class="hero min-h-72 rounded-box bg-base-300">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-4xl font-bold">Build with DaisyUI</h1>
            <p class="py-4">Composable Blade wrappers for the full component set.</p>
            <button class="btn btn-primary">Start</button>
        </div>
    </div>
</section>
HTML,
            'props' => [
                ['name' => 'image', 'values' => 'URL string', 'description' => 'Adds an inline background image.'],
                ['name' => 'overlay', 'values' => 'boolean', 'description' => 'Renders hero-overlay before the content.'],
            ],
            'usage' => '<x-ui.hero class="min-h-96 bg-base-300"><h1>Welcome</h1></x-ui.hero>',
        ],
        'hover-3d' => [
            'title' => 'Hover 3D Card',
            'name' => 'x-ui.hover-3d',
            'docs' => 'https://daisyui.com/components/hover-3d/',
            'description' => 'Hover 3D adds the eight empty hover-zone divs required by daisyUI after your non-interactive content.',
            'preview' => <<<'HTML'
<div class="hover-3d max-w-sm">
    <div class="card bg-neutral text-neutral-content">
        <div class="card-body">
            <h2 class="card-title">3D hover</h2>
            <p>Move the pointer over this card.</p>
        </div>
    </div>
    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
</div>
HTML,
            'props' => [
                ['name' => 'as', 'values' => 'div, a, figure', 'description' => 'Controls the wrapper element.'],
            ],
            'usage' => '<x-ui.hover-3d><div class="card">Card content</div></x-ui.hover-3d>',
        ],
        'hover-galleries' => [
            'title' => 'Hover Gallery',
            'name' => 'x-ui.hover-gallery',
            'docs' => 'https://daisyui.com/components/hover-gallery/',
            'description' => 'Hover Gallery reveals up to 10 images by horizontal hover zone.',
            'preview' => <<<'HTML'
<figure class="hover-gallery max-w-60 rounded-box overflow-hidden">
    <img src="https://img.daisyui.com/images/stock/daisyui-hat-1.webp" alt="Hat 1">
    <img src="https://img.daisyui.com/images/stock/daisyui-hat-2.webp" alt="Hat 2">
    <img src="https://img.daisyui.com/images/stock/daisyui-hat-3.webp" alt="Hat 3">
    <img src="https://img.daisyui.com/images/stock/daisyui-hat-4.webp" alt="Hat 4">
</figure>
HTML,
            'props' => [
                ['name' => 'images', 'values' => 'array of URLs or src/alt arrays', 'description' => 'Renders image children inside the hover-gallery container.'],
                ['name' => 'as', 'values' => 'figure, div', 'description' => 'Controls the rendered container.'],
            ],
            'usage' => '<x-ui.hover-gallery :images="$images" class="max-w-60" />',
        ],
        'indicators' => [
            'title' => 'Indicator',
            'name' => 'x-ui.indicator',
            'docs' => 'https://daisyui.com/components/indicator/',
            'description' => 'Indicator anchors a badge or marker to the corner or edge of another element.',
            'preview' => '<div class="indicator"><span class="indicator-item badge badge-primary">new</span><button class="btn">Inbox</button></div>',
            'props' => [
                ['name' => 'item', 'values' => 'string', 'description' => 'Quick badge text rendered in indicator-item.'],
                ['name' => 'x', 'values' => 'start, center, end', 'description' => 'Horizontal indicator position.'],
                ['name' => 'y', 'values' => 'top, middle, bottom', 'description' => 'Vertical indicator position.'],
                ['name' => 'indicator slot', 'values' => 'named slot', 'description' => 'Overrides the quick badge with custom indicator content.'],
            ],
            'usage' => '<x-ui.indicator item="new"><button class="btn">Inbox</button></x-ui.indicator>',
        ],
        'joins' => [
            'title' => 'Join',
            'name' => 'x-ui.join',
            'docs' => 'https://daisyui.com/components/join/',
            'description' => 'Join groups inputs, buttons, or other controls and fixes the first and last border radii.',
            'preview' => '<div class="join"><button class="btn join-item">One</button><button class="btn join-item btn-active">Two</button><button class="btn join-item">Three</button></div>',
            'props' => [
                ['name' => 'vertical', 'values' => 'boolean', 'description' => 'Applies join-vertical for stacked groups.'],
            ],
            'usage' => '<x-ui.join><button class="btn join-item">One</button><button class="btn join-item">Two</button></x-ui.join>',
        ],
        'kbds' => [
            'title' => 'Kbd',
            'name' => 'x-ui.kbd',
            'docs' => 'https://daisyui.com/components/kbd/',
            'description' => 'Kbd displays keyboard shortcuts and individual keys.',
            'preview' => '<div class="flex gap-2"><kbd class="kbd">ctrl</kbd><kbd class="kbd">shift</kbd><kbd class="kbd">K</kbd></div>',
            'props' => [
                ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Applies kbd size modifiers.'],
            ],
            'usage' => '<x-ui.kbd size="sm">ctrl</x-ui.kbd>',
        ],
        'labels' => [
            'title' => 'Label',
            'name' => 'x-ui.label',
            'docs' => 'https://daisyui.com/components/label/',
            'description' => 'Label provides regular or floating label wrappers for inputs.',
            'preview' => '<label class="floating-label"><span>Email</span><input type="email" class="input" placeholder="Email"></label>',
            'props' => [
                ['name' => 'as', 'values' => 'span, label, div', 'description' => 'Controls the rendered element.'],
                ['name' => 'floating', 'values' => 'boolean', 'description' => 'Uses floating-label instead of label.'],
            ],
            'usage' => '<x-ui.label as="label" floating><span>Email</span><input class="input"></x-ui.label>',
        ],
        'links' => [
            'title' => 'Link',
            'name' => 'x-ui.link',
            'docs' => 'https://daisyui.com/components/link/',
            'description' => 'Link adds consistent underline treatment and semantic colors.',
            'preview' => '<div class="flex flex-wrap gap-4"><a class="link link-primary">Primary link</a><a class="link link-secondary link-hover">Hover link</a></div>',
            'props' => [
                ['name' => 'href', 'values' => 'URL string', 'description' => 'Anchor destination.'],
                ['name' => 'variant', 'values' => 'neutral, primary, secondary, accent, success, info, warning, error', 'description' => 'Applies link color modifiers.'],
                ['name' => 'hover', 'values' => 'boolean', 'description' => 'Uses link-hover.'],
            ],
            'usage' => '<x-ui.link href="/docs" variant="primary">Read docs</x-ui.link>',
        ],
        'lists' => [
            'title' => 'List',
            'name' => 'x-ui.list',
            'docs' => 'https://daisyui.com/components/list/',
            'description' => 'List is a vertical row layout for dense repeated content.',
            'preview' => <<<'HTML'
<ul class="list bg-base-100 rounded-box shadow-md max-w-md">
    <li class="list-row">
        <div class="avatar"><div class="size-10 rounded-box bg-primary"></div></div>
        <div><div>Design review</div><div class="text-xs uppercase opacity-60">Today</div></div>
        <button class="btn btn-square btn-ghost">...</button>
    </li>
</ul>
HTML,
            'props' => [
                ['name' => 'as', 'values' => 'ul, ol, div', 'description' => 'Controls the rendered list container.'],
            ],
            'usage' => '<x-ui.list><li class="list-row">Row</li></x-ui.list>',
        ],
        'masks' => [
            'title' => 'Mask',
            'name' => 'x-ui.mask',
            'docs' => 'https://daisyui.com/components/mask/',
            'description' => 'Mask crops an image or element into common shapes.',
            'preview' => '<div class="mask mask-hexagon bg-primary size-24"></div>',
            'props' => [
                ['name' => 'shape', 'values' => 'squircle, heart, hexagon, hexagon-2, decagon, pentagon, diamond, square, circle, star, star-2, triangle variants, half variants', 'description' => 'Applies the matching mask shape class.'],
                ['name' => 'src, alt', 'values' => 'image attributes', 'description' => 'When src is present, renders an img.'],
                ['name' => 'as', 'values' => 'div, span', 'description' => 'Controls non-image wrapper element.'],
            ],
            'usage' => '<x-ui.mask shape="hexagon" class="size-24 bg-primary" />',
        ],
        'browser-mockups' => [
            'title' => 'Browser Mockup',
            'name' => 'x-ui.browser-mockup',
            'docs' => 'https://daisyui.com/components/mockup-browser/',
            'description' => 'Browser mockup wraps content in a browser-style frame with an optional toolbar URL.',
            'preview' => '<div class="mockup-browser border border-base-300 bg-base-300 max-w-lg"><div class="mockup-browser-toolbar"><div class="input">https://laravel.test</div></div><div class="border-t border-base-300 bg-base-100 p-6">Preview content</div></div>',
            'props' => [
                ['name' => 'url', 'values' => 'string', 'description' => 'Shows a mock address bar when present.'],
            ],
            'usage' => '<x-ui.browser-mockup url="https://laravel.test">Preview content</x-ui.browser-mockup>',
        ],
        'code-mockups' => [
            'title' => 'Code Mockup',
            'name' => 'x-ui.code-mockup',
            'docs' => 'https://daisyui.com/components/mockup-code/',
            'description' => 'Code mockup renders terminal-like lines with prefixes.',
            'preview' => '<div class="mockup-code"><pre data-prefix="$"><code>php artisan test</code></pre><pre data-prefix=">"><code>PASS Tests\\Feature\\ExampleTest</code></pre></div>',
            'props' => [
                ['name' => 'lines', 'values' => 'array', 'description' => 'Each item can be a string or prefix/code array.'],
            ],
            'usage' => '<x-ui.code-mockup :lines="[[\'prefix\' => \'$\', \'code\' => \'php artisan test\']]" />',
        ],
        'phone-mockups' => [
            'title' => 'Phone Mockup',
            'name' => 'x-ui.phone-mockup',
            'docs' => 'https://daisyui.com/components/mockup-phone/',
            'description' => 'Phone mockup frames slot content in a phone shell.',
            'preview' => '<div class="mockup-phone"><div class="mockup-phone-camera"></div><div class="mockup-phone-display grid place-items-center bg-base-200 text-base-content h-80 w-44">App</div></div>',
            'props' => [
                ['name' => 'slot', 'values' => 'markup', 'description' => 'Content rendered inside mockup-phone-display.'],
            ],
            'usage' => '<x-ui.phone-mockup><div class="grid h-80 place-items-center">App</div></x-ui.phone-mockup>',
        ],
        'window-mockups' => [
            'title' => 'Window Mockup',
            'name' => 'x-ui.window-mockup',
            'docs' => 'https://daisyui.com/components/mockup-window/',
            'description' => 'Window mockup frames content in an operating-system window shell.',
            'preview' => '<div class="mockup-window border border-base-300 bg-base-300 max-w-lg"><div class="bg-base-100 p-6">Window content</div></div>',
            'props' => [
                ['name' => 'slot', 'values' => 'markup', 'description' => 'Content rendered inside the window body.'],
            ],
            'usage' => '<x-ui.window-mockup>Window content</x-ui.window-mockup>',
        ],
        'radial-progresses' => [
            'title' => 'Radial Progress',
            'name' => 'x-ui.radial-progress',
            'docs' => 'https://daisyui.com/components/radial-progress/',
            'description' => 'Radial progress maps value, size, and thickness to the CSS variables required by daisyUI.',
            'preview' => '<div class="radial-progress text-primary" style="--value:70; --size:6rem;" role="progressbar">70%</div>',
            'props' => [
                ['name' => 'value', 'values' => '0-100', 'description' => 'Progress value assigned to --value and aria-valuenow.'],
                ['name' => 'size', 'values' => 'CSS length', 'description' => 'Optional --size value.'],
                ['name' => 'thickness', 'values' => 'CSS length', 'description' => 'Optional --thickness value.'],
            ],
            'usage' => '<x-ui.radial-progress value="70" size="6rem" class="text-primary" />',
        ],
        'ratings' => [
            'title' => 'Rating',
            'name' => 'x-ui.rating',
            'docs' => 'https://daisyui.com/components/rating/',
            'description' => 'Rating renders radio inputs styled with mask-star-2 for native form support.',
            'preview' => '<div class="rating rating-lg"><input type="radio" name="demo-rating" class="mask mask-star-2 bg-orange-400"><input type="radio" name="demo-rating" class="mask mask-star-2 bg-orange-400" checked><input type="radio" name="demo-rating" class="mask mask-star-2 bg-orange-400"></div>',
            'props' => [
                ['name' => 'name', 'values' => 'string', 'description' => 'Radio group name.'],
                ['name' => 'value', 'values' => 'integer', 'description' => 'Checked rating value.'],
                ['name' => 'max', 'values' => 'integer', 'description' => 'Number of radio buttons to render.'],
                ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Applies rating size modifiers.'],
                ['name' => 'half, hiddenReset', 'values' => 'boolean', 'description' => 'Applies rating-half or adds rating-hidden reset input.'],
            ],
            'usage' => '<x-ui.rating name="quality" value="4" size="lg" />',
        ],
        'stats' => [
            'title' => 'Stat',
            'name' => 'x-ui.stat',
            'docs' => 'https://daisyui.com/components/stat/',
            'description' => 'Stat displays numeric data. The local wrapper keeps the starter kit card-like style for compact metrics.',
            'preview' => '<div class="stats shadow"><div class="stat"><div class="stat-title">Downloads</div><div class="stat-value text-primary">31K</div><div class="stat-desc">Jan 1st - Feb 1st</div></div></div>',
            'props' => [
                ['name' => 'label', 'values' => 'string', 'description' => 'Metric label.'],
                ['name' => 'value', 'values' => 'string, number', 'description' => 'Primary metric value.'],
                ['name' => 'tone', 'values' => 'primary, secondary, accent, success', 'description' => 'Applies starter color styling to the value.'],
            ],
            'usage' => '<x-ui.stat label="Revenue" value="$12.4K" tone="success" />',
        ],
        'statuses' => [
            'title' => 'Status',
            'name' => 'x-ui.status',
            'docs' => 'https://daisyui.com/components/status/',
            'description' => 'Status is a tiny visual state indicator dot.',
            'preview' => '<div class="flex items-center gap-2"><span class="status status-success"></span> Online <span class="status status-error"></span> Offline</div>',
            'props' => [
                ['name' => 'variant', 'values' => 'neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Applies semantic status color.'],
                ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Applies status size modifiers.'],
            ],
            'usage' => '<x-ui.status variant="success" size="md" />',
        ],
        'steps' => [
            'title' => 'Steps',
            'name' => 'x-ui.steps',
            'docs' => 'https://daisyui.com/components/steps/',
            'description' => 'Steps shows progress through a multi-step flow. Child items use step and optional step-* color classes.',
            'preview' => '<ul class="steps"><li class="step step-primary">Register</li><li class="step step-primary">Choose plan</li><li class="step">Pay</li><li class="step">Done</li></ul>',
            'props' => [
                ['name' => 'vertical', 'values' => 'boolean', 'description' => 'Applies steps-vertical.'],
            ],
            'usage' => '<x-ui.steps><li class="step step-primary">Register</li><li class="step">Done</li></x-ui.steps>',
        ],
        'stacks' => [
            'title' => 'Stack',
            'name' => 'x-ui.stack',
            'docs' => 'https://daisyui.com/components/stack/',
            'description' => 'Stack visually layers child elements on top of each other.',
            'preview' => '<div class="stack w-32"><div class="card bg-primary text-primary-content shadow p-6">1</div><div class="card bg-secondary text-secondary-content shadow p-6">2</div><div class="card bg-accent text-accent-content shadow p-6">3</div></div>',
            'props' => [
                ['name' => 'slot', 'values' => 'markup', 'description' => 'Layered child elements.'],
            ],
            'usage' => '<x-ui.stack><div class="card">A</div><div class="card">B</div></x-ui.stack>',
        ],
        'swaps' => [
            'title' => 'Swap',
            'name' => 'x-ui.swap',
            'docs' => 'https://daisyui.com/components/swap/',
            'description' => 'Swap toggles between swap-on and swap-off content using a checkbox or active class.',
            'preview' => '<label class="swap swap-rotate text-4xl"><input type="checkbox"><div class="swap-on">ON</div><div class="swap-off">OFF</div></label>',
            'props' => [
                ['name' => 'active', 'values' => 'boolean', 'description' => 'Applies swap-active and checks the input.'],
                ['name' => 'rotate, flip', 'values' => 'boolean', 'description' => 'Applies swap-rotate or swap-flip animations.'],
            ],
            'usage' => '<x-ui.swap rotate><span class="swap-on">ON</span><span class="swap-off">OFF</span></x-ui.swap>',
        ],
        'text-rotates' => [
            'title' => 'Text Rotate',
            'name' => 'x-ui.text-rotate',
            'docs' => 'https://daisyui.com/components/text-rotate/',
            'description' => 'Text Rotate loops through up to six words or lines and pauses on hover.',
            'preview' => '<span class="text-rotate text-4xl font-bold"><span><span>Design</span><span>Develop</span><span>Deploy</span></span></span>',
            'props' => [
                ['name' => 'words', 'values' => 'array', 'description' => 'Words rendered as rotating inner spans.'],
                ['name' => 'slot', 'values' => 'markup', 'description' => 'Use custom spans for richer styling.'],
            ],
            'usage' => '<x-ui.text-rotate :words="[\'Design\', \'Develop\', \'Deploy\']" class="text-4xl" />',
        ],
        'theme-controllers' => [
            'title' => 'Theme Controller',
            'name' => 'x-ui.theme-controller',
            'docs' => 'https://daisyui.com/components/theme-controller/',
            'description' => 'Theme Controller changes the active daisyUI theme when a radio or checkbox value is selected.',
            'preview' => '<div class="flex flex-wrap gap-2"><input type="radio" name="demo-theme" class="theme-controller btn" aria-label="Light" value="light"><input type="radio" name="demo-theme" class="theme-controller btn" aria-label="Dark" value="dark"></div>',
            'props' => [
                ['name' => 'themes', 'values' => 'array', 'description' => 'Theme names rendered into the dropdown.'],
                ['name' => 'current', 'values' => 'string', 'description' => 'Initially checked theme.'],
            ],
            'usage' => '<x-ui.theme-controller :themes="[\'light\', \'dark\']" current="light" />',
        ],
        'timelines' => [
            'title' => 'Timeline',
            'name' => 'x-ui.timeline',
            'docs' => 'https://daisyui.com/components/timeline/',
            'description' => 'Timeline lays out chronological events vertically or horizontally.',
            'preview' => <<<'HTML'
<ul class="timeline timeline-vertical">
    <li><div class="timeline-start">2024</div><div class="timeline-middle">*</div><div class="timeline-end timeline-box">Started</div><hr></li>
    <li><hr><div class="timeline-start">2026</div><div class="timeline-middle">*</div><div class="timeline-end timeline-box">Expanded</div></li>
</ul>
HTML,
            'props' => [
                ['name' => 'vertical', 'values' => 'boolean', 'description' => 'Uses timeline-vertical when true, timeline-horizontal when false.'],
                ['name' => 'compact', 'values' => 'boolean', 'description' => 'Applies timeline-compact.'],
                ['name' => 'snap', 'values' => 'boolean', 'description' => 'Applies timeline-snap-icon.'],
            ],
            'usage' => '<x-ui.timeline><li><div class="timeline-end timeline-box">Event</div></li></x-ui.timeline>',
        ],
        'validators' => [
            'title' => 'Validator',
            'name' => 'x-ui.validator',
            'docs' => 'https://daisyui.com/components/validator/',
            'description' => 'Validator applies success and error colors to native form controls using browser validation rules.',
            'preview' => '<div class="max-w-sm"><input class="input validator" type="email" required placeholder="email@example.com"><p class="validator-hint">Enter a valid email address</p></div>',
            'props' => [
                ['name' => 'as', 'values' => 'input, select, textarea', 'description' => 'Controls the rendered form element.'],
                ['name' => 'type', 'values' => 'input type', 'description' => 'Input type when as is input.'],
                ['name' => 'hint', 'values' => 'string', 'description' => 'Renders validator-hint after the field.'],
            ],
            'usage' => '<x-ui.validator class="input" type="email" required hint="Enter a valid email" />',
        ],
    ],

    'example_sets' => [
        'accordions' => [
            [
                'title' => 'Radio Accordion',
                'description' => 'Radio inputs with the same name keep only one item open.',
                'preview' => <<<'HTML'
<div class="space-y-2">
    <div class="collapse collapse-arrow bg-base-100 border border-base-300">
        <input type="radio" name="faq-radio" checked>
        <div class="collapse-title font-semibold">How do I create an account?</div>
        <div class="collapse-content text-sm">Click sign up and follow the registration flow.</div>
    </div>
    <div class="collapse collapse-arrow bg-base-100 border border-base-300">
        <input type="radio" name="faq-radio">
        <div class="collapse-title font-semibold">Can I change plans?</div>
        <div class="collapse-content text-sm">Yes, you can change plans from billing settings.</div>
    </div>
</div>
HTML,
                'code' => '<x-ui.accordion title="How do I create an account?" name="faq" checked icon="arrow">Click sign up and follow the registration flow.</x-ui.accordion>',
            ],
            [
                'title' => 'Details Accordion',
                'description' => 'Details markup keeps hidden content searchable in the browser.',
                'preview' => <<<'HTML'
<div class="space-y-2">
    <details class="collapse collapse-plus bg-base-100 border border-base-300" name="faq-details" open>
        <summary class="collapse-title font-semibold">Searchable content</summary>
        <div class="collapse-content text-sm">This content remains available to browser search.</div>
    </details>
    <details class="collapse collapse-plus bg-base-100 border border-base-300" name="faq-details">
        <summary class="collapse-title font-semibold">Another question</summary>
        <div class="collapse-content text-sm">Only one details item opens in this named group.</div>
    </details>
</div>
HTML,
                'code' => '<x-ui.accordion as="details" name="faq-details" title="Searchable content" open icon="plus">This content remains available to browser search.</x-ui.accordion>',
            ],
        ],
        'carousels' => [
            [
                'title' => 'Centered Carousel',
                'description' => 'Use carousel-center with spaced carousel-item children.',
                'preview' => <<<'HTML'
<div class="carousel carousel-center max-w-md space-x-4 rounded-box">
    <div class="carousel-item w-44 rounded-box bg-primary p-10 text-primary-content">Slide 1</div>
    <div class="carousel-item w-44 rounded-box bg-secondary p-10 text-secondary-content">Slide 2</div>
    <div class="carousel-item w-44 rounded-box bg-accent p-10 text-accent-content">Slide 3</div>
</div>
HTML,
                'code' => '<x-ui.carousel snap="center" class="max-w-md space-x-4"><div class="carousel-item">Slide</div></x-ui.carousel>',
            ],
            [
                'title' => 'Vertical Carousel',
                'description' => 'Vertical mode is useful for compact media or step previews.',
                'preview' => <<<'HTML'
<div class="carousel carousel-vertical h-72 rounded-box">
    <div class="carousel-item h-full bg-info p-10 text-info-content">Top</div>
    <div class="carousel-item h-full bg-success p-10 text-success-content">Middle</div>
    <div class="carousel-item h-full bg-warning p-10 text-warning-content">Bottom</div>
</div>
HTML,
                'code' => '<x-ui.carousel vertical class="h-72"><div class="carousel-item h-full">Top</div></x-ui.carousel>',
            ],
        ],
        'chat-bubbles' => [
            [
                'title' => 'Conversation',
                'description' => 'Combine start and end bubbles to show a thread.',
                'preview' => <<<'HTML'
<div>
    <div class="chat chat-start">
        <div class="chat-header">Taylor <time class="text-xs opacity-50">12:45</time></div>
        <div class="chat-bubble chat-bubble-primary">Can you review the draft?</div>
        <div class="chat-footer opacity-50">Delivered</div>
    </div>
    <div class="chat chat-end">
        <div class="chat-bubble chat-bubble-success">Already on it.</div>
    </div>
</div>
HTML,
                'code' => '<x-ui.chat name="Taylor" time="12:45" variant="primary">Can you review the draft?</x-ui.chat>',
            ],
            [
                'title' => 'Semantic Bubbles',
                'description' => 'Bubble variants can carry status or tone.',
                'preview' => <<<'HTML'
<div>
    <div class="chat chat-start"><div class="chat-bubble chat-bubble-info">Deploy started.</div></div>
    <div class="chat chat-start"><div class="chat-bubble chat-bubble-warning">Queue is busy.</div></div>
    <div class="chat chat-start"><div class="chat-bubble chat-bubble-error">Build failed.</div></div>
</div>
HTML,
                'code' => '<x-ui.chat variant="warning">Queue is busy.</x-ui.chat>',
            ],
        ],
        'drawers' => [
            [
                'title' => 'Open Drawer',
                'description' => 'Drawer uses a checkbox toggle, content area, overlay, and drawer side.',
                'preview' => <<<'HTML'
<div class="drawer drawer-open h-56 overflow-hidden rounded-box">
    <input id="demo-drawer-a" type="checkbox" class="drawer-toggle" checked>
    <div class="drawer-content grid place-items-center bg-base-100">
        <label for="demo-drawer-a" class="btn btn-primary drawer-button">Open drawer</label>
    </div>
    <div class="drawer-side">
        <label for="demo-drawer-a" class="drawer-overlay"></label>
        <ul class="menu min-h-full w-64 bg-base-200 p-4">
            <li><a>Sidebar item</a></li>
            <li><a>Another item</a></li>
        </ul>
    </div>
</div>
HTML,
                'code' => '<x-ui.drawer id="app-drawer" open><label for="app-drawer" class="btn drawer-button">Open drawer</label></x-ui.drawer>',
            ],
            [
                'title' => 'End Drawer',
                'description' => 'Use drawer-end for right-side panels.',
                'preview' => <<<'HTML'
<div class="drawer drawer-end drawer-open h-56 overflow-hidden rounded-box">
    <input id="demo-drawer-b" type="checkbox" class="drawer-toggle" checked>
    <div class="drawer-content grid place-items-center bg-base-100">Page content</div>
    <div class="drawer-side">
        <label for="demo-drawer-b" class="drawer-overlay"></label>
        <div class="min-h-full w-64 bg-base-200 p-4">Settings panel</div>
    </div>
</div>
HTML,
                'code' => '<x-ui.drawer id="settings-drawer" end open>Page content</x-ui.drawer>',
            ],
        ],
        'fabs' => [
            [
                'title' => 'Vertical Speed Dial',
                'description' => 'The main action should be focusable so the dial works across browsers.',
                'preview' => <<<'HTML'
<div class="relative min-h-36 rounded-box bg-base-200">
    <div class="fab absolute">
        <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-primary">F</div>
        <button class="btn btn-lg btn-circle">A</button>
        <button class="btn btn-lg btn-circle">B</button>
    </div>
</div>
HTML,
                'code' => '<x-ui.fab><div tabindex="0" role="button" class="btn btn-circle btn-primary">F</div><button class="btn btn-circle">A</button></x-ui.fab>',
            ],
            [
                'title' => 'Flower Arrangement',
                'description' => 'fab-flower spreads actions in a quarter circle.',
                'preview' => <<<'HTML'
<div class="relative min-h-36 rounded-box bg-base-200">
    <div class="fab fab-flower absolute">
        <div tabindex="0" role="button" class="btn btn-lg btn-circle btn-secondary">+</div>
        <button class="btn btn-lg btn-circle">1</button>
        <button class="btn btn-lg btn-circle">2</button>
        <button class="btn btn-lg btn-circle">3</button>
    </div>
</div>
HTML,
                'code' => '<x-ui.fab flower><div tabindex="0" role="button" class="btn btn-circle">+</div></x-ui.fab>',
            ],
        ],
        'heroes' => [
            [
                'title' => 'Centered Hero',
                'description' => 'Hero content is centered by default for landing or empty states.',
                'preview' => <<<'HTML'
<section class="hero min-h-72 rounded-box bg-base-300">
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h1 class="text-4xl font-bold">Build with DaisyUI</h1>
            <p class="py-4">Composable Blade wrappers for the full component set.</p>
            <button class="btn btn-primary">Start</button>
        </div>
    </div>
</section>
HTML,
                'code' => '<x-ui.hero class="min-h-72 bg-base-300"><div class="max-w-md">Hero content</div></x-ui.hero>',
            ],
            [
                'title' => 'Hero With Overlay',
                'description' => 'Use the overlay style when the background needs contrast.',
                'preview' => <<<'HTML'
<section class="hero min-h-72 rounded-box bg-neutral text-neutral-content">
    <div class="hero-overlay bg-opacity-60"></div>
    <div class="hero-content text-center">
        <div class="max-w-md">
            <h2 class="text-3xl font-bold">Launch faster</h2>
            <p class="py-4">Theme-ready Laravel UI from the first route.</p>
        </div>
    </div>
</section>
HTML,
                'code' => '<x-ui.hero overlay class="min-h-72 bg-neutral text-neutral-content">Launch faster</x-ui.hero>',
            ],
        ],
        'joins' => [
            [
                'title' => 'Joined Buttons',
                'description' => 'Use join-item on each child to share borders.',
                'preview' => '<div class="join"><button class="btn join-item">One</button><button class="btn join-item btn-active">Two</button><button class="btn join-item">Three</button></div>',
                'code' => '<x-ui.join><button class="btn join-item">One</button><button class="btn join-item">Two</button></x-ui.join>',
            ],
            [
                'title' => 'Joined Form',
                'description' => 'Join works well for input and action combinations.',
                'preview' => '<div class="join"><input class="input join-item" placeholder="Search"><button class="btn btn-primary join-item">Go</button></div>',
                'code' => '<x-ui.join><input class="input join-item"><button class="btn join-item">Go</button></x-ui.join>',
            ],
        ],
        'masks' => [
            [
                'title' => 'Shape Masks',
                'description' => 'Masks crop any element into a defined shape.',
                'preview' => '<div class="flex flex-wrap gap-4"><div class="mask mask-squircle size-24 bg-primary"></div><div class="mask mask-hexagon size-24 bg-secondary"></div><div class="mask mask-star-2 size-24 bg-accent"></div></div>',
                'code' => '<x-ui.mask shape="hexagon" class="size-24 bg-secondary" />',
            ],
            [
                'title' => 'Image Mask',
                'description' => 'Provide src to render an img with mask classes.',
                'preview' => '<img class="mask mask-squircle size-32 object-cover" src="https://img.daisyui.com/images/stock/photo-1635805737707-575885ab0820.webp" alt="Masked preview">',
                'code' => '<x-ui.mask shape="squircle" src="https://example.com/photo.webp" class="size-32 object-cover" />',
            ],
        ],
        'ratings' => [
            [
                'title' => 'Star Rating',
                'description' => 'Rating is a group of radio inputs styled with masks.',
                'preview' => '<div class="rating rating-lg"><input type="radio" name="demo-rating-a" class="mask mask-star-2 bg-orange-400"><input type="radio" name="demo-rating-a" class="mask mask-star-2 bg-orange-400" checked><input type="radio" name="demo-rating-a" class="mask mask-star-2 bg-orange-400"></div>',
                'code' => '<x-ui.rating name="quality" value="2" size="lg" />',
            ],
            [
                'title' => 'With Reset',
                'description' => 'rating-hidden lets users clear a rating.',
                'preview' => '<div class="rating"><input type="radio" name="demo-rating-b" class="rating-hidden"><input type="radio" name="demo-rating-b" class="mask mask-star-2 bg-green-500"><input type="radio" name="demo-rating-b" class="mask mask-star-2 bg-green-500" checked><input type="radio" name="demo-rating-b" class="mask mask-star-2 bg-green-500"></div>',
                'code' => '<x-ui.rating name="support" value="2" hidden-reset />',
            ],
        ],
        'steps' => [
            [
                'title' => 'Horizontal Steps',
                'description' => 'Use step-primary to mark completed steps.',
                'preview' => '<ul class="steps"><li class="step step-primary">Register</li><li class="step step-primary">Choose plan</li><li class="step">Pay</li><li class="step">Done</li></ul>',
                'code' => '<x-ui.steps><li class="step step-primary">Register</li><li class="step">Done</li></x-ui.steps>',
            ],
            [
                'title' => 'Vertical Steps',
                'description' => 'Vertical steps fit sidebars and narrow layouts.',
                'preview' => '<ul class="steps steps-vertical"><li class="step step-primary">Register</li><li class="step step-primary">Choose plan</li><li class="step">Pay</li></ul>',
                'code' => '<x-ui.steps vertical><li class="step step-primary">Register</li><li class="step">Pay</li></x-ui.steps>',
            ],
        ],
        'timelines' => [
            [
                'title' => 'Vertical Timeline',
                'description' => 'Place event details in timeline-start or timeline-end.',
                'preview' => <<<'HTML'
<ul class="timeline timeline-vertical">
    <li><div class="timeline-start">2024</div><div class="timeline-middle">*</div><div class="timeline-end timeline-box">Started</div><hr></li>
    <li><hr><div class="timeline-start">2026</div><div class="timeline-middle">*</div><div class="timeline-end timeline-box">Expanded</div></li>
</ul>
HTML,
                'code' => '<x-ui.timeline><li><div class="timeline-end timeline-box">Started</div></li></x-ui.timeline>',
            ],
            [
                'title' => 'Horizontal Timeline',
                'description' => 'Use horizontal mode for milestone strips.',
                'preview' => '<ul class="timeline timeline-horizontal"><li><div class="timeline-start">Plan</div><div class="timeline-middle">*</div><hr></li><li><hr><div class="timeline-middle">*</div><div class="timeline-end">Build</div><hr></li><li><hr><div class="timeline-middle">*</div><div class="timeline-end">Ship</div></li></ul>',
                'code' => '<x-ui.timeline :vertical="false"><li><div class="timeline-end">Ship</div></li></x-ui.timeline>',
            ],
        ],
        'validators' => [
            [
                'title' => 'Email Validator',
                'description' => 'Native validity changes the input color and toggles the hint.',
                'preview' => '<div class="max-w-sm"><input class="input validator" type="email" required placeholder="email@example.com"><p class="validator-hint">Enter a valid email address</p></div>',
                'code' => '<x-ui.validator class="input" type="email" required hint="Enter a valid email address" />',
            ],
            [
                'title' => 'Password Rules',
                'description' => 'Pattern, minlength, and title work with validator-hint.',
                'preview' => '<div class="max-w-sm"><input class="input validator" type="password" required minlength="8" pattern="(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password"><p class="validator-hint">Use 8+ chars with number, lowercase, and uppercase.</p></div>',
                'code' => '<x-ui.validator class="input" type="password" required minlength="8" pattern="..." hint="Use 8+ chars with number, lowercase, and uppercase." />',
            ],
        ],
    ],
];
