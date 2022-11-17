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
        Schema::create('pendonor_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendonor_category_id');
            $table->foreign('pendonor_category_id')->references('id')->on('pendonor_category')->onDelete('cascade')->onUpdate('cascade');
            $table->string('card_number');
            $table->string('name');
            $table->string('gender');
            $table->string('no_ktp_sim');
            $table->string('address');
            $table->string('phone_number');
            $table->string('profession');
            $table->string('office_address');
            $table->string('office_phone_number');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->string('number_of_donors');
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
        Schema::dropIfExists('pendonor_data');
    }
};
