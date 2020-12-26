<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Model\NotificationController;
use Illuminate\Support\Facades\Auth;
use Throwable;

class HomeViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function addNotification()
    {
        $notifs = NotificationController::getNewNotification();
        try {
            return view('divUpdate.newNotification',["notifs" => $notifs])->render();
        } catch (Throwable $e) {
            return '<p>Error while updating Div</p>';
        }
    }

    public function getUnseenNotification()
    {
        $notifs = NotificationController::getUnseenNotification();
        try {
            return view('divUpdate.newNotification',["notifs" => $notifs])->render();
        } catch (Throwable $e) {
            return '<p>Error while updating Div</p>';
        }
    }

    public function getMenuLabelBoxNotification()
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
        return strval($number);
    }

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

    public function getMenuNumberNewMessage()
    {
        $number = NotificationController::getNumberNewMessage();
        $icon = '<i class="fas fa-envelope mr-2"></i>';
        return $icon.strval($number).' '. __('home.message');
    }

    public function getMenuNumberNewFriendRequest()
    {
        $number = NotificationController::getNumberFriendRequest();
        $icon = '<i class="fas fa-users mr-2"></i>';
        return $icon.$number .' '. __('home.friendRequest');
    }

    public function getMenuNumberNewInvitation()
    {
        $number = NotificationController::getNumberNewStructureInvite()+NotificationController::getNumberNewTeamInvite();
        $icon = '<i class="fas fa-file mr-2"></i>';
        return $icon.$number .' '. __('home.invitation');
    }

    public function getNotificationName($notificationType = 0)
    {
        if($notificationType > 4 || $notificationType < 0)
        {
            $notificationType = 0;
        }
        return __('home.notificationType'.$notificationType);
    }

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
