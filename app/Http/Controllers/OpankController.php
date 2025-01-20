<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpankController extends Controller
{
    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    public function page4()
    {
        return view('page4');
    }
    public function main()
    {
        return view('template\main');
    }
};