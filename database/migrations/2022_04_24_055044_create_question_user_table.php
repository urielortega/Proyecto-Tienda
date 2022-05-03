<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_user', function (Blueprint $table) {
            $table->bigInteger('question_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('question_id')->references('id')->on('questions'); # La FK 'question_id' hace referencia al id de questions
            $table->foreign('user_id')->references('id')->on('users'); # La FK 'user_id' hace referencia al id de users
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_user');
    }
};
