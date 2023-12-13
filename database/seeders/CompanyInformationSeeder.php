<?php

namespace Database\Seeders;

use App\Models\CompanyInformation;
use Illuminate\Database\Seeder;

class CompanyInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyInformation::create([
            'brief_ar'   => 'نحن شركة رائدة في مجال تطوير الحلول المحاسبية ERP، نقدم حلولًا مبتكرة ومخصصة للشركات لتلبية احتياجاتها الفريدة، كما نعتمد على التقنيات السحابية الحديثة، تتميز خدماتنا بالأمان العالي والدعم الفني المتميز، نلتزم بتقديم حلول عالية الجودة، اكتشف كيف يمكن لشركتك الاستفادة من خبرتنا وانضم إلى قائمة عملائنا المرموقة.',
            'brief_en'   => 'We are a leading company in the field of developing ERP accounting solutions. We provide innovative and customized solutions to companies to meet their unique needs. We also rely on modern cloud technologies. Our services are characterized by high security and distinguished technical support. We are committed to providing high-quality solutions. Discover how your company can benefit from our experience and join the list. Our prestigious clients.',
            'address_ar' => 'الرياض ، المملكة العربية السعودية ، 4000 طريق دائري 12993 ، 27',
            'address_en' => 'Riyadh, Saudi Arabia, 4000 Ring Road 12993, 27',
            'email'      => 'info@raitotec.com',
            'phone'      => '+966538499438',
            'whatsapp'   => '+966538499438',
            'twitter'    => 'https://twitter.com/raitotec',
            'facebook'   => 'https://www.facebook.com/Raitotec',
            'youtube'    => 'https://www.youtube.com/@Raitotec',
            'instagram'  => 'https://www.instagram.com/raitotec1/',
            'linkedin'   => 'https://www.linkedin.com/in/raito-erp-software-830920234/',
            'snapchat'   => 'https://accounts.snapchat.com',
            'googleplay' => 'https://accounts.googleplay.com',
            'appstore'   => 'https://accounts.appstore.com',
            'photo'      => 'CompanyInformation_1.webp',
        ]);
    }
}
