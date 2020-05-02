<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // area: Sociales - grado: Once - institucion: Preicfes Popular Anibal Ponce
        DB::table('questionlevels')->insert([
            'idArea' => 1,
            'levelName' => 'Alto',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 1,
            'levelName' => 'Medio',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 1,
            'levelName' => 'Bajo',
            'levelInfo' => 'Nivel de prueba'
        ]);
        // end 

        // area: Lectura crítica - grado: Décimo - institucion: Preicfes Popular Anibal Ponce
        DB::table('questionlevels')->insert([
            'idArea' => 2,
            'levelName' => 'A',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 2,
            'levelName' => 'B',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 2,
            'levelName' => 'C',
            'levelInfo' => 'Nivel de prueba'
        ]);
        // end

        // area: Mátematicas - grado: Curso preparación pruebas saber - institucion: Escuela de Matemáticas Tareas y Tareas
        DB::table('questionlevels')->insert([
            'idArea' => 3,
            'levelName' => 'III',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 3,
            'levelName' => 'II',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 3,
            'levelName' => 'I',
            'levelInfo' => 'Nivel de prueba'
        ]);
        // end

        // area: Física - grado: Curso preparación pruebas saber - institucion: Escuela de Matemáticas Tareas y Tareas
        DB::table('questionlevels')->insert([
            'idArea' => 4,
            'levelName' => 'A1',
            'levelInfo' => 'Nivel de prueba'
        ]);

        DB::table('questionlevels')->insert([
            'idArea' => 4,
            'levelName' => 'A2',
            'levelInfo' => 'Nivel de prueba'
        ]);
        // end
    }
}
