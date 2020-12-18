<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalenderPermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calenderPermission', function (Blueprint $table) {
            $table->id();
            $table->integer('permissionType');
            /*
             * from user on structure : 0
             * from team on structure : 1
             * from team on team : 2
             * from user on team : 3
             * from structure on team : 4
             * from team on user : 5
             * from structure on user : 6
             */
            $table->bigInteger('fromId'); //  can be user, team or structure
            $table->bigInteger('onId');  // can be user, team or structure
            $table->integer('permissionValue');
            /*
             *  0 : manage + (manage including the "to" 's secret datas) (risky)
             *  1 : manage (attribution, invitation, moving)
             *  2 : self (nothing except self action)
             */
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
        Schema::dropIfExists('calenderPermission');
    }
}
