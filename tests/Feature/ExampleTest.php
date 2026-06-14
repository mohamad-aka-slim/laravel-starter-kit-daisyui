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
            ->assertSee('btn-primary', false);
    }
}
