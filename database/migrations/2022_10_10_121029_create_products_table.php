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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['product', 'service'])->default('product');
            $table->string('name');
            $table->longText('description')->nullable();
            $table->decimal('unit_price', 10, 2)->nullable();
            $table->unsignedBigInteger('tax_rate_id')->nullable();
            $table->foreign('tax_rate_id')->references('id')->on('tax_rates')->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
};
