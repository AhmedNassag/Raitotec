@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
برامج ERP  لتحسين أداء أعمالك في كافة المجالات
@else
ERP software to improve your business performance in all areas
@endif
@endsection



@section('meta-description')
<meta name="description" content="اكتشف مجموعة برامج ERP المتكاملة من رايتو لتحسين أداء أعمالك وتبسيط العمليات وتحقيق الكفاءة، فمن خلالها ستتمكن من إدارة الأصول والعقارات والمداري وغيرها.">
@endsection



@section('meta-keywords')
<meta name="keywords" content="برامج ERP  لتحسين أداء أعمالك في كافة المجالات">
@endsection



@section('content')
{{-- start arabic content --}}
@if (App::getLocale() == 'ar')
<section class="component-hadeer">
    <div class="container">
        <h2 class="page-title">برامج أخرى</h2>
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
                <h2 class="title-title"> نبذة عن برامج رايتو
                </h2>
                <p class="pt-3 p-decerption">
                    في شركتنا نقدم مجموعة متنوعة من الخدمات المبتكرة والمخصصة لتلبية احتياجات عملائنا، كما نتخصص في تطوير وتنفيذ حلول ERP المحاسبية التي تساعد الشركات على تحسين كفاءتها وإدارة أعمالها بشكل أفضل، ولا نكتفي بتقديم برامج إدارة المخزون وإدارة المناديب والمبيعات والحسابات وحسب، بل يوجد عدد كبير من البرامج سنذكر لك بعضها من خلال الفقرات القادمة
                </p>
            </div>
            <div class="col">
                <img class="w-100 img-system" src="{{ asset('public/assets_site//img/our-p.png') }}" alt="management">
            </div>

        </div>
    </div>
