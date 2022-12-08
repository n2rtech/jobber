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
        Schema::create('text_template_content', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('text_template_id')->nullable();
            $table->foreign('text_template_id')->references('id')->on('text_templates')->onDelete('cascade');
            $table->string('template_name')->nullable();
            $table->longText('message')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('text_template_content');
    }
};
