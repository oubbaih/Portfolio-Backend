<?php

namespace App\Http\Controllers;

use App\Models\Settings\Setting;
use Illuminate\Http\Request;


class AboutFrontController extends Controller
{

    public function index()
    {

        return view('frontEnd.about');
    }
}
