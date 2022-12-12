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
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('pendonor_category_id');
            $table->foreign('pendonor_category_id')->references('id')->on('pendonor_category')->onDelete('cascade')->onUpdate('cascade');
            $table->string('card_number')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('no_ktp_sim')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profession')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_phone_number')->nullable();
            $table->string('place_birth')->nullable();
            $table->date('date_birth')->nullable();
            $table->string('number_of_donors')->nullable();
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
