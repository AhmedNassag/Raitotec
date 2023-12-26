<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slider::create([
            'title_ar' => 'رايتو',
            'title_en' => 'Raito',
            'content_ar' => 'للبرمجيات وتخطيط الموارد',
            'content_en' => 'For software and resource planning',
            'photo' => 'slider_1.webp',
        ]);


        
        Slider::create([
            'title_ar' => 'نظام ERP متطور ومتكامل',
            'title_en' => 'Advanced and integrated ERP system',
            'content_ar' => 'برنامج رايتو ERP هو الحل الأمثل الذي يلبي احتياجات إدارة أعمالك، تم تطويره باستخدام أحدث التقنيات المتقدمة لضمان السرعة والدقة والأمان، فريق دعم البرنامج يؤمن بمبدأ التطور المستمر كمفتاح للنجاح منذ بداية تأسيسه!',
            'content_en' => 'Rayto ERP software is the ideal solution that meets your business management needs. It was developed using the latest advanced technologies to ensure speed, accuracy and security. The program support team believes in the principle of continuous development as a key to success since the beginning of its establishment!',
            'photo' => 'slider_2.webp',
            'add_button' => 1,
        ]);
    }
}
