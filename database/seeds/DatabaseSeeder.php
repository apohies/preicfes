<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(InstitutionsSeeder::class);
        $this->call(SchoolGradesSeeder::class);
        $this->call(AreasSeeder::class);
        $this->call(QuestionLevelsSeeder::class);
    }
}
