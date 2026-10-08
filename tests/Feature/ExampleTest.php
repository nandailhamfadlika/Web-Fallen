<?php

namespace Tests\Feature;

use Database\Seeders\CharacterSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $this->seed(CharacterSeeder::class);

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('FALLEN');
        $response->assertSee('The Claimants');
        $response->assertSee('Aron');
        $response->assertSee('Mike');
        $response->assertSee('Kemet');
        $response->assertSee('Om Hami');
    }

    public function test_contact_form_submission(): void
    {
        $response = $this->post('/contact', [
            'name' => 'Fighter Tester',
            'email' => 'fighter@example.com',
            'inquiry_type' => 'playtest',
            'message' => 'Saya ingin ikut playtest dengan gamepad.',
        ]);

        $response->assertRedirect('/#contact');
        $this->assertDatabaseHas('contact_inquiries', [
            'email' => 'fighter@example.com',
            'inquiry_type' => 'playtest',
        ]);
    }
}
