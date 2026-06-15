<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_starter_surface_renders(): void
    {
        $response = $this->get('/');

        $response
            ->assertStatus(200)
            ->assertSee('Laravel DaisyUI Starter')
            ->assertSee('theme-controller', false)
            ->assertSee('data-theme', false)
            ->assertSee('btn-primary', false)
            ->assertSee('badge-primary', false);
    }

    public function test_badge_playground_renders(): void
    {
        $response = $this->get('/playground/badges');

        $response
            ->assertStatus(200)
            ->assertSee('Badge Playground')
            ->assertSee('badge-success', false)
            ->assertSee('badge-outline', false)
            ->assertSee('badge-soft', false);
    }

    public function test_button_playground_renders(): void
    {
        $response = $this->get('/playground/buttons');

        $response
            ->assertStatus(200)
            ->assertSee('Button Playground')
            ->assertSee('btn-primary', false)
            ->assertSee('btn-outline', false)
            ->assertSee('btn-soft', false)
            ->assertSee('btn-dash', false)
            ->assertSee('btn-disabled', false);
    }

    public function test_card_playground_renders(): void
    {
        $response = $this->get('/playground/cards');

        $response
            ->assertStatus(200)
            ->assertSee('Card Playground')
            ->assertSee('card-body', false)
            ->assertSee('card-title', false)
            ->assertSee('card-actions', false)
            ->assertSee('card-border', false)
            ->assertSee('image-full', false);
    }

    public function test_input_playground_renders(): void
    {
        $response = $this->get('/playground/inputs');

        $response
            ->assertStatus(200)
            ->assertSee('Input Playground')
            ->assertSee('input-primary', false)
            ->assertSee('input-error', false)
            ->assertSee('input-ghost', false)
            ->assertSee('grow', false)
            ->assertSee('readonly', false)
            ->assertSee('disabled', false);
    }

    public function test_textarea_playground_renders(): void
    {
        $response = $this->get('/playground/textareas');

        $response
            ->assertStatus(200)
            ->assertSee('Textarea Playground')
            ->assertSee('textarea-primary', false)
            ->assertSee('textarea-ghost', false)
            ->assertSee('textarea-xl', false);
    }

    public function test_select_playground_renders(): void
    {
        $response = $this->get('/playground/selects');

        $response
            ->assertStatus(200)
            ->assertSee('Select Playground')
            ->assertSee('select-primary', false)
            ->assertSee('select-ghost', false)
            ->assertSee('multiple', false);
    }

    public function test_checkbox_playground_renders(): void
    {
        $response = $this->get('/playground/checkboxes');

        $response
            ->assertStatus(200)
            ->assertSee('Checkbox Playground')
            ->assertSee('checkbox-primary', false)
            ->assertSee('checkbox-xl', false)
            ->assertSee('checked', false);
    }

    public function test_toggle_playground_renders(): void
    {
        $response = $this->get('/playground/toggles');

        $response
            ->assertStatus(200)
            ->assertSee('Toggle Playground')
            ->assertSee('toggle-primary', false)
            ->assertSee('toggle-xl', false)
            ->assertSee('checked', false);
    }

    public function test_modal_playground_renders(): void
    {
        $response = $this->get('/playground/modals');

        $response
            ->assertStatus(200)
            ->assertSee('Modal Playground')
            ->assertSee('modal-box', false)
            ->assertSee('modal-action', false)
            ->assertSee('modal-backdrop', false)
            ->assertSee('modal-toggle', false)
            ->assertSee('modal-bottom', false);
    }

    public function test_dropdown_playground_renders(): void
    {
        $response = $this->get('/playground/dropdowns');

        $response
            ->assertStatus(200)
            ->assertSee('Dropdown Playground')
            ->assertSee('dropdown-content', false)
            ->assertSee('dropdown-hover', false)
            ->assertSee('dropdown-open', false);
    }

    public function test_navbar_playground_renders(): void
    {
        $response = $this->get('/playground/navbars');

        $response
            ->assertStatus(200)
            ->assertSee('Navbar Playground')
            ->assertSee('navbar-start', false)
            ->assertSee('navbar-center', false)
            ->assertSee('navbar-end', false);
    }

    public function test_tabs_playground_renders(): void
    {
        $response = $this->get('/playground/tabs');

        $response
            ->assertStatus(200)
            ->assertSee('Tabs Playground')
            ->assertSee('tabs-box', false)
            ->assertSee('tabs-border', false)
            ->assertSee('tabs-lift', false)
            ->assertSee('tab-active', false);
    }

    public function test_table_playground_renders(): void
    {
        $response = $this->get('/playground/tables');

        $response
            ->assertStatus(200)
            ->assertSee('Table Playground')
            ->assertSee('table-zebra', false)
            ->assertSee('table-pin-rows', false)
            ->assertSee('table-pin-cols', false);
    }

    public function test_pagination_playground_renders(): void
    {
        $response = $this->get('/playground/paginations');

        $response
            ->assertStatus(200)
            ->assertSee('Pagination Playground')
            ->assertSee('join-item', false)
            ->assertSee('join-vertical', false)
            ->assertSee('btn-active', false);
    }

    public function test_toast_playground_renders(): void
    {
        $response = $this->get('/playground/toasts');

        $response
            ->assertStatus(200)
            ->assertSee('Toast Playground')
            ->assertSee('toast-start', false)
            ->assertSee('toast-middle', false)
            ->assertSee('toast-end', false);
    }

    public function test_playground_index_renders(): void
    {
        $response = $this->get('/playground');

        $response
            ->assertStatus(200)
            ->assertSee('Component Playground')
            ->assertSee('/playground/buttons', false)
            ->assertSee('/playground/skeletons', false);
    }

    public function test_extended_component_playgrounds_render(): void
    {
        $pages = [
            'radios' => ['Radio Playground', 'radio-primary', 'radio-xl'],
            'ranges' => ['Range Playground', 'range-primary', 'range-xl'],
            'file-inputs' => ['File Input Playground', 'file-input-primary', 'file-input-ghost'],
            'fieldsets' => ['Fieldset Playground', 'fieldset-legend', 'floating-label'],
            'menus' => ['Menu Playground', 'menu-horizontal', 'active'],
            'breadcrumbs' => ['Breadcrumbs Playground', 'breadcrumbs', 'Components'],
            'avatars' => ['Avatar Playground', 'avatar-online', 'avatar-placeholder'],
            'tooltips' => ['Tooltip Playground', 'tooltip-open', 'tooltip-success'],
            'loadings' => ['Loading Playground', 'loading-spinner', 'loading-infinity'],
            'progresses' => ['Progress Playground', 'progress-primary', 'progress-error'],
            'skeletons' => ['Skeleton Playground', 'skeleton', 'rounded-full'],
        ];

        foreach ($pages as $slug => $needles) {
            $response = $this->get("/playground/{$slug}");

            $response->assertStatus(200);

            foreach ($needles as $needle) {
                $response->assertSee($needle, false);
            }
        }
    }
}
