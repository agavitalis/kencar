<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::create('reservation', function (Blueprint $table) {
        $table->increments('id');
        $table->date('r_date');
        $table->date('p_date');
        $table->integer('vehicle_id')->unsigned();
        $table->integer('user_id')->unsigned();
        $table->integer('p_location')->unsigned();
        $table->integer('r_location')->unsigned();
        $table->softDeletes();
        $table->timestamps();
        
        $table->foreign('vehicle_id')
            ->references('id')
            ->on('vehicles');

        $table->foreign('user_id')
            ->references('id')
            ->on('users');

        $table->foreign('p_location')
            ->references('id')
            ->on('location');
        $table->foreign('r_location')
            ->references('id')
            ->on('location');
        
        
        
    });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
