<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Model\NotificationController;

abstract class ViewController extends Controller
{
    protected $index = "home";

    /*
     * Change the language in the page
     */
    public function __construct()
    {
        $lang = session()->get('lang');
        $this->middleware("setLocale:".$lang);
    }

    public function home()
    {
        if(session()->get('notifications') == null)
        {
            NotificationController::initNotif();
        }
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

// --------------- Testing Error Pages --------------
    public function getNotFoundPage()
    {
        return view('errors.404');
    }

    public function getRightErrorPage()
    {
        return view('errors.403');
    }

    public function getUnauthorizedPage()
    {
        return view('errors.401');
    }

    public function getAuthenticationTimoutPage()
    {
        return view('errors.419');
    }

    public function getTooManyRequestPage()
    {
        return view('errors.429');
    }

    public function getInternalErrorPage()
    {
        return view('errors.500');
    }

    public function getServiceUnavailablePage()
    {
        return view('errors.503');
    }
// ------------ End Testing Error pages --------------------
}
