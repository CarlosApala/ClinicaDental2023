<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Usuarios;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ])
        $this->call(RoleSeder::class);
        
        $roleEspecifico=\App\Models\Role::where('nombre','admin')->first()->id;

        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"550e8400-e29b-41d4-a716-446655440000"
        ]);
        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"f47ac10b-58cc-4372-a567-0e02b2c3d479"
        ]);
        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"6ba7b810-9dad-11d1-80b4-00c04fd430c8"
        ]);
        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"550e8400-e29b-41d4-a716-446655440001"
        ]);

        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"550e8400-e29b-41d4-a716-446655440000"
        ]);
        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"f47ac10b-58cc-4372-a567-0e02b2c3d479"
        ]);
        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"6ba7b810-9dad-11d1-80b4-00c04fd430c8"
        ]);
        Usuarios::factory()->create([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>"550e8400-e29b-41d4-a716-446655440001"
        ]);
    }

}
