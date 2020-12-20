<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = "team";

    protected $fillable = [
        "structureId", //can be null if no structure
        "leaderId", //must be a user
        "name", "teamLogo",
        "created_at", "updated_at"
    ];
}
