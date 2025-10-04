<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        DB::table('users')->insert([
            'nombre' => 'Administrador',
            'email' => 'admin@sihos.com',
            'password' => Hash::make('1234567890'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

}
