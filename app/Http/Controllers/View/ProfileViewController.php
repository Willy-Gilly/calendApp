<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('profile');
    }
}
