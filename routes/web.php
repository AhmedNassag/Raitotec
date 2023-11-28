<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\GeneralController;
use Illuminate\Support\Facades\Auth;

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

/****************************** start site routes ******************************/
Route::middleware('lang')->group( function () {
    Route::prefix('lang')->name('lang.')->group( function () {
        Route::controller(LangController::class)->group( function () {
            Route::get('/ar' ,  'ar')->name('ar');
            Route::get('/en' ,  'en')->name('en');
        });
    });
    Route::get('/', function () { return view('site.index'); })->name('site.index');

    route::get('/about', function() { return view('site.about'); })->name('site.about');

    route::get('/services', function() { return view('site.services'); })->name('site.services');

    route::get('/programs', function() { return view('site.programs'); })->name('site.programs');

    route::get('/business', function() { return view('site.business'); })->name('site.business');

    route::get('/blog', function() { return view('site.blog'); })->name('site.blog');

    route::get('/contact', function() { return view('site.contact'); })->name('site.contact');
});
/****************************** end site routes ******************************/

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');



//general routes
Route::get('show_file/{folder_name}/{photo_name}', [GeneralController::class, 'show_file'])->name('show_file');
Route::get('download_file/{folder_name}/{photo_name}', [GeneralController::class, 'download_file'])->name('download_file');
Route::get('allNotifications', [GeneralController::class, 'allNotifications'])->name('allNotifications');
Route::get('markAllAsRead', [GeneralController::class, 'markAllAsRead'])->name('markAllAsRead');