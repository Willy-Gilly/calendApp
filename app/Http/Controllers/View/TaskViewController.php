<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /task/view
    public function view()
    {
        return view('layouts.blank');
    }
    // url : /task/create
    public function create()
    {
        return view('layouts.blank');
    }
}
