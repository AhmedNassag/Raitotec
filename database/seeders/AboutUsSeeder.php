<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'content_ar' => 'شركة رايتو للبرمجيات هي شركة تقنية رائدة تقدم منتجات وخدمات عالية الجودة لعملائها في جميع أنحاء العالم، تلتزم الشركة بالابتكار والتميز التقني، وتهدف لمساعدة عملائها على تحقيق أهدافهم، كما تمتلك الشركة فريقًا موهوبًا من المتخصصين في تطوير البرمجيات وتصميم الواجهات وإدارة المشاريع، وتستخدم الشركة أحدث التقنيات والأدوات لتطوير حلول برمجية مبتكرة ومخصصة تلبي متطلبات السوق الحالية والمستقبلية.شركة رايتو للبرمجيات هي شركة تقنية رائدة تقدم منتجات وخدمات عالية الجودة لعملائها في جميع أنحاء العالم، تلتزم الشركة بالابتكار والتميز التقني، وتهدف لمساعدة عملائها على تحقيق أهدافهم، كما تمتلك الشركة فريقًا موهوبًا من المتخصصين في تطوير البرمجيات وتصميم الواجهات وإدارة المشاريع، وتستخدم الشركة أحدث التقنيات والأدوات لتطوير حلول برمجية مبتكرة ومخصصة تلبي متطلبات السوق الحالية والمستقبلية.',
            'content_en' => 'Raito Software Company is a leading technology company that provides high-quality products and services to its customers around the world. The company is committed to innovation and technical excellence, and aims to help its customers achieve their goals. The company also has a talented team of specialists in software development, interface design, and project management, and the company uses the latest technologies. And the tools to develop innovative and customized software solutions that meet current and future market requirements.',
            'video' => 'aboutUs.mp4',
        ]);
    }
}
