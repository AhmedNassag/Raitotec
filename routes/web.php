<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\AboutUsController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\ProgramController;
use App\Http\Controllers\Site\BusinessController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\PackageController;
use App\Http\Controllers\Site\MessageController;
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
    //home
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //business
    Route::resource('business', BusinessController::class);

    //blog
    Route::resource('blog', BlogController::class);

    //aboutUs
    route::resource('aboutUs', AboutUsController::class);

    //service
    route::resource('service', ServiceController::class);

    //program
    route::resource('program', ProgramController::class);

    //contact
    route::resource('contact', ContactController::class);

    //package
    route::resource('package', PackageController::class);

    //message
    route::resource('message', MessageController::class);


});
/****************************** end site routes ******************************/

Auth::routes();



//general routes
Route::get('show_file/{folder_name}/{photo_name}', [GeneralController::class, 'show_file'])->name('show_file');
Route::get('download_file/{folder_name}/{photo_name}', [GeneralController::class, 'download_file'])->name('download_file');
Route::get('allNotifications', [GeneralController::class, 'allNotifications'])->name('allNotifications');
Route::get('markAllAsRead', [GeneralController::class, 'markAllAsRead'])->name('markAllAsRead');