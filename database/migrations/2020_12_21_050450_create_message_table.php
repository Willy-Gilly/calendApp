<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userFrom');
            $table->bigInteger('userTo'); // in case of message to team chat or structure chat, use id of structure/team
            $table->longText('message')->nullable();
            $table->boolean('isRead')->default(false);
            $table->boolean('isTeamChat')->default(false);
            $table->boolean('isStructureChat')->default(false);
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
        Schema::dropIfExists('message');
    }
}
