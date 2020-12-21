<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    protected $table = "structure";

    protected $fillable = [
        "name", "ownerId", "emailReference", "structureLogo",
        "toggleInvitationLink", "invitationLink",
        "created_at", "updated_at",
    ];
}
