<?php

namespace App\Providers;

use App\Models\Pages\About;
use App\Models\Project\Project;
use App\Models\Settings\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (Schema::hasTable('settings')) {
            $settings = Setting::CheckSettings();
            // $about = About::CheckAboutPages();
            $projects = Project::all()->take(4);
            view()->share([
                'setting' => $settings,
                'projects' => $projects,
                // 'about' => $about,
            ]);
        }
    }
}
