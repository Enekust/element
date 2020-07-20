<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_attributes', function (Blueprint $table) {
            $table->integer('id_phone_attributes');
            $table->string('Device_type');
            $table->string('Manufacturer');
            $table->string('Model');
            $table->string('Color');
            $table->string('Screen_diagonal');
            $table->string('Screen_resolution');
            $table->string('OS');
            $table->string('CPU');
            $table->string('RAM');
            $table->string('Inner_memory');
            $table->string('Wi-Fi');
            $table->string('Bluetooth');
            $table->string('NFC');
            $table->string('Equipment');
            $table->string('Battery_type');
            $table->string('Battery_capacity');
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
        Schema::dropIfExists('phone_attributes');
    }
}
