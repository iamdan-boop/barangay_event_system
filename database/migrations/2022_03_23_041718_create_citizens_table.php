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
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->integer('status_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('contact');
            $table->string('gender');
            $table->date('dob');
            $table->string('status');
            $table->string('citizenship');
            $table->string('occupation');
            $table->string('zone');
            $table->string('address');
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
        Schema::dropIfExists('citizens');
    }
};
