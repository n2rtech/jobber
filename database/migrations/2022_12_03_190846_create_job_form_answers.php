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
        Schema::create('job_form_answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->unsignedBigInteger('job_form_id')->nullable();
            $table->foreign('job_form_id')->references('id')->on('job_forms')->onDelete('cascade');
            $table->unsignedBigInteger('job_form_question_id')->nullable();
            $table->foreign('job_form_question_id')->references('id')->on('job_form_questions')->onDelete('cascade');
            $table->longText('answer')->nullable();
            $table->longText('answer_options')->nullable();
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
        Schema::dropIfExists('job_form_answers');
    }
};
