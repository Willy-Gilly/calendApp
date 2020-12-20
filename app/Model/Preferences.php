<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Preferences extends Model
{
    //The ID of one Model is the same ID of the User
    //ID from user == ID from Preferences
    protected $table = "userpreferences";

    protected $fillable = [
        "theme", /*  0 : default white
                1 : gray
                2 : dark */
        "notificationWeb", // default false
        "notificationDesk", // default false
        "notificationMobile", // default false
        "created_at", "updated_at"
    ];
}
