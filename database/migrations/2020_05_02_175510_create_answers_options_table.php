<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_options', function (Blueprint $table) {
            $table->bigIncrements('idAnswerOption');
            $table->unsignedBigInteger('idQuestion');
            $table->enum('type', ['ANSWER', 'OPTION']);
            $table->string('text');
            $table->timestamps();

            $table->foreign('idQuestion')->references('idQuestion')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers_options');
    }
}
