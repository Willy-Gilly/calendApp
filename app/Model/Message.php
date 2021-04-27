<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = "message";

    protected $fillable = [
        "userFrom", "userTo", "message", "isRead", "isTeamChat", "isStructureChat", "created_at", "updated_at",
    ];
}
