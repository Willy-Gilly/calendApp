<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
}
