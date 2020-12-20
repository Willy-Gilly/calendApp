<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /team/view
    public function view()
    {
        return view('layouts.blank');
    }
    // url : /team/join
    public function join()
    {
        return view('layouts.blank');
    }
    // url : /team/create
    public function create()
    {
        return view('layouts.blank');
    }
}
