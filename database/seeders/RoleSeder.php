<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class RoleSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('role')->insert([
            'id'=>'550e8400-e29b-41d4-a716-446655440000',
            'nombre'=>'admin',
        ]);
        DB::table('role')->insert([
            'id'=>'f47ac10b-58cc-4372-a567-0e02b2c3d479',
            'nombre'=>'medico',
        ]);
        DB::table('role')->insert([
            'id'=>"6ba7b810-9dad-11d1-80b4-00c04fd430c8",
            'nombre'=>'paciente',
        ]);
        DB::table('role')->insert([
            'id'=>"550e8400-e29b-41d4-a716-446655440001",
            'nombre'=>'recepcionista',
        ]);

    }
}
