<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $table = "calenderperiod";

    protected $fillable = [
        "calenderId", "name", "color", //color is set to #ffffff default
        "isRepetitive", "repetitiveType", // 0 : daily 1 : weekly 2 : monthly 3 : annually // If annually : repeat on dateStart and dateEnd
        "ifDaily", // 0 : monday 1 : tuesday etc..
        "ifMonthly", // 0 : january 1 : february etc..
        "dateStart", "dateEnd", //  YYYY-MM-DD null if daily, monthly only take the day number
        "hourStart", "hourEnd", // HH:MM:SS
        "created_at", "updated_at",
    ];
}
