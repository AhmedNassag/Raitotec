<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*** start basic data ***/
        //Category
        $this->app->bind(
            'App\Repositories\Category\CategoryInterface',
            'App\Repositories\Category\CategoryRepository',
        );



        /*** start site ***/
        //Blog
        $this->app->bind(
            'App\Repositories\Site\Blog\BlogInterface',
            'App\Repositories\Site\Blog\BlogRepository',
        );

        //Business
        $this->app->bind(
            'App\Repositories\Site\Business\BusinessInterface',
            'App\Repositories\Site\Business\BusinessRepository',
        );

        //Program
        $this->app->bind(
            'App\Repositories\Site\Program\ProgramInterface',
            'App\Repositories\Site\Program\ProgramRepository',
        );

        //Contact
        $this->app->bind(
            'App\Repositories\Site\Contact\ContactInterface',
            'App\Repositories\Site\Contact\ContactRepository',
        );

        //Home
        $this->app->bind(
            'App\Repositories\Site\Home\HomeInterface',
            'App\Repositories\Site\Home\HomeRepository',
        );

        //AboutUs
        $this->app->bind(
            'App\Repositories\Site\AboutUs\AboutUsInterface',
            'App\Repositories\Site\AboutUs\AboutUsRepository',
        );

        //Service
        $this->app->bind(
            'App\Repositories\Site\Service\ServiceInterface',
            'App\Repositories\Site\Service\ServiceRepository',
        );

        //Package
        $this->app->bind(
            'App\Repositories\Site\Package\PackageInterface',
            'App\Repositories\Site\Package\PackageRepository',
        );
        /*** end site ***/



        /*** start dashboard ***/
	    //CompanyInformation
        $this->app->bind(
            'App\Repositories\Dashboard\CompanyInformation\CompanyInformationInterface',
            'App\Repositories\Dashboard\CompanyInformation\CompanyInformationRepository',
        );

        //CustomersReview
        $this->app->bind(
            'App\Repositories\Dashboard\CustomersReview\CustomersReviewInterface',
            'App\Repositories\Dashboard\CustomersReview\CustomersReviewRepository',
        );

        //Blog
        $this->app->bind(
            'App\Repositories\Dashboard\Blog\BlogInterface',
            'App\Repositories\Dashboard\Blog\BlogRepository',
        );

        //Business
        $this->app->bind(
            'App\Repositories\Dashboard\Business\BusinessInterface',
            'App\Repositories\Dashboard\Business\BusinessRepository',
        );

        //Slider
        $this->app->bind(
            'App\Repositories\Dashboard\Slider\SliderInterface',
            'App\Repositories\Dashboard\Slider\SliderRepository',
        );

        //AboutUs
        $this->app->bind(
            'App\Repositories\Dashboard\AboutUs\AboutUsInterface',
            'App\Repositories\Dashboard\AboutUs\AboutUsRepository',
        );

        //WhyUs
        $this->app->bind(
            'App\Repositories\Dashboard\WhyUs\WhyUsInterface',
            'App\Repositories\Dashboard\WhyUs\WhyUsRepository',
        );

        //WhyProgram
        $this->app->bind(
            'App\Repositories\Dashboard\WhyProgram\WhyProgramInterface',
            'App\Repositories\Dashboard\WhyProgram\WhyProgramRepository',
        );

        //Program
        $this->app->bind(
            'App\Repositories\Dashboard\Program\ProgramInterface',
            'App\Repositories\Dashboard\Program\ProgramRepository',
        );

        //ProgramManage
        $this->app->bind(
            'App\Repositories\Dashboard\ProgramManage\ProgramManageInterface',
            'App\Repositories\Dashboard\ProgramManage\ProgramManageRepository',
        );

        //ProgramAbility
        $this->app->bind(
            'App\Repositories\Dashboard\ProgramAbility\ProgramAbilityInterface',
            'App\Repositories\Dashboard\ProgramAbility\ProgramAbilityRepository',
        );

        //ProgramPackage
        $this->app->bind(
            'App\Repositories\Dashboard\ProgramPackage\ProgramPackageInterface',
            'App\Repositories\Dashboard\ProgramPackage\ProgramPackageRepository',
        );

        //Service
        $this->app->bind(
            'App\Repositories\Dashboard\Service\ServiceInterface',
            'App\Repositories\Dashboard\Service\ServiceRepository',
        );

        //ServiceSupport
        $this->app->bind(
            'App\Repositories\Dashboard\ServiceSupport\ServiceSupportInterface',
            'App\Repositories\Dashboard\ServiceSupport\ServiceSupportRepository',
        );

        //ServiceReason
        $this->app->bind(
            'App\Repositories\Dashboard\ServiceReason\ServiceReasonInterface',
            'App\Repositories\Dashboard\ServiceReason\ServiceReasonRepository',
        );

        //ServiceStep
        $this->app->bind(
            'App\Repositories\Dashboard\ServiceStep\ServiceStepInterface',
            'App\Repositories\Dashboard\ServiceStep\ServiceStepRepository',
        );

        //Sale
        $this->app->bind(
            'App\Repositories\Dashboard\Sale\SaleInterface',
            'App\Repositories\Dashboard\Sale\SaleRepository',
        );

        //ImportantCustomer
        $this->app->bind(
            'App\Repositories\Dashboard\ImportantCustomer\ImportantCustomerInterface',
            'App\Repositories\Dashboard\ImportantCustomer\ImportantCustomerRepository',
        );

        //Package
        $this->app->bind(
            'App\Repositories\Dashboard\Package\PackageInterface',
            'App\Repositories\Dashboard\Package\PackageRepository',
        );

        //PackageBenefit
        $this->app->bind(
            'App\Repositories\Dashboard\PackageBenefit\PackageBenefitInterface',
            'App\Repositories\Dashboard\PackageBenefit\PackageBenefitRepository',
        );

        //Message
        $this->app->bind(
            'App\Repositories\Dashboard\Message\MessageInterface',
            'App\Repositories\Dashboard\Message\MessageRepository',
        );
        /*** end dashboard ***/
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
