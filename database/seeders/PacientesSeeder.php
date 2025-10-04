<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class PacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pacientes')->insert([
            [
                'tipo_documento_id' => 1,
                'numero_documento' => '1001',
                'nombre1' => 'Carlos',
                'nombre2' => 'Andrés',
                'apellido1' => 'Gómez',
                'apellido2' => 'Pérez',
                'genero_id' => 1,
                'departamento_id' => 1,
                'municipio_id' => 1,
                'correo' => 'carlos@sihos.com',
            ],
            [
                'tipo_documento_id' => 2,
                'numero_documento' => '1002',
                'nombre1' => 'María',
                'nombre2' => 'José',
                'apellido1' => 'López',
                'apellido2' => 'García',
                'genero_id' => 2,
                'departamento_id' => 2,
                'municipio_id' => 3,
                'correo' => 'maria@sihos.com',
            ],
            [
                'tipo_documento_id' => 1,
                'numero_documento' => '1003',
                'nombre1' => 'Juan',
                'nombre2' => 'David',
                'apellido1' => 'Martínez',
                'apellido2' => '',
                'genero_id' => 1,
                'departamento_id' => 3,
                'municipio_id' => 5,
                'correo' => 'juan@sihos.com',
            ],
            [
                'tipo_documento_id' => 1,
                'numero_documento' => '1004',
                'nombre1' => 'Laura',
                'nombre2' => '',
                'apellido1' => 'Torres',
                'apellido2' => 'Jiménez',
                'genero_id' => 2,
                'departamento_id' => 4,
                'municipio_id' => 7,
                'correo' => 'laura@sihos.com',
            ],
            [
                'tipo_documento_id' => 2,
                'numero_documento' => '1005',
                'nombre1' => 'Sofía',
                'nombre2' => 'Isabel',
                'apellido1' => 'Castro',
                'apellido2' => '',
                'genero_id' => 2,
                'departamento_id' => 5,
                'municipio_id' => 9,
                'correo' => 'sofia@sihos.com',
            ],
        ]);
    }

}
