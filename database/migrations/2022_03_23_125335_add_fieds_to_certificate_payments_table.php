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
        Schema::table('certificate_payments', function (Blueprint $table) {
            $table->string('drawee_bank')->nullable();
            $table->string('drawee_bank_number')->nullable();
            $table->date('drawee_bank_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certificate_payments', function (Blueprint $table) {
            //
        });
    }
};
