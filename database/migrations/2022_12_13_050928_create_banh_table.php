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
        Schema::create('banh', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_1')->nullable();
            $table->longText('address_1')->nullable();
            $table->longText('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable();
            $table->string('eir_code')->nullable();
            $table->string('dwelling_type')->nullable();
            $table->string('plan')->nullable();
            $table->string('area')->nullable();
            $table->string('floor_type')->nullable();
            $table->longText('floor_type_note1')->nullable();
            $table->longText('floor_type_note2')->nullable();
            $table->string('wall_type')->nullable();
            $table->longText('wall_type_note_1')->nullable();
            $table->longText('wall_type_note_2')->nullable();
            $table->longText('tv')->nullable();
            $table->longText('wifi')->nullable();
            $table->longText('multiroom_music')->nullable();
            $table->longText('mobile_phone_repeaters')->nullable();
            $table->string('mobile_operator')->nullable();
            $table->longText('information')->nullable();
            $table->date('move_in_date')->nullable();
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
        Schema::dropIfExists('banh');
    }
};
