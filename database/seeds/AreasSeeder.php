<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'idGrade' => 1,
            'areaName' => 'Sociales',
            'areaInfo' => 'Área de prueba'
        ]);

        DB::table('areas')->insert([
            'idGrade' => 2,
            'areaName' => 'Lectura crítica',
            'areaInfo' => 'Área de prueba'
        ]);

        DB::table('areas')->insert([
            'idGrade' => 3,
            'areaName' => 'Mátematicas',
            'areaInfo' => 'Área de prueba'
        ]);

        DB::table('areas')->insert([
            'idGrade' => 3,
            'areaName' => 'Física',
            'areaInfo' => 'Área de prueba'
        ]);
    }
}
