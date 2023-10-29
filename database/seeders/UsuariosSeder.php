<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class UsuariosSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin=\App\Models\Role::where('nombre','admin')->first()->id;
        $recep=\App\Models\Role::where('nombre','recepcionista')->first();
        $paciente=\App\Models\Role::where('nombre','paciente')->first();
        $medico=\App\Models\Role::where('nombre','medico')->first()->id;


        dd($medico."");
        //
        DB::table('usuarios')->insert([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>$admin->id
        ]);
        DB::table('usuarios')->insert([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>$paciente->id
        ]);
        DB::table('usuarios')->insert([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>$recep->id
        ]);
        DB::table('usuarios')->insert([
            'id'=>Uuid::uuid4(),
            'name'=>fake()->name,
            'lastname'=>fake()->lastName,
            'email'=>fake()->email,
            'password'=>Hash::make('password'),
            'status'=>1,
            'role_id'=>$medico->id
        ]);
    }
}
