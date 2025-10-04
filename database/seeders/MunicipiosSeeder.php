<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('municipios')->insert([
            ['departamento_id' => 1, 'nombre' => 'Medellín'],
            ['departamento_id' => 1, 'nombre' => 'Bello'],
            ['departamento_id' => 2, 'nombre' => 'Bogotá'],
            ['departamento_id' => 2, 'nombre' => 'Soacha'],
            ['departamento_id' => 3, 'nombre' => 'Cali'],
            ['departamento_id' => 3, 'nombre' => 'Palmira'],
            ['departamento_id' => 4, 'nombre' => 'Bucaramanga'],
            ['departamento_id' => 4, 'nombre' => 'Floridablanca'],
            ['departamento_id' => 5, 'nombre' => 'Cartagena'],
            ['departamento_id' => 5, 'nombre' => 'Magangué'],
        ]);
    }

}
