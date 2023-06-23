<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
Use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker()->sentence(30),
            'descripcion' => $this->faker()->paragraph(),
            'estado' => $this->randomElement(['Abierto','Cerrado']),
            'id_usuario' => User:: inRandomOrder()->first()   ,
           
        ];
    }
}
