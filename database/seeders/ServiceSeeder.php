<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'first_title_ar' => 'تصميم المواقع الإلكترونية',
            'first_title_en' => 'Website Design',
            'first_content_ar' => 'نساعدك في تصميم موقع إلكتروني سريع وآمن ومتوافق مع قواعد السيو، سهل الاستخدام، سهل التنقل ذو محتوى مفيد وجذاب.',
            'first_content_en' => 'We help you design a website that is fast, secure, compatible with SEO rules, easy to use, easy to navigate, and has useful and attractive content.',
            'photo' => 'service_1.png',
        ]);



        Service::create([
            'first_title_ar' => 'تطبيقات الجوال',
            'first_title_en' => 'Mobile Applications',
            'first_content_ar' => 'نقدم لك تطبيق جوال سهل الاستخدام، بسيط، مزود بنظام تقييم وإمكانية تخصيص، يتميز بالسرعة والأداء المميز.',
            'first_content_en' => 'We offer you a mobile application that is easy to use, simple, equipped with a rating system and the ability to customize, and is characterized by speed and outstanding performance.',
            'photo' => 'service_2.png',
        ]);



        Service::create([
            'first_title_ar' => 'تأهيل محطات الوقود',
            'first_title_en' => 'Gas Stations Habilitation',
            'first_content_ar' => 'نستخدم أحدث التقنيات البرمجية والأجهزة المخصصة لهذا الغرض، لإدارة المخزون والتحكم في محطات الوقود وإعداد التقارير المالية وغيرها.',
            'first_content_en' => 'We use the latest software and hardware technologies designated for this purpose, to manage inventory, control gas stations, prepare financial reports, and more.',
            'photo' => 'service_3.webp',
        ]);
    }
}
