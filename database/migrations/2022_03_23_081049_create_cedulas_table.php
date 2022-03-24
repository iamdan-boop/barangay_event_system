<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cedulas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('citizen_id');
            $table->foreignId('certificate_id');
            $table->string('tin_cedula');
            $table->string('icr');
            $table->string('birthplace_cedula');
            $table->string('height_cedula');
            $table->string('weight_cedula');
            $table->unsignedFloat('basictax');
            $table->unsignedFloat('grossreceipt_taxable');
            $table->unsignedFloat('salary_taxable');
            $table->unsignedFloat('income_taxable');
            $table->unsignedFloat('interest_cedula');
            $table->integer('status_id');
            $table->string('control_number');
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
        Schema::dropIfExists('cedulas');
    }
};
