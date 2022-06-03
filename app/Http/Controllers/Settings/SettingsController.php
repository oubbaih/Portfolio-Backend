<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('Dashboard.Settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function update(Request $request, Setting $setting)
    {
        //
        $setting->update($request->except('_token', 'logo', 'favicon', 'personalImage', 'bgImage'));
        if ($request->file('favicon')) {
            $this->UnlinkImage($setting->favicon);
            $path = $this->ImageImport($request, 'favicon');
            $setting->favicon = $path;
        }
        if ($request->file('logo')) {
            $this->UnlinkImage($setting->logo);

            $path = $this->ImageImport($request, 'logo');
            $setting->logo = $path;
        }
        if ($request->file('persnalImage')) {
            $this->UnlinkImage($setting->persnalImage);

            $path = $this->ImageImport($request, 'persnalImage');
            $setting->persnalImage = $path;
        }
        if ($request->file('bgImage')) {
            $this->UnlinkImage($setting->bgImage);

            $path = $this->ImageImport($request, 'bgImage');
            $setting->bgImage = $path;
        }
        $setting->save();
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
        $file->move(public_path('images/'), $filename);
        $path = 'images/' . $filename;
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
