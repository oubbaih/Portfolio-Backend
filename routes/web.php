<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;
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

Route::prefix('dashboard')->group(function () {
  Route::get('/', DashboardController::class . '@index')->name('dashboard');
  Route::resource('setting', SettingsController::class);
});
