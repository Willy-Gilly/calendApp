<?php

namespace App\Model\Invitation;

use Illuminate\Database\Eloquent\Model;

class StructureInvitation extends Model
{
    protected $table = "invitationstructure";

    protected $fillable = [
        "userId", "structureId", "isAccepted", "created_at", "updated_at",
    ];
}
