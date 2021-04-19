<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Model\NotificationController;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Throwable;

class HomeViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    //Don't use this one
    public function addNotification()
    {
        $notifs = NotificationController::getNewNotification();
        try {
            return view('divUpdate.newNotification',["notifs" => $notifs])->render();
        } catch (Throwable $e) {
            return '<p>Error while updating Div</p>';
        }
    }
    //Don't use this one
    public function getUnseenNotification()
    {
        $notifs = NotificationController::getUnseenNotification();
        try {
            return view('divUpdate.newNotification',["notifs" => $notifs])->render();
        } catch (Throwable $e) {
            return '<p>Error while updating Div</p>';
        }
    }

    /**
     * @return string
     * The number of the span in notif icon menu
     */
    public function getMenuLabelBoxNotification()
    {
        $arr = NotificationController::getUnseenNotification();
        $nb = count($arr);
        if($nb != 0) // if number, it will display the number
        {
            $number = $nb;
        }
        else // else, return empty string so it makes the number disappear
        {
            $number = '';
        }
        return strval($number);
    }

    /**
     * @return string
     * get the text when opening notif box
     */
    public function getMenuNumberNotification()
    {
        $arr = NotificationController::getUnseenNotification();
        $nb = count($arr);
        if($nb != 0)
        {
            $number = $nb;
        }
        else
        {
            $number = '';
        }
        return strval($number).' '. __('home.notification');
    }

    /**
     * @return string
     * get number of new messages when opening notif box
     */
    public function getMenuNumberNewMessage()
    {
        $number = NotificationController::getNumberNewMessage();
        $icon = '<i class="fas fa-envelope mr-2"></i>';
        return $icon.strval($number).' '. __('home.message');
    }

    /**
     * @return string
     * get number of new friend requests when opening notif box
     */
    public function getMenuNumberNewFriendRequest()
    {
        $number = NotificationController::getNumberFriendRequest();
        $icon = '<i class="fas fa-users mr-2"></i>';
        return $icon.$number .' '. __('home.friendRequest');
    }

    /**
     * @return string
     * get number of new invitation when opening notif box
     */
    public function getMenuNumberNewInvitation()
    {
        $number = NotificationController::getNumberNewStructureInvite()+NotificationController::getNumberNewTeamInvite();
        $icon = '<i class="fas fa-file mr-2"></i>';
        return $icon.$number .' '. __('home.invitation');
    }

    /**
     * @param int $notificationType
     * @return array|Application|\Illuminate\Contracts\Translation\Translator|string|null
     * used to get te text of the notification type correctly translated when receiving a notification (alert)
     */
    public function getNotificationName($notificationType = 0)
    {
        if($notificationType > 4 || $notificationType < 0)
        {
            $notificationType = 0;
        }
        return __('home.notificationType'.$notificationType);
    }

    /**
     * @param int $notifId
     * @return array|Application|\Illuminate\Contracts\Translation\Translator|mixed|string|null
     * get the text of the notification (alert)
     */
    public function getNotificationText($notifId = 0)
    {
        $notif = NotificationController::getFromId($notifId);
        if($notif->getAttributes()["userId"] == Auth::id())
        {
            return $notif->getAttributes()["textDisplayed"];
        }
        else
        {
            return __('home.internalError');
        }
    }
}
