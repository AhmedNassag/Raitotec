<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::create([
            'first_title_ar' => 'زود مبيعاتك',
            'first_title_en' => 'Increase Your Sales',
            'first_content_ar' => 'برنامج رايتو لإدارة المبيعات ليس فقط يساعدك علي مراقبة أعمالك من خلال تقارير تحليلية تنظم عمليات البيع والتارجت وتتبع المناديب ولكنه يقدم خدمة التكامل مع المنصات المختلفة والربط مع تطبيق العملاء لزيادة مبيعاتك',
            'first_content_en' => 'Rayto sales management program not only helps you monitor your business through analytical reports that organize sales and target operations and track representatives, but it also provides integration service with various platforms and linking with the customer application to increase your sales.',
            'photo' => 'sale_1.png',
        ]);
    }
}
