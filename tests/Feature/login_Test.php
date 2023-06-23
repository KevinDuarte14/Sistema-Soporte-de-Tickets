<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;

class login_Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;
    public function test_user_without_credentials_cannot_go_to_index(): void
    {
        Artisan::call('migrate');
        $go_to_index = $this->get(route('index'));
        $go_to_index->assertStatus(302)->assertRedirect(route('login'));
    }

    public function test_user_cann_register(): void
    {
        $user = User::factory()->create();
            $response = $this->post('/register', [
                'name' => 'Test Name',
                'email' => 'test@test.com',
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);
    
            $this->assertAuthenticated();
    }
    public function test_user_can_login(): void
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        
    }


}
