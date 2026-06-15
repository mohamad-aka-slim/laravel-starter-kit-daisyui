<x-layouts.app title="Textarea Playground">
    <section class="mx-auto w-full max-w-7xl space-y-8 px-4 py-6 sm:px-6 lg:px-8">
        <x-playground.header
            title="Textarea Playground"
            name="x-ui.textarea"
            description="Textareas collect longer freeform text. The component supports DaisyUI colors, sizes, ghost style, and native textarea attributes."
            docs="https://daisyui.com/components/textarea/"
        />

        <x-ui.panel title="Examples" description="Use colors for validation or intent, and sizes for dense or prominent forms.">
            <div class="space-y-8">
                <x-playground.section title="Colors">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-3">
                        @foreach (['default', 'neutral', 'primary', 'secondary', 'accent', 'info', 'success', 'warning', 'error'] as $variant)
                            <x-ui.textarea :variant="$variant" placeholder="{{ str($variant)->headline() }}" rows="2" />
                        @endforeach
                    </div>
                </x-playground.section>

                <x-playground.section title="Sizes and States">
                    <div class="grid gap-3 md:grid-cols-2 xl:grid-cols-5">
                        @foreach (['xs', 'sm', 'md', 'lg', 'xl'] as $size)
                            <x-ui.textarea :size="$size" placeholder="{{ strtoupper($size) }}" rows="2" />
                        @endforeach
                    </div>
                    <div class="mt-3 grid gap-3 md:grid-cols-3">
                        <x-ui.textarea ghost placeholder="Ghost" rows="2" />
                        <x-ui.textarea value="Readonly value" readonly rows="2" />
                        <x-ui.textarea value="Disabled value" disabled rows="2" />
                    </div>
                </x-playground.section>

                <x-playground.section title="Props">
                    <x-playground.props :items="[
                        ['name' => 'variant', 'values' => 'default, neutral, primary, secondary, accent, info, success, warning, error', 'description' => 'Maps to DaisyUI textarea color classes.'],
                        ['name' => 'size', 'values' => 'xs, sm, md, lg, xl', 'description' => 'Controls textarea spacing and scale.'],
                        ['name' => 'rows, minlength, maxlength', 'values' => 'native attributes', 'description' => 'Forwarded to the textarea element.'],
                        ['name' => 'required, disabled, readonly, ghost', 'values' => 'boolean', 'description' => 'Applies native states or DaisyUI ghost style.'],
                    ]" />
                </x-playground.section>

                <x-playground.section title="Blade Usage">
                    <x-playground.code>
                        <pre data-prefix="1"><code>&lt;x-ui.textarea name=&quot;bio&quot; variant=&quot;primary&quot; rows=&quot;4&quot; /&gt;</code></pre>
                        <pre data-prefix="2"><code>&lt;x-ui.textarea size=&quot;sm&quot; variant=&quot;error&quot; required&gt;Invalid text&lt;/x-ui.textarea&gt;</code></pre>
                    </x-playground.code>
                </x-playground.section>
            </div>
        </x-ui.panel>
    </section>
</x-layouts.app>