</section>
<!---->
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                    برنامج إدارة الأصول
                </h2>
                <p class="pt-3 p-decerption">
                    نظام إدارة الأصول (Asset Management System) هو نظام يستخدم لتنظيم ومراقبة جميع الأصول التي تمتلكها مؤسسة أو منظمة، وتشمل الأصول هنا العتاد الفني، الأجهزة، البرمجيات، الممتلكات، وغيرها من الموارد التي يمكن تتبعها وتقوم بإدارتها.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Property Management.webp') }}" alt="ripet">
                            مراقبة الأصول
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Electronicinvoices.webp') }}" alt="ripet">
                            إدارة البرمجيات
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/management.webp') }}" alt="ripet">
                            إدارة الممتلكات

                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/sale-system.webp') }}" alt="ripet">
                            إدارة الأجهزة</li>

                    </ul>

                </div>

            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/assets.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">

        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        أسس برنامج لإدارة الأصول
                    </h6>
                    <p class="pt-3 mb-0">
                        يمكنك من خلال نظام ERP الاحترافي المصمم من خلالنا أن تقوم بـ مراقبة الأصول وإدارة البرمجيات والممتلكات إضافة إلى إدارة الأجهزة.

                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                    نظام إدارة العقارات

                </h2>
                <p class="pt-3 p-decerption">
                    نظام ﻹدارة وﺗﺸﻐﻴﻞ ﺷﺮﻛﺎت وﻣﻜﺎﺗﺐ ﺗﺄﺟﻴﺮ اﻟﻌﻘﺎرات ﺑﺮﻧﺎﻣــﺞ يتميز بأنه ﺳــﻬﻞ اﻻﺳــﺘﺨﺪام وﺷــﺎﻣﻞ، ﺗــﻢ ﺗﺼﻤﻴﻤــﻪ ﺑﻄﺮﻳﻘــﺔ ﻓﺮﻳــﺪة ﻟﻴﻘــﻮم ﺑــﺈدارة اﻟﻌﻘـﺎرات و الأﻣـﻼك واﻻﻳﺠـﺎرات ﺑﺸـﻜﻞ ﻛﺎﻣـﻞ و ﻛﺬﻟـﻚ يتخصص في إدارة اﻟﻌﻤﻠﻴـﺎت اﻟﻤﺤﺎﺳـﺒﻴﺔ واﻟﻤﺎﻟﻴـﺔ للمؤسسة العقارية.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Real-Estate.webp') }}" alt="ripet">

                            إدارة العقارات
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Property Management.webp') }}" alt="ripet">

                            إدارة الأملاك
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Manufacturing.webp') }}" alt="ripet">

                            إدارة الإيجارات

                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Sales.webp') }}" alt="ripet">

                            إدارة العمليات المحاسبية
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/purchase management.webp') }}" alt="ripet">

                            إدارة العمليات المالية
                        </li>
                    </ul>

                </div>

            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/real.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">

        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        أسس نظام احترافي لإدارة عقارات
                    </h6>
                    <p class="pt-3 mb-0">
                        يمكنك أن تؤسس برنامجًا يساعدك على إدارة عقاراتك ( الأملاك - الإيجارات - العمليات الحسابية والمالية ) بواجهة سهلة الاستخدام

                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                    نظام إدارة المحاماة

                </h2>
                <p class="pt-3 p-decerption">
                    نقدم حلول برمجية ﻹدارة و ﺗﺸﻐﻴﻞ اﻟﻤﻨﺸآت اﻟﻘﺎﻧﻮﻧﻴﺔ ﻣﺜﻞ ﺷﺮﻛﺎت وﻣﻜﺎﺗﺐ اﻟﻤﺤﺎﻣﺎة، وأهم ما يميزه أنه ﺑﺮﻧﺎﻣﺞ وﻳﺐ ﺳﺤﺎﺑﻲ اﻟﻤﻨﺸﺄ ﻳﺘﻴﺢ اﻟﻌﻤﻞ ﻣﻦ أي ﻣﻜﺎن و ﻓﻲ أي وﻗﺖ ﻳﻤﻜﻨﻚ ﻣﻦ إدارة ﻗﻀﺎﻳﺎك و ﻣﺘﻌﻠﻘﺎﺗﻬﺎ ﺑﺈﺣﺘﺮاﻓﻴﺔ ﻛﺒﻴﺮة، والبرنامج مزود بلوحة إﻋﺪادات ﺗﻀﺎف ﻣﻨﻬﺎ ﻛﺎﻓﺔ ﺑﻴﺎﻧﺎت اﻟﻤﻮﻛﻠﻴﻦ و اﻟﻘﻀﺎﻳﺎ.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">

                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/representatives.webp') }}" alt="ripet">

                            متابعة القضايا.

                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/customer-data.webp') }}" alt="ripet">

                            إدارة مصاريف المكتب.

                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Invoice.webp') }}" alt="ripet">

                            إصدار سندات.


                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/reports-invoice.webp') }}" alt="ripet">

                            إصدار تقارير.

                        </li>

                    </ul>

                </div>

            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/low.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">

        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        أسس نظام احترافي لإدارة المحاماة

                    </h6>
                    <p class="pt-3 mb-0">
                        يمكنك من خلالنا تأسيس نظام محاماة احترافي لمتابعة القضايا وإدارة مصاريف المكتب وإصدار السندات والتقارير.

                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                    نظام إدارة المدارس
                </h2>
                <p class="pt-3 p-decerption">
                    نظام إدارة المدارس المعد من خلال رايتو للحلول البرمجية (School Management System) هو نظام متكامل يستخدم لتنظيم وتسهيل إدارة العمليات اليومية في المدارس، يهدف هذا النظام إلى تحسين الكفاءة وتحديث العمليات التي تتعلق بالإدارة التربوية والإدارية.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Employees-salaries.webp') }}" alt="ripet">

                            إدارة الطلاب


                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/employment-contracts.webp') }}" alt="ripet">

                            إدارة الموارد البشرية


                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Monitoring.webp') }}" alt="ripet">

                            الجداول الدراسية


                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Staff-management.webp') }}" alt="ripet">

                            التواصل


                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/reports-invoice.webp') }}" alt="ripet">

                            التقييم والتقارير

                        </li>
                    </ul>

                </div>

            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/secol.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">

        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        أسس نظام احترافي لمدرستك


                    </h6>
                    <p class="pt-3 mb-0">
                        مع رايتو يمكنك تأسيس نظام يساعدك في إدارة الطلاب والموارد البشرية وإعداد الجداول الدراسية بالإضافة إلى التقييم وإعداد التقارير.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--erp-->
