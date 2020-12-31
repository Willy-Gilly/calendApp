<?php

namespace App\Http\Controllers\View;

class NotificationViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /notification/seeAll
    public function index()
    {
        return view('notifications');
    }
    // url : /notification/config
    public function config()
    {
        return view('layouts.blank');
    }
}
