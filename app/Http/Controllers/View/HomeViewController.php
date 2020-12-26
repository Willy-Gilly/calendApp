<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Model\NotificationController;
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
        $number = '';
        return strval($number);
    }

    public function getMenuNumberNotification()
    {
        $number = 0;
        return $number .' '. __('home.notification');
    }

    public function getMenuNumberNewMessage()
    {
        $number = 0;
        $icon = '<i class="fas fa-envelope mr-2"></i>';
        return $icon.$number .' '. __('home.message');
    }

    public function getMenuNumberNewFriendRequest()
    {
        $number = 0;
        $icon = '<i class="fas fa-users mr-2"></i>';
        return $icon.$number .' '. __('home.friendRequest');
    }

    public function getMenuNumberNewInvitation()
    {
        $number = 0;
        $icon = '<i class="fas fa-file mr-2"></i>';
        return $icon.$number .' '. __('home.invitation');
    }
}
