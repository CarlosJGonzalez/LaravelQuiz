<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes_options', function (Blueprint $table) {
            $table->id();
            $table->biginteger('question_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->string('option', 255);
            $table->boolean('value')->default( false );

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes_options');
    }
}
