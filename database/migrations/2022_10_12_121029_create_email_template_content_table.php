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
        Schema::create('email_template_content', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('email_template_id')->nullable();
            $table->foreign('email_template_id')->references('id')->on('email_templates')->onDelete('cascade');
            $table->string('template_name')->nullable();
            $table->longText('subject')->nullable();
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
        Schema::dropIfExists('email_template_content');
    }
};
