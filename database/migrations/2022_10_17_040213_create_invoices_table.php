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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('same_as_billing_address')->default(true);
            $table->longText('shipping_address_1')->nullable();
            $table->longText('shipping_address_2')->nullable();
            $table->longText('shipping_city')->nullable();
            $table->longText('shipping_state')->nullable();
            $table->longText('shipping_country')->nullable();
            $table->longText('shipping_eir_code')->nullable();
            $table->enum('terms',[30, 60, 0])->default(0);
            $table->date('due_date')->nullable();
            $table->date('invoice_date')->nullable();
            $table->decimal('discount', 10, 2)->default(0);
            $table->enum('discount_type', ['percentage', 'amount'])->default('percentage');
            $table->decimal('tax', 10, 2)->nullable();
            $table->enum('tax_type', ['percentage', 'amount'])->default('amount');
            $table->decimal('subtotal', 10, 2)->default(0.00);
            $table->decimal('total', 10, 2)->default(0.00);
            $table->decimal('paid', 10, 2)->default(0.00);
            $table->longText('notes')->nullable();
            $table->longText('conditions')->nullable();
            $table->string('file')->nullable();
            $table->enum('status', ['paid', 'unpaid', 'cancelled', 'partial'])->default('unpaid');
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
        Schema::dropIfExists('invoices');
    }
};
