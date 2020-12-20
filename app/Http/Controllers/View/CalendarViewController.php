<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    //url : /calendar/view
    public function viewCalendar()
    {
        return view('layouts.blank');
    }
    //url : /calendar/create
    public function createCalendar()
    {
        return view('layouts.blank');
    }
    //url : /calendar/period/view
    public function viewPeriod()
    {
        return view('layouts.blank');
    }
    //url : /calendar/period/view
    public function createPeriod()
    {
        return view('layouts.blank');
    }
}
