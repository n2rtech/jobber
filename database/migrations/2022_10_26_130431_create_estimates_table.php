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
        Schema::create('estimates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->longText('shipping_address')->nullable();
            $table->enum('terms',[30, 60, 0])->default(0);
            $table->date('expiry_date')->nullable();
            $table->date('estimate_date')->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->enum('discount_type', ['percentage', 'amount'])->default('percentage');
            $table->decimal('tax', 10, 2)->nullable();
            $table->enum('tax_type', ['percentage', 'amount'])->default('percentage');
            $table->decimal('subtotal', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->decimal('paid', 10, 2)->default(0);
            $table->longText('notes')->nullable();
            $table->longText('conditions')->nullable();
            $table->string('file')->nullable();
            $table->enum('status', ['sent', 'expired', 'cancelled', 'created'])->default('created');
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
        Schema::dropIfExists('estimates');
    }
};