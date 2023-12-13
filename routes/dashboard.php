<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Dashboard\RoleController;
use App\Http\Controllers\Dashboard\UserController;

use App\Http\Controllers\Dashboard\Blog\BlogController;
use App\Http\Controllers\Dashboard\Business\BusinessController;
use App\Http\Controllers\Dashboard\Slider\SliderController;
use App\Http\Controllers\Dashboard\AboutUs\AboutUsController;
use App\Http\Controllers\Dashboard\WhyUs\WhyUsController;
use App\Http\Controllers\Dashboard\Sale\SaleController;
use App\Http\Controllers\Dashboard\ImportantCustomer\ImportantCustomerController;
use App\Http\Controllers\Dashboard\CompanyInformation\CompanyInformationController;
use App\Http\Controllers\Dashboard\CustomersReview\CustomersReviewController;
use App\Http\Controllers\Dashboard\Package\PackageController;
use App\Http\Controllers\Dashboard\PackageBenefit\PackageBenefitController;
use App\Http\Controllers\Dashboard\Program\ProgramController;
use App\Http\Controllers\Dashboard\ProgramManage\ProgramManageController;
use App\Http\Controllers\Dashboard\ProgramAbility\ProgramAbilityController;
use App\Http\Controllers\Dashboard\ProgramPackage\ProgramPackageController;
use App\Http\Controllers\Dashboard\WhyProgram\WhyProgramController;
use App\Http\Controllers\Dashboard\Service\ServiceController;
use App\Http\Controllers\Dashboard\ServiceSupport\ServiceSupportController;
use App\Http\Controllers\Dashboard\ServiceReason\ServiceReasonController;
use App\Http\Controllers\Dashboard\ServiceStep\ServiceStepController;
use App\Http\Controllers\Dashboard\Message\MessageController;

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
/****************************** START ADMIN ROUTES ******************************/
Route::Group(['prefix' => 'admin', 'middleware' => 'auth'], function () { 

    Route::get('/dashboard', function () { return view('admin.index_admin'); })->name('dashboard.index');

    //roles
    Route::resource('role', RoleController::class);
    Route::post('roleDelete', [RoleController::class, 'delete'])->name('role.delete');


    //user
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::post('user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('user/update', [UserController::class, 'update'])->name('user.update');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::post('userDeleteSelected', [UserController::class, 'deleteSelected'])->name('user.deleteSelected');
    Route::get('userShowNotification/{id}', [UserController::class, 'showNotification'])->name('user.showNotification');   
    Route::get('userChangeStatus/{id}', [UserController::class, 'changeStatus'])->name('user.changeStatus');


    //slider
    Route::resource('dashboard-slider', SliderController::class);
    Route::post('dashboard-sliderDeleteSelected', [SliderController::class, 'deleteSelected'])->name('dashboard-slider.deleteSelected');
    

    

    //service
    Route::resource('dashboard-service', ServiceController::class);
    Route::post('dashboard-serviceDeleteSelected', [ServiceController::class, 'deleteSelected'])->name('dashboard-service.deleteSelected');
    
    //serviceSupport
    Route::resource('dashboard-serviceSupport', ServiceSupportController::class);
    Route::post('dashboard-serviceSupportDeleteSelected', [ServiceSupportController::class, 'deleteSelected'])->name('dashboard-serviceSupport.deleteSelected');
    
    //serviceReason
    Route::resource('dashboard-serviceReason', ServiceReasonController::class);
    Route::post('dashboard-serviceReasonDeleteSelected', [ServiceReasonController::class, 'deleteSelected'])->name('dashboard-serviceReason.deleteSelected');
    
    //serviceStep
    Route::resource('dashboard-serviceStep', ServiceStepController::class);
    Route::post('dashboard-serviceStepDeleteSelected', [ServiceStepController::class, 'deleteSelected'])->name('dashboard-serviceStep.deleteSelected');
    

    //sale
    Route::resource('dashboard-sale', SaleController::class);
    Route::post('dashboard-saleDeleteSelected', [SaleController::class, 'deleteSelected'])->name('dashboard-sale.deleteSelected');
    

    //aboutUs
    Route::resource('dashboard-aboutUs', AboutUsController::class);
    Route::post('dashboard-aboutUsDeleteSelected', [AboutUsController::class, 'deleteSelected'])->name('dashboard-aboutUs.deleteSelected');


    //whyUs
    Route::resource('dashboard-whyUs', WhyUsController::class);
    Route::post('dashboard-whyUsDeleteSelected', [WhyUsController::class, 'deleteSelected'])->name('dashboard-whyUs.deleteSelected');


    //whyProgram
    Route::resource('dashboard-whyProgram', WhyProgramController::class);
    Route::post('dashboard-whyProgramDeleteSelected', [WhyProgramController::class, 'deleteSelected'])->name('dashboard-whyProgram.deleteSelected');


    //program
    Route::resource('dashboard-program', ProgramController::class);
    Route::post('dashboard-programDeleteSelected', [ProgramController::class, 'deleteSelected'])->name('dashboard-program.deleteSelected');


    //programManage
    Route::resource('dashboard-programManage', ProgramManageController::class);
    Route::post('dashboard-programManageDeleteSelected', [ProgramManageController::class, 'deleteSelected'])->name('dashboard-programManage.deleteSelected');
    

    //programAbility
    Route::resource('dashboard-programAbility', ProgramAbilityController::class);
    Route::post('dashboard-programAbilityDeleteSelected', [ProgramAbilityController::class, 'deleteSelected'])->name('dashboard-programAbility.deleteSelected');
    

    //programPackage
    Route::resource('dashboard-programPackage', ProgramPackageController::class);
    Route::post('dashboard-programPackageDeleteSelected', [ProgramPackageController::class, 'deleteSelected'])->name('dashboard-programPackage.deleteSelected');
    

    //blog
    Route::resource('dashboard-blog', BlogController::class);
    Route::post('dashboard-blogDeleteSelected', [BlogController::class, 'deleteSelected'])->name('dashboard-blog.deleteSelected');


    //business
    Route::resource('dashboard-business', BusinessController::class);
    Route::post('dashboard-businessDeleteSelected', [BusinessController::class, 'deleteSelected'])->name('dashboard-business.deleteSelected');    
    

    //importantCustomer
    Route::resource('dashboard-importantCustomer', ImportantCustomerController::class);
    Route::post('dashboard-importantCustomerDeleteSelected', [ImportantCustomerController::class, 'deleteSelected'])->name('dashboard-importantCustomer.deleteSelected');
    

    //companyInformation
    Route::resource('dashboard-companyInformation', CompanyInformationController::class);
    Route::post('dashboard-companyInformationDeleteSelected', [CompanyInformationController::class, 'deleteSelected'])->name('dashboard-companyInformation.deleteSelected');


    //customersReview
    Route::resource('dashboard-customersReview', CustomersReviewController::class);
    Route::post('dashboard-customersReviewDeleteSelected', [CustomersReviewController::class, 'deleteSelected'])->name('dashboard-customersReview.deleteSelected');


    //package
    Route::resource('dashboard-package', PackageController::class);
    Route::post('dashboard-packageDeleteSelected', [PackageController::class, 'deleteSelected'])->name('dashboard-package.deleteSelected');


    //packageBenefit
    Route::resource('dashboard-packageBenefit', PackageBenefitController::class);
    Route::post('dashboard-packageBenefitDeleteSelected', [PackageBenefitController::class, 'deleteSelected'])->name('dashboard-packageBenefit.deleteSelected');


    //message
    Route::resource('dashboard-message', MessageController::class);
    Route::post('dashboard-messageDeleteSelected', [MessageController::class, 'deleteSelected'])->name('dashboard-message.deleteSelected');

});
/****************************** END ADMIN ROUTES ******************************/