<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolGrades', function (Blueprint $table) {
            $table->bigIncrements('idGrade');
            $table->unsignedBigInteger('idInstitution');
            $table->string('gradeName');
            $table->string('gradeInfo');
            $table->timestamps();

            $table->foreign('idInstitution')->references('idInstitution')->on('institutions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schoolGrades');
    }
}