<section class="component-ERP mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title"> مهما كان تخصصك! </h2>
                <p class="pt-3 p-decerption">
                    نساعدك في إدارته باحترافية من خلال نظام ERP
                </p>
            </div>
        </div>
        <div class="content-erp row mx-0 row-cols-lg-5 row-cols-md-3 row-cols-1 g-4 pt-5">
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/pieces.webp') }}" alt="pieces">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> بيع بالتجزئة </h3>
                        <p class="card-text">
                            نبني لك نظام يسهل عليك إدارة محلك التجاري، كما يساعدك على متابعة المخزون ومتابعة الحركة المالية.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/service.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> الخدمات المهنية </h3>
                        <p class="card-text">
                            نؤسس لك نظام يحتوي على أدوات تساعدك على تسجيل كافة الطلبات الخاصة بالعملاء، كما تساعدك تلك الأدوات على المتابعة حتى التسليم.

                        </p>

                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/accounting.webp') }}" alt="accounting">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> خدمات الأعمال </h3>
                        <p class="card-text">
                            نؤسس لك أنظمة إدارة دقيقة تمكنك من متابعة المواعيد الخاصة بالعملاء، كما تتوفر تلك الأنظمة بميزة التذكير الآلي للمواعيد.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/learning.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> التعليم </h3>
                        <p class="card-text">
                            نوفر برامج لإدارة المدارس وإدارة الحضانات، كما نوفر برامج لإدارة المراكز التعليمية كافتها.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/estate.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> العقارات </h3>
                        <p class="card-text">
                            نوفر برامج لإدارة كافة شركات الإنشاء والاستثمار العقاري تمكنك من إدارة المخزون الخاص بقطع الغيار وغيرها من المميزات.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->

<!--best-->
<section class="component-best pt-5 pb-5">
    <div class="container">
        <h2 class="title-title">
            لماذا تحصل على برنامج ERP من خلال رايتو؟

        </h2>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Technical-Support.webp') }}" alt="Technical Support">
                    <div class="px-3">
                        <h6 class="title-title "> دعم فني مجاناً</h6>
                        <p class="p-decerption pt-1">نقدم دعمًا فنيًا مجانيًا لعملائنا، وفريق الدعم لدينا متاح للمساعدة في حل أي مشكلة أو استفسار يواجهه العملاء؛ فنحن نولي أهمية كبيرة لتوفير تجربة عملاء مرضية ونسعى جاهدين لضمان رضاهم الكامل.
                        </p>
                    </div>


                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/experience.webp') }}" alt="experience">
                    <div class="px-3">
                        <h6 class="title-title "> تجربة مخصصة</h6>
                        <p class="p-decerption pt-1">
                            نفهم أن كل شركة لديها احتياجات ومتطلبات فريدة؛ ولذلك نعمل على تصميم وتنفيذ حلول مخصصة تناسب تلك الاحتياجات بدقة، كما نعمل عن كثب مع العملاء لفهم متطلباتهم وتقديم الحلول التي تلبي تلك المتطلبات بالضبط.

                        </p>
                    </div>


                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Easy.webp') }}" alt="Easy">
                    <div class="px-3">
                        <h6 class="title-title "> واجهة سهلة الاستخدام
                        </h6>
                        <p class="p-decerption pt-1">
                            نهتم بتوفير واجهات مستخدم بديهية وسهلة الاستخدام تسهل عملية التنقل والاستفادة القصوى من المميزات التي تدعمها، يتيح ذلك للمستخدمين الجدد التكيف بسرعة ويساعدهم على تحقيق أقصى استفادة من الحلول التي نقدمها.

                        </p>
                    </div>


                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Fair-price.webp') }}" alt="Easy">
                    <div class="px-3">
                        <h6 class="title-title "> سعر مميز
                        </h6>
                        <p class="p-decerption pt-1">
                            نلتزم بتوفير أسعار عادلة ومناسبة للأنظمة البرمجية التي نقدمها؛ فنحن نقدر أهمية توفير قيمة ممتازة لعملائنا، ولذلك نحن نضع أسعارنا بعناية لتكون تنافسية وملائمة لمتطلبات السوق وميزانية العملاء.

                        </p>
                    </div>


                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Time.webp') }}" alt="Time ">
                    <div class="px-3">
                        <h6 class="title-title "> توفير الوقت والجهد
                        </h6>
                        <p class="p-decerption pt-1">
                            من خلال حلولنا وبرامجنا المتقدمة نساعد عملائنا على توفير الوقت والجهد، فنحن نقوم بتبسيط العمليات، وتحسين التنظيم، وتوفير أدوات وميزات تسهل إدارة الأعمال، هذا يسمح للعملاء بتحقيق كفاءة أعلى وتحقيق نتائج أفضل بأقل جهد.

                        </p>
                    </div>


                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Continuous.webp') }}" alt="Continuous">
                    <div class="px-3">
                        <h6 class="title-title "> تحديثات وتطوير مستمر
                        </h6>
                        <p class="p-decerption pt-1">
                            نلتزم بتطوير وتحسين أنظمتنا المحاسبية بشكل مستمر، كما نتابع التطورات التكنولوجية ونستمع إلى ملاحظات العملاء ومتطلبات السوق لتحديث وتطوير برامجنا بشكل منتظم. يتيح ذلك للعملاء الاستفادة من التحديثات الجديدة والميزات المحسّنة والتكنولوجيات الأحدث، مما يساعدهم على الابتكار والبقاء في المقدمة في سوقهم.

                        </p>
                    </div>


                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!--end-best-->


