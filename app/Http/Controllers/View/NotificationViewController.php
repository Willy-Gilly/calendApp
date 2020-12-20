<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /notification/seeAll
    public function index()
    {
        return view('layouts.blank');
    }
    // url : /notification/config
    public function config()
    {
        return view('layouts.blank');
    }
}
