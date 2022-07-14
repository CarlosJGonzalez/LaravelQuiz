<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelectedOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selected_options', function (Blueprint $table) {
            $table->id();

            $table->biginteger('option_id')->unsigned();
            $table->biginteger('result_id')->unsigned();
            $table->foreign('result_id')->references('id')->on('results');
            $table->foreign('option_id')->references('id')->on('quizzes_options');

            $table->string('option_name', 255 );
            $table->boolean('sel_value');
            
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
        Schema::dropIfExists('selected_options');
    }
}
