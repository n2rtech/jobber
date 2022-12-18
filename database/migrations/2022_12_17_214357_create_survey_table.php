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
        Schema::create('survey', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('banh_id')->nullable();
            $table->foreign('banh_id')->references('id')->on('banh')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile_1')->nullable();
            $table->string('partner_firstname')->nullable();
            $table->string('partner_lastname')->nullable();
            $table->string('partner_mobile_1')->nullable();
            $table->longText('address_1')->nullable();
            $table->longText('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('country')->nullable();
            $table->string('eir_code')->nullable();
            $table->longText('isp')->nullable();
            $table->longText('telecompolfield')->nullable();
            $table->longText('esbpolefield')->nullable();
            $table->longText('virginmediafield')->nullable();
            $table->longText('wirelessopeartorfield')->nullable();
            $table->longText('otherispfield')->nullable();
            $table->longText('isp_note')->nullable();
            $table->string('building_contractor')->nullable();
            $table->string('building_contractor_phone')->nullable();
            $table->string('building_contractor_email')->nullable();
            $table->string('electrical_contractor')->nullable();
            $table->string('electrical_contractor_phone')->nullable();
            $table->string('electrical_contractor_email')->nullable();
            $table->longText('dish_location')->nullable();
            $table->longText('saorview_location')->nullable();
            $table->longText('repeater_location')->nullable();
            $table->longText('item')->nullable();
            $table->longText('tvsocketfield')->nullable();
            $table->longText('hdmifield')->nullable();
            $table->longText('ceilingspeakersfield')->nullable();
            $table->longText('electricalsocketfield')->nullable();
            $table->longText('cat56field')->nullable();
            $table->longText('wallmountedtvfield')->nullable();
            $table->longText('mprfield')->nullable();
            $table->longText('notes_general')->nullable();
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
        Schema::dropIfExists('survey');
    }
};
