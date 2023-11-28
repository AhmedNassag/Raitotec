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

        /*** start dashboard ***/
        //CustomersService
        $this->app->bind(
            'App\Repositories\CustomersService\CustomersServiceInterface',
            'App\Repositories\CustomersService\CustomersServiceRepository',
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
