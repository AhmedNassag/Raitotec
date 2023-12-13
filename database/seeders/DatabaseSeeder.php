<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionTableSeeder::class);
        $this->call(CreateAdminUserSeeder::class);

        
        
        // $this->call(CompanyInformationSeeder::class);
        // $this->call(AboutUsSeeder::class);
        // $this->call(SliderSeeder::class);
        // $this->call(BlogSeeder::class);
        // $this->call(BusinessSeeder::class);
        // $this->call(SaleSeeder::class);
        // $this->call(ServiceSeeder::class);
        // $this->call(WhyUsSeeder::class);
        // $this->call(WhyProgramSeeder::class);
        // $this->call(ImportantCustomerSeeder::class);
        // $this->call(ProgramSeeder::class);
        // $this->call(CustomersReviewSeeder::class);
    }
}
