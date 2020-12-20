<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TaskAttribution extends Model
{
    protected $table = "taskattribution";

    protected $fillable = [
        "taskId", "assignedId", //can be user, team or structure depending on assignedType
        "assignedType", /*  0 : user
                         1 : team
                         2 : structure */
        "created_at", "updated_at",
    ];
}
