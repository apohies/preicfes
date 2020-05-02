<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id('idQuestion');
            $table->unsignedBigInteger('idQuestionLevel');
            $table->enum('questionType', ['OPEN', 'MULTIPLE','YES/NO']);
            $table->string('textQuestion');
            $table->string('imageQuestion')->nullable();
            $table->timestamps();

            $table->foreign('idQuestionLevel')->references('idQuestionLevel')->on('questionLevels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
