<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolGradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schoolgrades')->insert([
            'idInstitution' => 1,
            'gradeName' => 'Once',
            'gradeInfo' => 'Grado de prueba'
        ]);

        DB::table('schoolgrades')->insert([
            'idInstitution' => 1,
            'gradeName' => 'Décimo',
            'gradeInfo' => 'Grado de prueba'
        ]);

        DB::table('schoolgrades')->insert([
            'idInstitution' => 2,
            'gradeName' => 'Curso preparación pruebas saber',
            'gradeInfo' => 'Grado de prueba'
        ]);
    }
}
