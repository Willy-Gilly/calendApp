<?php

namespace App\Model\Invitation;

use Illuminate\Database\Eloquent\Model;

class TeamInvitation extends Model
{
    protected $table = "invitationteam";

    protected $fillable = [
        "userId", "teamId", "isAccepted","created_at","updated_at"
    ];
}
