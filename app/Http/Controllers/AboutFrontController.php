<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutFrontController extends Controller
{
    //
    public $x = 1;

    public function index()
    {
        $rr = ++$this->x;
        return view('frontEnd.about',  compact('rr'));
    }
}
