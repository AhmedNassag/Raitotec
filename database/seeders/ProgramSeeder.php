<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'first_title_ar' => 'المحاسبة العامة',
            'first_title_en' => 'General accounting',
            'first_content_ar' => 'نقدم لكم برامج المحاسبة لكافة المنشأت، ويتم من خلال هذه البرامج إدارة المدفوعات - القيـود اليوميـة - الايداعات - التحويلات البنكية بيـن الحسابات- تسوية الحسابات البنكية الشــركات وغيرها.',
            'first_content_en' => 'We offer you accounting programs for all establishments. Through these programs, payments are managed - daily entries - deposits - bank transfers between accounts - reconciliation of corporate bank accounts, etc.',
            'second_title_ar' => 'برنامج إدارة الحسابات | المحاسبة',
            'second_title_en' => 'Account management software Accounting Program',
            'second_content_ar' => 'نقدم ﺑﺮﻧﺎﻣﺞ إدارة حسابات شامل يهدف لزيادة أرباح شركتك، ﻫﺎم ﻟﻜﺎﻓﺔ اﻟﻤﻨﺸﺄت ﻳﺘﻢ ﻣﻦ ﺧﻼﻟﻪ إدارة اﻟﻤﺪﻓﻮﻋـﺎت، اﻟﻘﻴـﻮد اﻟﻴﻮﻣﻴـﺔ، اﻻﻳﺪاﻋـﺎت، اﻟﺘﺤﻮﻳـﻼت اﻟﺒﻨﻜﻴـﺔ ﺑﻴـﻦ اﻟﺤﺴﺎﺑﺎت، ﺗﺴـﻮﻳﺔ اﻟﺤﺴـﺎﺑﺎت اﻟﺒﻨﻜﻴﺔ بالإضافة إلى إعداد اﻟﺸــﻴﻜﺎت وﻓﻮاﺗﻴــﺮ اﻻﻳــﺮادات، ﺳــﻨﺪات اﻟﻘﺒــﺾ بالإضافة إلى ﻓﻮاﺗﻴــﺮ اﻟﻤﺼﺮوﻓــﺎت و ﺗﺼﻨﻴﻔﻬــﺎ وغيرها من الخدمات.',
            'second_content_en' => 'We offer a comprehensive account management program that aims to increase your company’s profits. It is important for all establishments, through which payments, daily restrictions, and... Deposits, bank transfers between accounts, reconciliation of bank accounts, in addition to preparing checks. Revenue invoices, receivable vouchers, in addition to expense invoices, their classification, and other services.',
            'photo' => 'program_1.webp',
        ]);


        
        Program::create([
            'first_title_ar' => 'إدارة المخزون',
            'first_title_en' => 'Inventory Management Program',
            'first_content_ar' => 'يمكـن مـن خلال نظـام رايتو ERP السـحابي  إدارة كل مـن عمليـات أقسـام المخـزون و التصنيع و المشتريات والمبيعات ويتميز هذا النظام بأنه مترابط مـع تطبيـق الجـوال الخاص بمندوبي المبيعات (نقاط البيع المتحركة)',
            'first_content_en' => 'Through the Rayto ERP cloud system, it is possible to manage all of the operations of the inventory, manufacturing, purchasing, and sales departments. This system is characterized by being interconnected with the mobile application for sales representatives (mobile points of sale).',
            'second_title_ar' => 'برنامج إدارة المخزون',
            'second_title_en' => 'Inventory Management Program',
            'second_content_ar' => 'يمكـن مـن خلال نظـام رايتو ERP السـحابي  إدارة كل مـن عمليـات أقسـام المخـزون و التصنيع و المشتريات والمبيعات ويتميز هذا النظام بأنه مترابط مـع تطبيـق الجـوال الخاص بمندوبي المبيعات (نقاط البيع المتحركة)',
            'second_content_en' => 'Through the Rayto ERP cloud system, it is possible to manage all of the operations of the inventory, manufacturing, purchasing, and sales departments. This system is characterized by being interconnected with the mobile application for sales representatives (mobile points of sale).',
            'photo' => 'program_2.webp',    
        ]);



        Program::create([
            'first_title_ar' => 'إعداد تطبيق المناديب',
            'first_title_en' => 'Preparing The Delegates Application',
            'first_content_ar' => 'نؤسس لك برنامج يساعدك على على إدارة وتتبع مبيعاتك عبر المندوبين في منشأتك بكل سهولة وذلك من خلال توفير ميزة تسجيل فواتير المبيعات والمردودات مع تطبيق كل سياسات المنشأة الخاصة بالعملاء والأسعار عند إصدار الفاتورة.',
            'first_content_en' => 'We create a program for you that helps you manage and track your sales through representatives in your facility with ease by providing the feature of recording sales invoices and returns while applying all the facility’s policies for customers and prices when issuing the invoice.',
            'second_title_ar' => 'إعداد تطبيق المناديب',
            'second_title_en' => 'Preparing The Delegates Application Program',
            'second_content_ar' => 'نؤسس لك برنامج يساعدك على على إدارة وتتبع مبيعاتك عبر المندوبين في منشأتك بكل سهولة وذلك من خلال توفير ميزة تسجيل فواتير المبيعات والمردودات مع تطبيق كل سياسات المنشأة الخاصة بالعملاء والأسعار عند إصدار الفاتورة.',
            'second_content_en' => 'We create a program for you that helps you manage and track your sales through representatives in your facility with ease by providing the feature of recording sales invoices and returns while applying all the facility’s policies for customers and prices when issuing the invoice.',
            'photo' => 'program_3.webp',
        ]);



        Program::create([
            'first_title_ar' => 'إدارة الموارد البشرية',
            'first_title_en' => 'Human Resource Management',
            'first_content_ar' => 'نقدم برنامج نقط البيع POS الذي يعزز الأنشطة التجارية ويساهم في زيادة الأرباح، ويعتبر هذا البرنامج نظام مبيعات متكامل يوفر حلولاً شاملة لتسهيل عملية البيع وجميع الجوانب المرتبطة بها',
            'first_content_en' => 'We offer a point-of-sale program (POS) that enhances business activities and contributes to increasing profits. This program is considered an integrated sales system that provides comprehensive solutions to facilitate the sales process and all aspects related to it.',
            'second_title_ar' => 'إدارة الموارد البشرية',
            'second_title_en' => 'Human Resource Management Program',
            'second_content_ar' => 'نقدم برنامج نقط البيع POS الذي يعزز الأنشطة التجارية ويساهم في زيادة الأرباح، ويعتبر هذا البرنامج نظام مبيعات متكامل يوفر حلولاً شاملة لتسهيل عملية البيع وجميع الجوانب المرتبطة بها',
            'second_content_en' => 'We offer a point-of-sale program (POS) that enhances business activities and contributes to increasing profits. This program is considered an integrated sales system that provides comprehensive solutions to facilitate the sales process and all aspects related to it.',
            'photo' => 'program_4.webp',
        ]);



        Program::create([
            'first_title_ar' => 'برامج إدارة المبيعات',
            'first_title_en' => 'Sales Management Software',
            'first_content_ar' => 'نقدم برنامج نقط البيع POS الذي يعزز الأنشطة التجارية ويساهم في زيادة الأرباح، ويعتبر هذا البرنامج نظام مبيعات متكامل يوفر حلولاً شاملة لتسهيل عملية البيع وجميع الجوانب المرتبطة بها',
            'first_content_en' => 'We offer a point-of-sale program (POS) that enhances business activities and contributes to increasing profits. This program is considered an integrated sales system that provides comprehensive solutions to facilitate the sales process and all aspects related to it.',
            'second_title_ar' => 'برامج إدارة المبيعات',
            'second_title_en' => 'Sales Management Software programs',
            'second_content_ar' => 'نقدم برنامج نقط البيع POS الذي يعزز الأنشطة التجارية ويساهم في زيادة الأرباح، ويعتبر هذا البرنامج نظام مبيعات متكامل يوفر حلولاً شاملة لتسهيل عملية البيع وجميع الجوانب المرتبطة بها',
            'second_content_en' => 'We offer a point-of-sale program (POS) that enhances business activities and contributes to increasing profits. This program is considered an integrated sales system that provides comprehensive solutions to facilitate the sales process and all aspects related to it.',
            'photo' => 'program_5.webp',
        ]);
    }
}
