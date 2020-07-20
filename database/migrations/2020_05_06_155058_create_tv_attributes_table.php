<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tv_attributes', function (Blueprint $table) {
            $table->integer('id_tv_attributes');
            $table->string('TV_type');
            $table->string('Manufacturer');
            $table->string('Model');
            $table->string('Screen_diagonal');
            $table->string('Screen_resolution');
            $table->string('Screen_format');
            $table->string('OS');
            $table->string('3D_support');
            $table->string('Wi-Fi');
            $table->string('Bluetooth');
            $table->string('Wall_mount_option');
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
        Schema::dropIfExists('tv_attributes');
    }
}
