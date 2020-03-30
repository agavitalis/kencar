<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableVehiclePictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('link');

            // relation vehicle picture -> vehicle
            $table->integer('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')
                ->references('id')
                ->on('vehicles');

            $table->softDeletes();
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
        Schema::dropIfExists('vehicle_pictures');
    }
}
