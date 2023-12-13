<?php

namespace Database\Seeders;

use App\Models\WhyUs;
use Illuminate\Database\Seeder;

class WhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WhyUs::create([
            'title_ar' => 'أحدث التقنيات الخدمية السحابية',
            'title_en' => 'The Latest Cloud Service Technologies',
            'content_ar' => 'نستخدم أحدث التقنيات السحابية لتطوير وتقديم حلولنا، كما نتبع أفضل الممارسات ونواكب التغيرات السريعة في السوق المحلية والعالمية لضمان تقديم تقنيات متقدمة وموثوقة.',
            'content_en' => 'We use the latest cloud technologies to develop and deliver our solutions. We also follow best practices and keep pace with rapid changes in the local and global market to ensure the provision of advanced and reliable technologies.',
            'photo' => 'whyUs_1.webp',
        ]);



        WhyUs::create([
            'title_ar' => 'تكامل وربط الأنظمة المتنوعة',
            'title_en' => 'Integration And Connection Of Various Systems',
            'content_ar' => 'لدينا القدرة على ربط أنظمتنا مع المنصات المختلفة، سواء كانت حكومية أو خاصة، وهذا يسمح للعملاء بالاستفادة من تكامل سلس كما يسهل تبادل المعلومات بين الأنظمة.',
            'content_en' => 'We have the ability to connect our systems with different platforms, whether governmental or private, and this allows customers to benefit from seamless integration and facilitates the exchange of information between systems.',
            'photo' => 'whyUs_2.webp',
        ]);



        WhyUs::create([
            'title_ar' => 'خدمات برمجية متنوعة',
            'title_en' => 'Various Software Services',
            'content_ar' => 'نقدم نظامًا محاسبيًا ERP يتميز بمرونته وقدرته على أن يكون متعدد المهام، وبذلك يمكن للعملاء الاستفادة من مجموعة واسعة من الخدمات البرمجية المتنوعة التي تلبي احتياجاتهم الفريدة.',
            'content_en' => 'We offer an ERP accounting system that is flexible and multitasking, so customers can benefit from a wide range of diverse software services that meet their unique needs.',
            'photo' => 'whyUs_3.webp',
        ]);



        WhyUs::create([
            'title_ar' => 'أمان وسيبرانية',
            'title_en' => 'Cyber And Security',
            'content_ar' => 'نحرص على تأمين خدماتنا بأعلى مستويات الأمان والحماية السيبرانية، كما نتبع معايير صارمة لضمان أمان بيانات العملاء واستقرار النظام.',
            'content_en' => 'We are keen to provide our services with the highest levels of security and cyber protection, and we also follow strict standards to ensure the security of customer data and system stability.',
            'photo' => 'whyUs_4.webp',
        ]);



        WhyUs::create([
            'title_ar' => 'الإلتزام بمعايير جودة الخدمة',
            'title_en' => 'Commitment To Service Quality Standards',
            'content_ar' => 'نحن نضع معايير جودة عالية لخدمتنا ونسعى جاهدين لتحسين أعمالنا بشكل مستمر، كما نستمع إلى آراء عملائنا ونعمل بنشاط على تلبية احتياجاتهم وتوفير حلول مبتكرة وموثوقة.',
            'content_en' => 'We set high quality standards for our service and strive to continuously improve our business. We also listen to the opinions of our customers and actively work to meet their needs and provide innovative and reliable solutions.',
            'photo' => 'whyUs_5.webp',
        ]);



        WhyUs::create([
            'title_ar' => 'فريق عمل ماهر',
            'title_en' => 'Skilled Work Team',
            'content_ar' => 'يتميز فريقنا بالمهارات القوية في التعامل مع تحديات تطوير الأنظمة المحاسبية المعقدة، نحن نضمن توفير فريق متكامل يضم مبرمجين ومحللين محترفين يتفاعلون بشكل مثالي لتطوير وتنفيذ حلول ERP مخصصة وفقًا لمتطلبات العملاء.',
            'content_en' => 'Our team is distinguished by strong skills in dealing with the challenges of developing complex accounting systems. We guarantee to provide an integrated team that includes professional programmers and analysts who interact perfectly to develop and implement customized ERP solutions according to customer requirements.',
            'photo' => 'whyUs_6.webp',
        ]);
    }
}
