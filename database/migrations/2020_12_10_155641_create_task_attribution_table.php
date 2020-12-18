<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskAttributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskAttribution', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('taskId');
            $table->bigInteger('assignedId'); // can be user, team or structure
            $table->integer('assignedType'); // 0 : user 1 : team 2 : structure
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
        Schema::dropIfExists('taskAttribution');
    }
}
