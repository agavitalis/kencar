<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PriceRange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_range', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumInteger('amount');
            $table->integer('rent_time_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('rent_time_id')
                ->references('id')
                ->on('rent_time');
            $table->foreign('category_id')
                ->references('id')
                ->on('vehicle_categories');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_range');
    }
}
