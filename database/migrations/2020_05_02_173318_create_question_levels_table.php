<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionLevels', function (Blueprint $table) {
            $table->id('idQuestionLevel');
            $table->unsignedBigInteger('idArea');
            $table->string('levelName');
            $table->string('levelInfo');
            $table->timestamps();

            $table->foreign('idArea')->references('idArea')->on('areas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questionLevels');
    }
}
