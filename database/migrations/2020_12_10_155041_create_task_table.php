<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('calenderPeriodId');
            $table->string('name');
            $table->string('color')->nullable();
            $table->longText('description')->nullable();
            $table->integer('priority')->default(0); //0 : none 1 : low 2 : medium 3 : important 4 : very important 5 : urgent !
            $table->boolean('requiredTaskId')->nullable();
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
        Schema::dropIfExists('task');
    }
}
