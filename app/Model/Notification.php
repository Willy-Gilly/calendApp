<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = "notification";

    protected $fillable = [
        "userId", "notificationType", // 0 : message; 1 : team invite, 2 : structure invite; 3 : period start;
        "textDisplayed", "isRead",
        "created_at", "updated_at",
    ];
}
