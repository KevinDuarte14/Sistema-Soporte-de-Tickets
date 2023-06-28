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

        $user = User::factory()->create();
        $this->actingAs($user);
        
        $ticket =[
            'titulo' => 'Mouse',
            'descripcion' => 'Tengo un problema',
            'estado' => 'Abierto',
            'id_usuario' =>  $user->id,
                
        ];



        $response = $this->post(route('saveTicket'), $ticket);
        $this->assertDatabaseHas('tickets', $ticket);
        $response->assertRedirect('misTickets');
    
    
 
        
    }
       
        
    }
    

