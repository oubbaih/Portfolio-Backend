<?php

use App\Http\Controllers\AboutFrontController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\SitemapController;
use App\Models\Project\Project;
use App\Models\Settings\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// CV Download Setup 

Route::get('/download', function () {
  $setting = Setting::all()->first();
  $attachment = $setting->cv;

  $header = array(
    'Content-Type'        => 'application/pdf',

    'Content-Disposition' => 'attachment; filename="' . 'OubbaihLahcenCv.pdf' . '"',
  );
  if (Storage::disk('s3')->exists($setting->cv)) {
    return Response::make(Storage::disk('s3')->get($attachment), 200, $header);
  }
});





//sitemap generate 
Route::get('sitemap.xml', SitemapController::class . '@index');
// Route::post('/', Controller::class . '@store')->name('home.store');
Route::get('/', Controller::class . '@index')->name('home');
//About Page Route
Route::get('/about', AboutFrontController::class . '@index')->name('about.front');
// contact form view
Route::get('/contact', ContactController::class . '@front')->name('contact.front');


// show Sing Project 
Route::get('/project/{project}', FrontController::class . '@show')->name('project.view');
Route::get('/project', FrontController::class . '@front')->name('project.front');

Auth::routes();
Route::prefix('dashboard')->middleware(['auth'])->group(function () {
  Route::get('/', DashboardController::class . '@index')->name('dashboard');
  //Projects Additional Routes 
  Route::get('project/list', ProjectController::class . '@getAllProjects')->name('project.list');
  Route::delete('project/delete', ProjectController::class . '@delete')->name('project.delete');
  //Contact Additional Routes 
  Route::get('contact/list', ContactController::class . '@getContactLists')->name('contact.list');
  Route::delete('contact/delete', ContactController::class . '@delete')->name('conatct.delete');
  Route::resources([
    'setting' => SettingsController::class,
    'about' => AboutController::class,
    'project' => ProjectController::class,
    'contact' => ContactController::class,
  ]);
});
