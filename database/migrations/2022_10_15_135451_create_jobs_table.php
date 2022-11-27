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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->foreign('job_title_id')->references('id')->on('job_titles')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('instructions')->nullable();
            $table->boolean('invoice_remind')->default(0);
            $table->longText('job_forms')->nullable();
            $table->enum('scheduled',['yes', 'no'])->default('no');
            $table->enum('status',['pending', 'provisional', 'confirmed', 'completed'])->default('pending');
            $table->timestamp('start')->nullable();
            $table->timestamp('end')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('jobs');
    }
};
