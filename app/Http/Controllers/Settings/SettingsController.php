<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
            $oldfavicon = $setting->favicon;
            $file = $request->file('favicon');
            $name = Str::uuid() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $setting->favicon = $filePath;
            $setting->save();


            if (Storage::disk('s3')->exists($oldfavicon)) {
                Storage::disk('s3')->delete($oldfavicon);
            }
        }
        if ($request->file('logo')) {
            $oldlogo = $setting->logo;
            $file = $request->file('logo');
            $name = Str::uuid() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $setting->logo = $filePath;
            $setting->save();


            if (Storage::disk('s3')->exists($oldlogo)) {
                Storage::disk('s3')->delete($oldlogo);
            }
        }
        if ($request->file('persnalImage')) {
            $oldpersnalImage = $setting->persnalImage;
            $file = $request->file('persnalImage');
            $name = Str::uuid() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $setting->persnalImage = $filePath;
            $setting->save();


            if (Storage::disk('s3')->exists($oldpersnalImage)) {
                Storage::disk('s3')->delete($oldpersnalImage);
            }
        }
        if ($request->file('avatar')) {
            $oldavatar = $setting->avatar;
            $file = $request->file('avatar');
            $name = Str::uuid() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $setting->avatar = $filePath;
            $setting->save();


            if (Storage::disk('s3')->exists($oldavatar)) {
                Storage::disk('s3')->delete($oldavatar);
            }
        }
        if ($request->file('bgImage')) {
            $oldbgImage = $setting->bgImage;
            $file = $request->file('bgImage');
            $name = Str::uuid() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $setting->bgImage = $filePath;
            $setting->save();


            if (Storage::disk('s3')->exists($oldbgImage)) {
                Storage::disk('s3')->delete($oldbgImage);
            }
        }
        if ($request->file('cv')) {
            $oldcv = $setting->cv;
            $file = $request->file('cv');
            $name = Str::uuid() . $file->getClientOriginalName();
            $filePath = 'images/' . $name;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $setting->cv = $filePath;
            $setting->save();


            if (Storage::disk('s3')->exists($oldcv)) {
                Storage::disk('s3')->delete($oldcv);
            }
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
}