{{-- start english content --}}
@else

<section class="component-hadeer">
    <div class="container">
        <h2 class="page-title">Other Programs Offered by Raito</h2>
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
                <h2 class="title-title"> About Raito Softwares</h2>
                <p class="pt-3 p-decerption">
                    In our company, we offer a variety of innovative and customized services to meet the needs of our customers. We also specialize in the development and implementation of accounting ERP solutions that help companies improve their efficiency and manage their businesses better. We not only provide inventory management, sales representative management, sales, and accounting programs but there are also a large number of programs that we will mention in the following paragraphs.
                </p>
            </div>
            <div class="col">
                <img class="w-100 img-system" src="{{ asset('public/assets_site//img/our-p.png') }}" alt="management">
            </div>

        </div>
    </div>
</section>
<!---->
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                    Asset Management Program
                </h2>
                <p class="pt-3 p-decerption">
                    An Asset Management System is a system used to organize and monitor all the assets owned by an institution or organization. These assets include technical equipment, devices, software, properties, and other resources that can be tracked and managed.
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Property Management.webp') }}" alt="ripet">
                            Asset Monitoring
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Electronicinvoices.webp') }}" alt="ripet">
                            Software Management
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/management.webp') }}" alt="ripet">
                            Property Management
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/sale-system.webp') }}" alt="ripet">
                            Device Management
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/assets.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                      Foundations of an Asset Management Software
                    </h6>
                    <p class="pt-3 mb-0">
                      You can monitor assets, manage software, property, and hardware through our professional ERP system.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">Contact us now</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                  Real Estate Management Software
                </h2>
                <p class="pt-3 p-decerption">
                  A real estate management system is a comprehensive software solution designed to efficiently and effectively manage the operations and assets of a real estate organization. It is known for its versatility and scalability, providing a tailored solution to handle property management, leasing, and financial processes for the real estate enterprise.
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Real-Estate.webp') }}" alt="ripet">
                            Property Management
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Property Management.webp') }}" alt="ripet">
                            Asset Management
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Manufacturing.webp') }}" alt="ripet">
                            Lease Management
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Sales.webp') }}" alt="ripet">
                            Accounting Operations Management
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/purchase management.webp') }}" alt="ripet">
                            Financial Operations Management
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/real.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">

        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                      Establish a Professional Property Management System
                    </h6>
                    <p class="pt-3 mb-0">
                      You can establish a program that helps you manage your properties with an easy-to-use interface.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">Contact us now</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                  Law Practice Management System
                </h2>
                <p class="pt-3 p-decerption">
                  We provide software solutions for managing and streamlining the operations of legal firms, specializing in case and document management. What sets it apart is its versatility and ability to adapt to the unique needs of any firm, allowing you to efficiently manage your cases and streamline your operations with an integrated and customizable platform.
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/representatives.webp') }}" alt="ripet">
                            Case Tracking
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/customer-data.webp') }}" alt="ripet">
                            Office Expense Management
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Invoice.webp') }}" alt="ripet">
                            Document Generation
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/reports-invoice.webp') }}" alt="ripet">
                            Report Generation
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/low.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                      Establish a professional Software now
                    </h6>
                    <p class="pt-3 mb-0">
                      you can establish a professional law practice system to track cases, manage office expenses, and generate bonds and reports.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">Contact us now</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="title-title">
                  School Management Software
                </h2>
                <p class="pt-3 p-decerption">
                  The School Management System developed by Raito for Software Solutions is a comprehensive system used to organize and facilitate the management of daily operations in schools. This system aims to improve efficiency and modernize processes related to educational and administrative management.
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Employees-salaries.webp') }}" alt="ripet">
                            Student Management
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/employment-contracts.webp') }}" alt="ripet">
                            Human Resources Management
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Monitoring.webp') }}" alt="ripet">
                            Timetables
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/Staff-management.webp') }}" alt="ripet">
                            Communication
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site//img/icon/reports-invoice.webp') }}" alt="ripet">
                            Assessment and Reporting
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site//img/secol.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                      Establish a professional system for your school
                    </h6>
                    <p class="pt-3 mb-0">
                      With Raito, you can establish a system that helps you manage students, human resources, as well as assessment and report generation.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">Get started now</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--erp-->
