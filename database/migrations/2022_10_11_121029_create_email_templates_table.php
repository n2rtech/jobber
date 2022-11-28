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
        Schema::create('email_templates', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['jobs', 'estimates', 'invoices', 'standard']);
            $table->enum('mode', ['confirmation', 'follow-up', 'standard']);
            $table->longText('subject')->nullable();
            $table->longText('message')->nullable();
            $table->longText('default_subject')->nullable();
            $table->longText('default_message')->nullable();
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
        Schema::dropIfExists('email_templates');
    }
};
