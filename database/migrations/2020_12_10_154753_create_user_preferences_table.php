<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userPreferences', function (Blueprint $table) {
            $table->id();
            $table->integer('theme')->default('0'); // 0 : default : white 1 : gray 2 : dark
            $table->boolean('notificationWeb')->default(false);
            $table->boolean('notificationDesk')->default(false);
            $table->boolean('notificationMobile')->default(false);
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
        Schema::dropIfExists('userPreferences');
    }
}
