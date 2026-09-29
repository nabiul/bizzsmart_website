<?php

namespace Tests\Feature;

use App\Models\DemoRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Every part of your business');
    }

    public function test_a_visitor_can_request_a_demo(): void
    {
        $response = $this->post('/request-demo', [
            'name' => 'Arif Hasan',
            'company' => 'Acme Distribution',
            'phone' => '+8801700000000',
            'email' => 'arif@example.com',
            'business_type' => 'Distribution',
            'team_size' => '11–50',
            'message' => 'We need better stock visibility.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');
        $this->assertDatabaseHas(DemoRequest::class, [
            'company' => 'Acme Distribution',
            'phone' => '+8801700000000',
        ]);
    }
}
