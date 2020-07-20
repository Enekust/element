<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabletsAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tablets_attributes', function (Blueprint $table) {
            $table->integer('id_tablets_attributes');
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
        Schema::dropIfExists('tablets_attributes');
    }
}
