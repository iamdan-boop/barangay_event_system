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
        Schema::create('tax_payments', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->foreignId('citizen_id')->constrained();
            $table->string('fund');
            $table->string('payment_method');
            $table->string('drawee_bank')->nullable();
            $table->string('drawee_bank_number')->nullable();
            $table->date('drawee_bank_date')->nullable();
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
        Schema::dropIfExists('tax_payments');
    }
};
