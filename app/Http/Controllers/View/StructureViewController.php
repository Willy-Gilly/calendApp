<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StructureViewController extends ViewController
{
    public function __construct()
    {
        parent::__construct();
    }
    // url : /structure/view
    public function view()
    {
        return view('layouts.blank');
    }
    // url : /structure/join
    public function join()
    {
        return view('layouts.blank');
    }
    // url : /structure/create
    public function create()
    {
        return view('layouts.blank');
    }
}
