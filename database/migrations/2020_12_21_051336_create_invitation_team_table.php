<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitationTeam', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->bigInteger('teamId');
            $table->boolean('isAccepted')->default(false); // deleted if refuse
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
        Schema::dropIfExists('invitationTeam');
    }
}
