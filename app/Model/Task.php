<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "task";

    protected $fillable = [
        "calenderPeriodId", "name", "color", // default = "#ffffff"
        "description", "priority", /*  0 : default none
                                 1 : low
                                 2 : medium
                                 3 : important
                                 4 : very important
                                 5 : urgent ! */
        "requiredTaskId", // if null, then no task required
        "created_at", "updated_at",
    ];
}