<section class="component-ERP mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title">No matter your specialization!</h2>
                <p class="pt-3 p-decerption">
                  We assist you in managing it professionally through an ERP system.
                </p>
            </div>
        </div>
        <div class="content-erp row mx-0 row-cols-lg-5 row-cols-md-3 row-cols-1 g-4 pt-5">
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/pieces.webp') }}" alt="pieces">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">Retail Sales</h3>
                        <p class="card-text">
                          We build a system for you that facilitates managing your retail store, as well as helps you track inventory and financial transactions.    
                        </p>

                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/service.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">Professional Services</h3>
                        <p class="card-text">
                          We establish a system for you that includes tools to help you record all customer requests, as well as assist you in tracking them until delivery.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/accounting.webp') }}" alt="accounting">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">Business Services</h3>
                        <p class="card-text">
                          We establish accurate management systems that enable you to track customer appointments, with the added feature of automatic reminders for appointments.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/learning.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">Education</h3>
                        <p class="card-text">
                          We provide programs for school management and nursery management, as well as programs for managing educational centers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site//img/estate.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> Real Estate </h3>
                        <p class="card-text">
                          We provide programs for managing all real estate construction and investment companies, allowing you to manage spare parts inventory and other features.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->
<!--best-->
<section class="component-best pt-5 pb-5">
    <div class="container">
        <h2 class="title-title">
          Why Choose Raito for Programming and ERP Systems?
        </h2>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Technical-Support.webp') }}" alt="Technical Support">
                    <div class="px-3">
                        <h6 class="title-title ">use Technologies</h6>
                        <p class="p-decerption pt-1">We utilize the latest cloud technologies to develop and deliver our solutions. We follow best practices and keep up with rapid changes in the local and global market to ensure the delivery of advanced and reliable technologies.</p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/experience.webp') }}" alt="experience">
                    <div class="px-3">
                        <h6 class="title-title ">Integration Diverse Systems</h6>
                        <p class="p-decerption pt-1">
                          We can integrate our systems with various platforms, whether governmental or private. This allows customers to benefit from seamless integration and facilitates the exchange of information between systems.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Easy.webp') }}" alt="Easy">
                    <div class="px-3">
                        <h6 class="title-title ">Diverse Software Services</h6>
                        <p class="p-decerption pt-1">We provide an ERP system that is flexible and capable of multitasking, allowing customers to benefit from a wide range of diverse software services that meet their unique needs.</p>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Fair-price.webp') }}" alt="Easy">
                    <div class="px-3">
                        <h6 class="title-title ">Security</h6>
                        <p class="p-decerption pt-1">
                          We prioritize securing our services with the highest levels of security and protection. We follow strict standards to ensure the security of customer data and system stability.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Time.webp') }}" alt="Time ">
                    <div class="px-3">
                        <h6 class="title-title ">Commitment to Quality Standards</h6>
                        <p class="p-decerption pt-1">We set high-quality standards for our service and continuously strive to improve our operations. We actively listen to our customers' feedback and work diligently to meet their needs and provide innovative and reliable solutions.</p>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site//img/Continuous.webp') }}" alt="Continuous">
                    <div class="px-3">
                        <h6 class="title-title ">Skilled Team</h6>
                        <p class="p-decerption pt-1">
                          Our team possesses strong skills in dealing with the challenges of developing complex accounting systems. We ensure the provision of an integrated team consisting of professional programmers and analysts who interact perfectly to develop customized ERP solutions according to customer requirements.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!--end-best-->
@endif

@endsection
