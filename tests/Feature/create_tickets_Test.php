<?php

namespace Tests\Feature;


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;

class create_tickets_Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_create_ticket(): void
    {
        $userlogin = User::factory()->create();
        $this->actingAs($userlogin);
        
        
        $data['titulo'] = 'Raton';
        $data['descripcion'] = 'Lorem';
        $data['estado'] = 'Cerrado';
        $data['id_usuario'] = 1;
       
        $response = $this->post(route('saveTicket'), $data);
        $response->assertRedirect('misTickets');
        
    }
    
}
