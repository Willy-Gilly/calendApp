<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Friendlist extends Model
{
    //Must delete the model if the invitation is refused.
    protected $table = "friendlist";

    protected $fillable = [
        "userOne", "userTwo", "isAccepted", //
        "created_at", "updated_at"
    ];
}
