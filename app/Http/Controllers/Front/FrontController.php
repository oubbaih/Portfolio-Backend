<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function show(Project $project)
    {
        return view('frontEnd.single-project', compact('project'));
    }
    public function front()
    {
        $projects = Project::all();
        return view('frontEnd.projects', compact('projects'));
    }
}
