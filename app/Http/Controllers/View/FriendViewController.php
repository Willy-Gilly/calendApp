<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FriendViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /friend/view
    public function view()
    {
        return view('layouts.blank');
    }
    // url : /friend/add
    public function add()
    {
        return view('layouts.blank');
    }
    // url : /friend/message
    public function message()
    {
        return view('layouts.blank');
    }
}
