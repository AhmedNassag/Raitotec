<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\BusinessPhoto;

use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $business_1 = Business::create([
            'title_ar' => 'تأهيل المحطات',
            'title_en' => 'Stations Habilitation',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_1->id,
            'photo'       => 'business_1_1.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_1->id,
            'photo'       => 'business_1_2.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_1->id,
            'photo'       => 'business_1_3.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_1->id,
            'photo'       => 'business_1_4.webp',
        ]);


        


        $business_2 = Business::create([
            'title_ar' => 'تصميم المواقع الإلكترونية',
            'title_en' => 'Website Design',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_2->id,
            'photo'       => 'business_2_1.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_2->id,
            'photo'       => 'business_2_2.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_2->id,
            'photo'       => 'business_2_3.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_2->id,
            'photo'       => 'business_2_4.webp',
        ]);





        $business_3 = Business::create([
            'title_ar' => 'تصميم تطبيقات الجوال',
            'title_en' => 'Mobile Applications',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_3->id,
            'photo'       => 'business_3_1.png',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_3->id,
            'photo'       => 'business_3_2.png',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_3->id,
            'photo'       => 'business_3_3.png',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_3->id,
            'photo'       => 'business_3_4.png',
        ]);





        $business_4 = Business::create([
            'title_ar' => 'إعداد البرامج المحاسبية',
            'title_en' => 'Preparing accounting programs',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_4->id,
            'photo'       => 'business_4_1.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_4->id,
            'photo'       => 'business_4_2.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_4->id,
            'photo'       => 'business_4_3.webp',
        ]);

        BusinessPhoto::create([
            'business_id' => $business_4->id,
            'photo'       => 'business_4_4.webp',
        ]);
    }
}
