<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitationStructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitationStructure', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId');
            $table->bigInteger('structureId');
            $table->boolean('isAccepted')->default(false); // delete if decline
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
        Schema::dropIfExists('invitationStructure');
    }
}
