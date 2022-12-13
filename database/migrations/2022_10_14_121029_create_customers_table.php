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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_name')->nullable();
            $table->string('mobile_1')->nullable();
            $table->string('mobile_1_name')->nullable();
            $table->string('mobile_2')->nullable();
            $table->string('mobile_2_name')->nullable();
            $table->longText('address_1')->nullable();
            $table->longText('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('eir_code')->nullable();
            $table->longText('directions')->nullable();
            $table->longText('notes')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('type', ['sales-lead', 'customer'])->default('customer');
            $table->enum('status', ['pending', 'converted'])->default('pending');
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
        Schema::dropIfExists('customers');
    }
};
