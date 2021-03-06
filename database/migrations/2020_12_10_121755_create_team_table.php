<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('structureId')->nullable();
            $table->bigInteger('leaderId'); // must be a user
            $table->string('name');
            $table->string('teamLogo')->nullable();
            $table->boolean('toggleInvitationLink')->default(false);
            $table->string('invitationlink')->unique()->nullable();
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
        Schema::dropIfExists('team');
    }
}
