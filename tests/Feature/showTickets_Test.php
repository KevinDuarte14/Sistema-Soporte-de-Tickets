<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class showTickets_Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_show_tickets(): void
    {
        $userlogin = User::factory()->create();
        $this->actingAs($userlogin);
        
       
        $response = $this->get(route('misTickets'));
        $response->assertStatus(200);
    
        $response->assertViewIs('user.misTickets');
     
    }
}
