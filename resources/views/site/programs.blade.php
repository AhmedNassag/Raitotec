@extends('site.layouts.master')



@section('title')

@if(app()->getLocale() == 'ar')
شركة رايتو |  أنظمة برمجية متقدمة ومبتكرة
@endif

@endsection



@section('meta-description')

@if(app()->getLocale() == 'ar')
<meta name="description" content="اكتشف أنظمة برمجية متقدمة ومبتكرة تلبي احتياجات عملك مع رايتو، نحن نقدم حلولًا مخصصة لتطوير وتنفيذ أنظمة برمجية متكاملة لتحسين كفاءة عملك.">
@endif

@endsection



@section('content')
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if(app()->getLocale() == 'ar')
            أحصل على أنظمة برمجية متقدمة ومبتكرة مع رايتو
            @endif
        </h1>
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <h2 class="title-title"> نبذة عن برامج رايتو</h2>
        <p class="pt-3 p-decerption">
            في شركتنا نقدم مجموعة متنوعة من الخدمات المبتكرة والمخصصة لتلبية احتياجات عملائنا، كما نتخصص في تطوير وتنفيذ حلول ERP المحاسبية التي تساعد الشركات على تحسين كفاءتها وإدارة أعمالها بشكل أفضل.
        </p>
        <p class="pt-3 p-decerption">
            تمكنا من إضافة نظم رايتو ERP للحلول الإدارية و المحاسبية المركزي السحابى مــن خلال عــدة برامـج (Modules ً ( مترابطة لتقديم الخدمات الأكثر طلبا ً و احتياجا في الوقت الحالي و غيرها من المنصات الخدمية المتخصصة الأخرى والأنشطة التسويقية على منصات التواصل الاجتماعي العالمية مثل Face Instagram/Twitter/Book/ و الإعلانات الممولة على Google
        </p>
    </div>
</section>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6> مع رايتو عملك أسهل!
                    </h6>
                    <p class="pt-3 mb-0">
                        لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
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
                    <img src="{{ asset('public/assets_site/img/pieces.webp') }}" alt="pieces">
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
                    <img src="{{ asset('public/assets_site/img/service.webp') }}" alt="vision">
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
                    <img src="{{ asset('public/assets_site/img/accounting.webp') }}" alt="accounting">
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
                    <img src="{{ asset('public/assets_site/img/learning.webp') }}" alt="vision">
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
                    <img src="{{ asset('public/assets_site/img/estate.webp') }}" alt="vision">
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
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">

                <h2 class="title-title">
                    برنامج إدارة الحسابات | المحاسبة
                </h2>
                <p class="pt-3 p-decerption">
                    نقدم ﺑﺮﻧﺎﻣﺞ إدارة حسابات شامل يهدف لزيادة أرباح شركتك، ﻫﺎم ﻟﻜﺎﻓﺔ اﻟﻤﻨﺸﺄت ﻳﺘﻢ ﻣﻦ ﺧﻼﻟﻪ إدارة اﻟﻤﺪﻓﻮﻋـﺎت، اﻟﻘﻴـﻮد اﻟﻴﻮﻣﻴـﺔ، اﻻﻳﺪاﻋـﺎت، اﻟﺘﺤﻮﻳـﻼت اﻟﺒﻨﻜﻴـﺔ ﺑﻴـﻦ اﻟﺤﺴﺎﺑﺎت، ﺗﺴـﻮﻳﺔ اﻟﺤﺴـﺎﺑﺎت اﻟﺒﻨﻜﻴﺔ بالإضافة إلى إعداد اﻟﺸــﻴﻜﺎت وﻓﻮاﺗﻴــﺮ اﻻﻳــﺮادات، ﺳــﻨﺪات اﻟﻘﺒــﺾ بالإضافة إلى ﻓﻮاﺗﻴــﺮ اﻟﻤﺼﺮوﻓــﺎت و ﺗﺼﻨﻴﻔﻬــﺎ وغيرها من الخدمات.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/image-p.png') }}" alt="ripet">
                            تقارير مالية
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/image-perg.png') }}" alt="ripet">

                            عروض الأسعار</li>
                        <li class="mb-1 p-decerption"> إدارة الأصول</li>
                        <li class="mb-1 p-decerption"> إعداد الفواتير</li>
                        <li class="mb-1 p-decerption">إدارة الإيرادات</li>
                    </ul>

                </div>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> قراءة المزيد</a>

                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/management system.webp') }}" alt="sales">
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
                    <h6> أحصل على نظام إدارة حسابات احترافي

                    </h6>
                    <p class="pt-3 mb-0">
                        يمكنك أن تتابع باستمرار دفاتر الحسابات الخاصة بك بالإضافة إلى مراقبة الإيرادات والمصروفات وإعداد دليل حسابات يقبل التعديل.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
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
                    برنامج إدارة المخزون
                </h2>
                <p class="pt-3 p-decerption">
                    أﻫـﻢ ﻣﻜﻮﻧـﺎت ﻧﻈـﺎم راﻳﺘـﻮ ERP اﻟﺴـﺤﺎﺑﻲ ﺑﺤﻴـﺚ ﻳﻤﻜـﻦ ﻣـﻦ ﺧﻼﻟـﻪ إدارة ﻛﻞ ﻣـﻦ ﻋﻤﻠﻴـﺎت أﻗﺴـﺎم اﻟﻤﺨـﺰون و اﻟﺘﺼﻨﻴـﻊ و اﻟﻤﺸـﺘﺮﻳﺎت و اﻟﻤﺒﻴﻌـﺎت وأهم ما يميزه أنه ﻣﺘﺮاﺑـﻂ ﻣـﻊ ﺗﻄﺒﻴـﻖ اﻟﺠـﻮال اﻟﺨﺎص ﺑﻤﻨﺪوﺑﻲ اﻟﻤﺒﻴﻌﺎت ( ﻧﻘﺎط اﻟﺒﻴﻊ اﻟﻤﺘﺤﺮﻛﺔ ) ( ﻳﻤﻜـﻦ ﺗﻨﺸـﻴﻂ إدارة ﻫـﺬه اﻟﻌﻤﻠﻴـﺎت ﻣﺠﺘﻤﻌـﺔ ﻓـﻲ ﻧﻔـﺲ اﻟﺒﺮﻧﺎﻣـﺞ (Module) أو أﻳﻘـﺎفها حسب احتياجك

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption"> إدارة دورة حياة المنتج</li>
                        <li class="mb-1 p-decerption"> متابعة تحركات المخزون
                        </li>
                        <li class="mb-1 p-decerption"> إدارة التصنيع والإنتاج
                        </li>
                        <li class="mb-1 p-decerption"> إدارة المبيعات
                        </li>
                        <li class="mb-1 p-decerption"> إدارة المشتريات</li>
                    </ul>

                </div>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> قراءة المزيد</a>

                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/Stores.webp') }}" alt="sales">
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
                        أسس برنامج احترافي لإدارة مخزونك
                    </h6>
                    <p class="pt-3 mb-0">
                        بإمكانك أن تقوم بـ إدارة ﻋﻤﻴﻠﺔ اﻟﺸﺮاء واﺻﺪار ﻓﻮاﺗﻴﺮ اﻟﻤﻮردﻳﻦ ورصد ﻣﺮاﺣﻞ و ﻃﺮق اﻟﺴﺪاد اﻟﻤﺨﺘﻠﻔﺔ من خلال نظامنا الاحترافي
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
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
                    نظام إدارة المناديب
                </h2>
                <p class="pt-3 p-decerption">
                    هو نظام يعمل على إدارة العملية البيعة كامله للمندوب من خلال توفير كل الشاشات اللازمة له، والنظام يتوفر به تقنية GPS، يمكن من خلاله أيضاً ﺗﺴــﺠﻴﻞ و ﻣﺘﺎﺑﻌــﺔ ﻣﻮاﻋﻴــﺪ ﺑــﺪء و اﻧﺘﻬــﺎء زﻳــﺎرات اﻟﻤﻨﺪوﺑﻴﻦ ﻟﻠﻌﻤﻼء، كما يمكن عن طريقه اﻻﺳــﺘﻌﻼم ﻋــﻦ اﻟﻤﺮﺗﺠﻌــﺎت وﺗﺼﻨﻴﻔﻬــﺎ إذا كانت ﺻﺎﻟﺤــﺔ أو ﻣﻨﺘﻬﻴﺔ اﻟﺼﻼﺣﻴﺔ.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption"> متابعة كميات المخزون
                        </li>
                        <li class="mb-1 p-decerption"> تحرير بيانات العميل

                        </li>
                        <li class="mb-1 p-decerption"> إجراء عمليات البيع

                        </li>
                        <li class="mb-1 p-decerption"> متابعة أداء المندوب

                        </li>
                        <li class="mb-1 p-decerption"> تحديد المهام الإضافية</li>
                    </ul>

                </div>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> قراءة المزيد</a>

                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/delegates.webp') }}" alt="sales">
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
                        أسس نظام لإدارة المناديب
                    </h6>
                    <p class="pt-3 mb-0">
                        تابع خط سير مندوبي الشحن بالإضافة إلى كمية المخزون، واستعلم عن المرتجعات من خلال نظام ERP احترافي.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
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
                    نظام إدارة الموارد البشرية
                </h2>
                <p class="pt-3 p-decerption">
                    نظام بقوالب ﺗﻔﺼﻴﻠﻴﺔ ﻋﻦ اﻟﺒﻴﺎﻧﺎت اﻟﺸﺨﺼﻴﺔ الخاصة بالموظف، ويتضمن النظام إﻋﺪادات ﺗﻔﺼﻴﻠﻴﺔ ﻋﻦ اﻟﺤﻀﻮر واﻟﺘﺄﺧﺮ والإﺟﺎزات واﻟﻐﻴﺎب، كما يتضمن ﺗﺤﺪﻳﺪ ﺻﻼﺣﻴﺎت اﻻﺳﺘﺨﺪام ﻟﻜﻞ موظف، كما يتوفر به ﺧﺪﻣﺔ ﺗﺨﺼﻴﺺ ﻋﻘﻮد اﻟﻌﻤﻞ ﺑﻜﺎﻣﻞ تفاصيلها، كما يشمل إدراج ﺗﻔﺎﺻﻴﻞ ﻃﻠﺒﺎت اﻟﺘﻮﻇﻴﻒ اﻟﻤﻌﺮوﺿﺔ وعرض اﻟﻮﻇﺎﺋﻒ اﻟﻤﺘﺎﺣﺔ وغيرها.

                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption"> إدخال بيانات الموظف

                        </li>
                        <li class="mb-1 p-decerption"> إعداد عقود العمل


                        </li>
                        <li class="mb-1 p-decerption"> مرتبات الموظفين


                        </li>
                        <li class="mb-1 p-decerption"> مراقبة الحضور والإنصراف

                        </li>
                        <li class="mb-1 p-decerption"> إدارة الموظفين
                        </li>
                    </ul>

                </div>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> قراءة المزيد</a>

                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/HR.webp') }}" alt="sales">
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
                        أسس نظام احترافي لإدارة موظفيك
                    </h6>
                    <p class="pt-3 mb-0">
                        بإمكانك من خلال نظامنا أن تدير موظفينك بسهولة، تراقب حضورهم وانصرافهم ومرتباتهم بسهولة
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
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
                    برنامج إدارة المبيعات | نقط البيع
                </h2>
                <p class="pt-3 p-decerption">
                    نقدم برنامج نقط البيع POS الذي يعزز الأنشطة التجارية ويساهم في زيادة الأرباح، ويعتبر هذا البرنامج نظام مبيعات متكامل يوفر حلولاً شاملة لتسهيل عملية البيع وجميع الجوانب المرتبطة بها، يعمل البرنامج على تسهيل عمليات البيع وتوفير خيارات مرنة مثل الأقساط وقوائم الأسعار المتعددة والخصومات المقدمة من شركات التأمين.
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption"> فواتير إلكترونية</li>
                        <li class="mb-1 p-decerption"> إصدار عروض الأسعار</li>
                        <li class="mb-1 p-decerption">توفير نظام نقط البيع</li>
                        <li class="mb-1 p-decerption"> تقارير دقيقة</li>
                        <li class="mb-1 p-decerption">توفير خيارات التسعير</li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> قراءة المزيد</a>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/Sale-purchases.webp') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        أسس نظام احترافي لإدارة موظفيك

                    </h6>
                    <p class="pt-3 mb-0">
                        بإمكانك من خلال نظامنا أن تدير موظفينك بسهولة، تراقب حضورهم وانصرافهم ومرتباتهم بسهولة
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert"> ابدأ الاستخدام الآن</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!---->
<!--programs-->
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="title-title">
                    برامج أخرى
                </h2>
                <p class="pt-3 p-decerption">
                    في رايتو نقدم الكثير من البرامج الأخرى، مثل برامج إدارة الأصول الذي يستخدم في تنظيم تلك الأصول وإدارتها، بالإضافة إلى برامج لإدارة المدارس وبرامج لإدارة العقارات، كما تتوفر أنظمة لإدارة المحاماة وغيرها؛ لذلك مهما كان مجالك سنتمكن من مساعدتك.
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption"> إدارة المدارس</li>
                        <li class="mb-1 p-decerption"> إدارة العقارات</li>
                        <li class="mb-1 p-decerption"> إدارة المحاماة</li>
                        <li class="mb-1 p-decerption"> إدارة الأملاك </li>
                        <li class="mb-1 p-decerption">إدارة المحطات </li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> قراءة المزيد</a>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/seles.png') }}" alt="sales">
            </div>
        </div>
    </div>
</div>
<!---->
<!--best-->
<section class="component-best pt-5 pb-5">
    <div class="container">
        <h2>لماذا تعتبر رايتو
            <br>
            شريكك الأفضل لإدارة أعمالك؟</h2>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/assets_site/img/Technical-Support.webp') }}" alt="Technical Support">
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
                    <img src="{{ asset('public/assets_site/img/experience.webp') }}" alt="experience">
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
                    <img src="{{ asset('public/assets_site/img/Easy.webp') }}" alt="Easy">
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
                    <img src="{{ asset('public/assets_site/img/Fair-price.webp') }}" alt="Easy">
                    <div class="px-3">
                        <h6 class="title-title "> سعر عادل
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
                    <img src="{{ asset('public/assets_site/img/Time.webp') }}" alt="Time ">
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
                    <img src="{{ asset('public/assets_site/img/Continuous.webp') }}" alt="Continuous">
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
<!--custumer-img-->
<section class="component-custemer mt-5 pb-5">
    <div class="text-center">
        <h2 class="title-title"> أهم عملائنا </h2>
    </div>
    <div class="owl-carousel component-team-new pt-5">
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader01.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader02.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader03.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader04.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader05.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader06.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader07.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader08.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader09.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader10.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader11.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader12.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader13.webp') }}" alt="custemer">
        </div>
        <div class="ms-3 me-5">
            <img src="{{ asset('public/assets_site/img/hader14.png') }}" alt="custemer">
        </div>
    </div>
</section>
<!--custumer-img-->
@endsection
