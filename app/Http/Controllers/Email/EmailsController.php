<?php

namespace App\Http\Controllers\Email;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public static function sendTestEmail()
    {
        Mail::to('willygilly85@gmail.com')->send(new TestMail());
    }
}
