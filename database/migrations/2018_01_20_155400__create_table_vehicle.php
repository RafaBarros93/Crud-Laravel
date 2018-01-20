<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVehicle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_provider');
            $table->string('brand',255)->nullable();
            $table->string('model',255)->nullable();
            $table->integer('year')->unsigned()->nullable();
            $table->string('plate')->nullable()->length(20);
            $table->string('color',20)->nullable();
            $table->foreign('id_provider')->references('id')->on('provider');
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
        Schema::dropIfExists('vehicle');
    }
}
