<?php

namespace App\Http\Controllers\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project\Project;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Yarja DataTable Setup 
    public function getAllProjects(Request $request)
    {

        $data = Project::select('*');
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $actionBtn = '<a href="' . Route('project.edit', $row) . '" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function index()
    {
        //
        $projects = Project::all();
        return view('Dashboard.Projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.Projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $project = Project::create($request->except('_token', 'filename'));

        if ($request->file('filename')) {
            $files = $request->file('filename');
            $images = [];
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file_path = Str::uuid() . $filename;
                $file->move(public_path('images/'), $file_path);
                $path = 'images/' . $file_path;
                array_push($images, $path);
            }
            $project->filename = $images;
            $project->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Project::findOrFail($id);
        return view('Dashboard.Projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
        $project->update($request->except('_token', 'filename'));
        if ($request->file('filename')) {
            $files = $request->file('filename');
            $images = [];
            foreach ($files as $file) {
                if ($project->filename) {
                    foreach ($project->filename as $image) {
                        $this->UnlinkImage($image);
                    }
                }
                $filename = $file->getClientOriginalName();
                $file_path = Str::uuid() . $filename;
                $file->move(public_path('images/'), $file_path);
                $path = 'images/' . $file_path;
                array_push($images, $path);
            }
            $project->filename = $images;
        }
        $project->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    function ImageImport($request, $name)
    {
        $file = $request->file($name);
        $filename = $file->getClientOriginalName();
        $file_path = Str::uuid() . $filename;
        $file->move(public_path('images/'), $file_path);
        $path = 'images/' . $file_path;
        return $path;
    }
    function UnlinkImage($image_path)
    {
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
    }
}
