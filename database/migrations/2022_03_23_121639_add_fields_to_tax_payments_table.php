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
        Schema::table('tax_payments', function (Blueprint $table) {
            $table->string('nature_of_collection');
            $table->string('account_code');
            $table->unsignedFloat('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tax_payments', function (Blueprint $table) {
            //
        });
    }
};
