<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institutions')->insert([
            'institutionName' => 'Preicfes Popular Anibal Ponce',
            'institutionInfo' => 'Institución de prueba'
        ]);

        DB::table('institutions')->insert([
            'institutionName' => 'Escuela de Matemáticas Tareas y Tareas',
            'institutionInfo' => 'Institución de prueba'
        ]);
    }
}
