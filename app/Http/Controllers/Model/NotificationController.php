<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Model\Notification;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public static function initNotif()
    {
        session(["notifications" => array()]);
    }

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
            $notifications = array();
            $notifAlreadySent = session()->get('notifications');
            foreach($arr as $notif)
            {
                if(!in_array($notif->getAttributes()["id"],$notifAlreadySent))
                {
                    array_push($notifications,["notificationText" => $notif->getAttributes()["textDisplayed"],
                        "notificationType" => $notif->getAttributes()["notificationType"],
                        "notificationId" => $notif->getAttributes()["id"],
                        ]);

                    array_push($notifAlreadySent,$notif->getAttributes()["id"]); // here we add the notif id into the session variable
                    session(["notifications" => $notifAlreadySent]);

                }
            }
        }
        return $notifications ?? [["textDisplayed" => "You must loggin to access to this function"]];
    }

    public static function getUnseenNotification()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $arr = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false]])->get()->all();
            $notifications = array();
            foreach($arr as $notif)
            {
                array_push($notifications,["notificationText" => $notif->getAttributes()["textDisplayed"],
                    "notificationType" => $notif->getAttributes()["notificationType"],
                    "notificationId" => $notif->getAttributes()["id"],
                ]);
            }
        }
        return $notifications ?? [["textDisplayed" => "You must loggin to access to this function"]];
    }
}
