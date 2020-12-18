<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalenderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calender', function (Blueprint $table) {
            $table->id();
            $table->integer('calenderOwnerType')->default(0); // 0 : personal, 1 : team, 2 : structure
            $table->string('name');
            $table->bigInteger('ownerId'); // Will search in user if calenderType is 0, in team if 1, in structure if 2
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
        Schema::dropIfExists('calender');
    }
}
