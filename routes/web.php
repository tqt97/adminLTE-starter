<?php

use App\Http\Livewire\Backend\PageSetting;
use App\Http\Livewire\Backend\WebsiteSetting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('backend.dashboard');
})->name('admin');

Route::get('/admin/page-settings', PageSetting::class)->name('admin.page-settings');
Route::get('/admin/website-settings', WebsiteSetting::class)->name('admin.website-settings');

Route::get('lang/{lang}', [LanguageController::class,'switchLang'])->name('lang.switch');
