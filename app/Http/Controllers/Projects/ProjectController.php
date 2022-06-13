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
                $actionBtn = '<a href="' . Route('project.edit', $row) . '" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)"  data-toggle="modal" data-target="#staticBackdrop"  id="deleteBtn" data-id="' . $row->id . '" onClick="clickFinc()" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id_use' => 'required|numeric'
        ]);

        if (is_numeric($request->id_use)) {
            $project = Project::where('id', $request->id_use)->first();
            if (file_exists(public_path() . '/'  . $project->featureImage) && $project->featureImage != null) {
                unlink(public_path() . '/'  . $project->featureImage);
            }

            if (!$project->filename == null) {
                foreach ($project->filename as $file) {
                    if (file_exists(public_path() . '/'  . $file) && $file != null) {
                        unlink(public_path() . '/'  . $file);
                    }
                }
            }

            $project->delete();
        }
        return back();
    }

    public function index()
    {
        //
        return view('Dashboard.Projects.index');
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
        }

        if ($request->file('featureImage')) {
            $path = $this->ImageImport($request, 'featureImage');
            $project->featureImage = $path;
        }

        $project->save();


        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        return view('frontEnd.single-project', compact('project'));
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
        $oldImages = [];
        $project->update($request->except('_token', 'filename'));
        if ($request->file('filename')) {
            if ($project->filename != null) {
                $oldImages = $project->filename;
            }
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
        }
        if ($request->file('featureImage')) {
            if ($project->featureImage != null) {
                $oldFeatureImage =  $project->featureImage;
            }
            $path = $this->ImageImport($request, 'featureImage');
            $project->featureImage = $path;
        }
        $project->save();



        foreach ($oldImages as $image) {
            # code...
            $this->UnlinkImage($image);
        }
        $this->UnlinkImage($oldFeatureImage);
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
