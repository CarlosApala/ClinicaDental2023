<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>true,
        ];
    }
}
