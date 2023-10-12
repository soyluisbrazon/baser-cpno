<?php

namespace Database\Seeders;
use DB;
use Hash;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'usuario' => 'SoyLuisBrazon',
            'correo' => 'brazon.luis77@gmail.com',
            'nombre' => 'Luis',
            'apellido' => 'Brazon',
            'telefono' => '04248232991',
            'cedula' => '27287477',
            'estatus' => '1',
            'password' => bcrypt('Capitan0104')
        ]);
    }
}
