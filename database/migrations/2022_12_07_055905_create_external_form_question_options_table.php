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
        Schema::create('external_form_question_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('external_form_id')->constrained('external_forms')->onDelete('cascade');
            $table->unsignedBigInteger('external_form_tab_id')->nullable();
            $table->foreign('external_form_tab_id')->references('id')->on('external_form_tabs')->onDelete('cascade');
            $table->foreignId('external_form_question_id')->constrained('external_form_questions')->onDelete('cascade');
            $table->string('option')->nullable();
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
        Schema::dropIfExists('external_form_question_options');
    }
};
