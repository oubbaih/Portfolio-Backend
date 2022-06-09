<?php

use App\Http\Controllers\AboutFrontController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Pages\AboutController;
use App\Http\Controllers\Projects\ProjectController;
use App\Http\Controllers\Settings\SettingsController;
use Illuminate\Support\Facades\Route;

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

// Route::post('/', Controller::class . '@store')->name('home.store');
Route::get('/', Controller::class . '@index')->name('home');
//About Page Route
Route::get('/about', AboutFrontController::class . '@index')->name('about.front');


Route::prefix('dashboard')->group(function () {
  Route::get('/', DashboardController::class . '@index')->name('dashboard');
  //Projects Additional Routes 
  Route::get('project/list', ProjectController::class . '@getAllProjects')->name('project.list');

  Route::resources([
    'setting' => SettingsController::class,
    'about' => AboutController::class,
    'project' => ProjectController::class,
    'contact' => ContactController::class,
  ]);
});
