<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Pages\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Dashboard.About.index');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
        $about->update($request->except('_token', 'images'));
        $oldImage = [];
        if ($request->file('images')) {
            if ($about->images != null) {
                $oldImage = $about->images;
            }
            $files = $request->file('images');
            $images = [];
            // dd($files);/
            foreach ($files as $file) {
                $filename = $file->getClientOriginalName();
                $file_path = Str::uuid() . $filename;
                $file->move(public_path('images/'), $file_path);
                $path = 'images/' . $file_path;
                array_push($images, $path);
            }
            $about->images = $images;
        }
        $about->save();

        foreach ($oldImage as $image) {
            # code...
            $this->UnlinkImage($image);
        }
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

    function UnlinkImage($image_path)
    {
        if (File::exists($image_path)) {
            //File::delete($image_path);
            unlink($image_path);
        }
    }
}
