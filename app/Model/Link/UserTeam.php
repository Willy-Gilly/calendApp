<?php

namespace App\Model\Link;

use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    protected $table = "userteam";

    protected $fillable = [
        "userId", "teamId",
        "created_at", "updated_at",
    ];
}
