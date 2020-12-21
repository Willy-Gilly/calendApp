<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Notification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * @param int $id
     * @return Notification|array|Collection|Model
     */
    public static function getFromId(int $id): array|Collection|Model|Notification
    {
        return Notification::all()->find($id);
    }

    public static function getNewNotification()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $arr = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false]])->get()->all();
        }
        return $arr ?? "";
    }
}
