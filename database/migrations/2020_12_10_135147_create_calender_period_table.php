<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalenderPeriodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calenderPeriod', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('calenderId');
            $table->string('name');
            $table->string('color');
            $table->boolean('isRepetitive');
            $table->integer('repetitiveType');
            $table->integer('ifDaily')->nullable(); //0 : monday 1 : tuesday etc..
            $table->integer('ifMonthly')->nullable(); //0 : january 1 : february etc..
            $table->date('dateStart')->nullable();
            $table->date('dateEnd')->nullable();
            $table->time('hourStart')->nullable();
            $table->time('hourEnd')->nullable();
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
        Schema::dropIfExists('calenderPeriod');
    }
}
