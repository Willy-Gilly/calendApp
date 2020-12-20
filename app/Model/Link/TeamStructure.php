<?php

namespace App\Model\Link;

use Illuminate\Database\Eloquent\Model;

class TeamStructure extends Model
{
    protected $table = "teamstructure";

    protected $fillable = [
        "teamId", "structureId",
        "created_at", "updated_at"
    ];

}
