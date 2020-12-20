<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    protected $table = "calender";

    protected $fillable = [
        "calenderOwnerType", "name", "ownerId", //must be user
        "created_at", "updated_at"
    ];
}
