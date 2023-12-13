<?php

namespace Database\Seeders;

use App\Models\CustomersReview;
use Illuminate\Database\Seeder;

class CustomersReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomersReview::create([
            'user_name_ar' => 'خبراء العناية بالدعاء',
            'user_name_en' => 'Dawaa Care Experts',
            'content_ar' => 'فريق المبرمجين لديهم يتفهم طلب العميل جيدا',
            'content_en' => 'Their team of programmers understands the customer request well',
            'photo' => 'CustomersReview_1.webp',
        ]);



        CustomersReview::create([
            'user_name_ar' => 'خبراء العناية بالدعاء',
            'user_name_en' => 'Dawaa Care Experts',
            'content_ar' => 'أعجبتني المرونة والتعديلات الممكنة في البرامج المحاسبية لديهم، حيث يمكن تخصيصها لتلبية احتياجات شركتي بالضبط',
            'content_en' => 'I liked the flexibility and modifications possible in their accounting software, as it can be customized to meet my company exact needs',
            'photo' => 'CustomersReview_2.webp',
        ]);
    }
}
