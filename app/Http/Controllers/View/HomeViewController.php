<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\NotificationController;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            return view('divUpdate.testNotif',["notifs" => $notifs])->render();
        } catch (\Throwable $e) {
            return '<p>Error while updating Div</p>';
        }
    }
}
