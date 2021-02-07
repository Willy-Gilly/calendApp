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

    /**
     * @return array|\string[][]
     * only get the new ones, not those that are already received.
     */
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
        return $notifications ?? [["textDisplayed" => "You must login to access to this function"]];
    }

    /**
     * @return array|\string[][]
     * the difference between the first one is that we will get ALL unseen notification, even if that one is already sent
     */
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
        return $notifications ?? [["textDisplayed" => "You must login to access to this function"]];
    }

    public static function getNumberNewMessage()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $nb = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false],["notificationType","=","0"]])->count();
        }
        return $nb ?? [["textDisplayed" => "You must login to access to this function"]];
    }
    public static function getNumberNewTeamInvite()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $nb = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false],["notificationType","=","1"]])->count();
        }
        return $nb ?? [["textDisplayed" => "You must login to access to this function"]];
    }
    public static function getNumberNewStructureInvite()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $nb = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false],["notificationType","=","2"]])->count();
        }
        return $nb ?? [["textDisplayed" => "You must login to access to this function"]];
    }
    public static function getNumberFriendRequest()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $nb = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false],["notificationType","=","3"]])->count();
        }
        return $nb ?? [["textDisplayed" => "You must login to access to this function"]];
    }

    /**
     * @return array
     */
    public static function getFriendRequests()
    {
        if(Auth::user())
        {
            $authId = Auth::id();
            $query = Notification::query()->select()->where([['userId',"=",$authId],["isRead","=",false],["notificationType","=","0"]])->get();
        }
        $arr = [];
        foreach($query ?? [] as $oneLine)
        {
            $attributes = $oneLine->getAttributes();
            //$friendRequest = FriendlistController::getFromId($attributes["originalId"])->getAttributes();
            array_push($arr,[
                "id" => $attributes["id"],
                "textDisplayed" => $attributes["textDisplayed"],
                "isRead" => $attributes["isRead"],
                //"friendRequest" => $friendRequest,
            ]);
        }
        return $arr;
    }
}
