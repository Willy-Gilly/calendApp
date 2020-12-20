<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /settings
    public function index()
    {
        return view('layouts.blank');
    }
}
