<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptop_attributes', function (Blueprint $table) {
            $table->integer('id_laptop_attributes');
            $table->string('Device_type');
            $table->string('Manufacturer');
            $table->string('Model');
            $table->string('Color');
            $table->string('Screen_diagonal');
            $table->string('Screen_resolution');
            $table->string('CPU');
            $table->string('RAM_type');
            $table->string('RAM');
            $table->string('HDD');
            $table->string('SSD');
            $table->string('Graphics_card_model');
            $table->string('Wireless_internet_access');
            $table->string('bluetooth');
            $table->string('Battery_type');
            $table->string('Battery_capacity');
            $table->string('Equipment');
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
        Schema::dropIfExists('laptop_attributes');
    }
}
