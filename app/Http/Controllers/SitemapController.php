<?php

namespace App\Http\Controllers;

use App\Models\Project\Project;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    //

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return response()->view('sitemap', compact('projects'))
            ->header('Content-Type', 'text/xml');
    }
}
