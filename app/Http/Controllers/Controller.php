<?php

namespace App\Http\Controllers;

use App\Models\Settings\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Artesaos\SEOTools\Facades\SEOMeta;
// use Artesaos\SEOTools\Facades\OpenGraph;
// use Artesaos\SEOTools\Facades\TwitterCard;
// use Artesaos\SEOTools\Facades\JsonLd;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $setting = Setting::all()->first();
        SEOMeta::setTitle($setting->jobTitle);
        SEOMeta::setDescription($setting->description);
        SEOMeta::addMeta('article:published_time', $setting->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword(['key1', 'key2', 'key3']);
        return view('index');
    }
}
