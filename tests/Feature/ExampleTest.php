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
            ->assertSee('readonly', false)
            ->assertSee('disabled', false);
    }
}
