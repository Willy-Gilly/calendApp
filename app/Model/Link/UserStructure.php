<?php

namespace App\Model\Link;

use Illuminate\Database\Eloquent\Model;

class UserStructure extends Model
{
    protected $table = "userstructure";

    protected $fillable = [
        "userId", "structureId",
        "created_at", "updated_at"
    ];
}
