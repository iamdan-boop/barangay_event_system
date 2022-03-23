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
        Schema::create('business_clearances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('citizen_id')->constrained()->onDelete('cascade');
            $table->string('business_name');
            $table->string('address');
            $table->string('business_type');
            $table->string('manager');
            $table->string('residence_address');
            $table->string('applied_for');
            $table->string('cert_no');
            $table->string('or_no');
            $table->unsignedFloat('amount_paid');
            $table->string('control_no');
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
        Schema::dropIfExists('business_clearance');
    }
};
