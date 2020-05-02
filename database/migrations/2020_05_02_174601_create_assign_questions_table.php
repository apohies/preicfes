<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignQuestions', function (Blueprint $table) {
            $table->unsignedBigInteger('idTest');
            $table->unsignedBigInteger('idQuestion');

            $table->foreign('idTest')->references('idTest')->on('test');
            $table->foreign('idQuestion')->references('idQuestion')->on('questions');

            $table->primary(['idTest', 'idQuestion']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignQuestions');
    }
}
