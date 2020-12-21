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
            return view('divUpdate.getUnseenNotification',["notifs" => $notifs])->render();
        } catch (Throwable $e) {
            return '<p>Error while updating Div</p>';
        }
    }
}
