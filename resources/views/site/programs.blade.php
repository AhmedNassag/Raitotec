@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
شركة رايتو | أنظمة برمجية متقدمة ومبتكرة
@else
Raito Company | Advanced And Innovative Software Systems
@endif
@endsection



@section('meta-description')
<meta name="description" content="اكتشف أنظمة برمجية متقدمة ومبتكرة تلبي احتياجات عملك مع رايتو، نحن نقدم حلولًا مخصصة لتطوير وتنفيذ أنظمة برمجية متكاملة لتحسين كفاءة عملك.">
@endsection



@section('meta-keywords')
<meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if (App::getLocale() == 'ar')
            أهم أنظمة ERP التي نقدمها
            @else
            The most important ERP systems we offer
            @endif
        </h1>
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <h2 class="title-title">
            @if (App::getLocale() == 'ar')
            نبذة عن برامج رايتو
            @else
            About ERP systems
            @endif
        </h2>
        <p class="pt-3 p-decerption">
            @if (App::getLocale() == 'ar')
            في شركتنا نقدم مجموعة متنوعة من الخدمات المبتكرة والمخصصة لتلبية احتياجات عملائنا، كما نتخصص في تطوير وتنفيذ حلول ERP المحاسبية التي تساعد الشركات على تحسين كفاءتها وإدارة أعمالها بشكل أفضل.
            @else
            At Raito, we offer a variety of innovative and customized services to meet the needs of our customers. We specialize in developing and implementing accounting ERP systems that help businesses improve their efficiency and manage their operations better.
            @endif
        </p>
        <p class="pt-3 p-decerption">
            @if (App::getLocale() == 'ar')
            تمكنا من إضافة نظم رايتو ERP للحلول الإدارية و المحاسبية المركزي السحابى مــن خلال عــدة برامـج (Modules ً ( مترابطة لتقديم الخدمات الأكثر طلبا ً و احتياجا في الوقت الحالي و غيرها من المنصات الخدمية المتخصصة الأخرى والأنشطة التسويقية على منصات التواصل الاجتماعي العالمية مثل Face Instagram/Twitter/Book/ و الإعلانات الممولة على Google
            @else
            We have been able to add Riteeo ERP systems for cloud-based administrative and accounting solutions through several interconnected modules to provide the most demanding services at the present time and other specialized service platforms and marketing activities on global social media platforms.
            @endif
        </p>
    </div>
</section>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        @if (App::getLocale() == 'ar')
                        مع رايتو عملك أسهل!
                        @else
                        Make Your Business Easier with Raito!
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                        @else
                        You don't need to be an accountant to accomplish your financial reports, We establish a customizable integrated system that suits over 40 different fields.
                        @endif
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index')}}" class="p-3 px-4 button-stert">
                        {{ trans('site.Start Free Use Now') }}
                    </a>
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
                <h2 class="title-title">
                    @if (App::getLocale() == 'ar')
                    مهما كان تخصصك!
                    @else
                    No matter your specialization!
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    نساعدك في إدارته باحترافية من خلال نظام ERP
                    @else
                    We assist you in managing it professionally through an ERP system.
                    @endif
                </p>
            </div>
        </div>
        <div class="content-erp row mx-0 row-cols-lg-5 row-cols-md-3 row-cols-1 g-4 pt-5">
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/pieces.webp') }}" alt="pieces" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">
                            @if (App::getLocale() == 'ar')
                            بيع بالتجزئة
                            @else
                            Retail Sales
                            @endif
                        </h3>
                        <p class="card-text">
                            @if (App::getLocale() == 'ar')
                            نبني لك نظام يسهل عليك إدارة محلك التجاري، كما يساعدك على متابعة المخزون ومتابعة الحركة المالية.
                            @else
                            We build a system for you that facilitates managing your retail store, as well as helps you track inventory and financial transactions.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/service.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">
                            @if (App::getLocale() == 'ar')
                            الخدمات المهنية
                            @else
                            Professional Services
                            @endif
                            {{ trans('site.Professional services') }}
                        </h3>
                        <p class="card-text">
                            @if (App::getLocale() == 'ar')
                            نؤسس لك نظام يحتوي على أدوات تساعدك على تسجيل كافة الطلبات الخاصة بالعملاء، كما تساعدك تلك الأدوات على المتابعة حتى التسليم.
                            @else
                            We establish a system for you that includes tools to help you record all customer requests, as well as assist you in tracking them until delivery.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/accounting.webp') }}" alt="accounting" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">
                            @if (App::getLocale() == 'ar')
                            خدمات الأعمال
                            @else
                            Business Services
                            @endif
                        </h3>
                        <p class="card-text">
                            @if (App::getLocale() == 'ar')
                            نؤسس لك أنظمة إدارة دقيقة تمكنك من متابعة المواعيد الخاصة بالعملاء، كما تتوفر تلك الأنظمة بميزة التذكير الآلي للمواعيد.
                            @else
                            We establish accurate management systems that enable you to track customer appointments, with the added feature of automatic reminders for appointments.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/learning.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">
                            @if (App::getLocale() == 'ar')
                            التعليم
                            @else
                            Education
                            @endif
                        </h3>
                        <p class="card-text">
                            @if (App::getLocale() == 'ar')
                            نوفر برامج لإدارة المدارس وإدارة الحضانات، كما نوفر برامج لإدارة المراكز التعليمية كافتها.
                            @else
                            We provide programs for school management and nursery management, as well as programs for managing educational centers.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/estate.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title">
                            @if (App::getLocale() == 'ar')
                            العقارات
                            @else
                            Real Estate
                            @endif
                        </h3>
                        <p class="card-text">
                            @if (App::getLocale() == 'ar')
                            نوفر برامج لإدارة كافة شركات الإنشاء والاستثمار العقاري تمكنك من إدارة المخزون الخاص بقطع الغيار وغيرها من المميزات.
                            @else
                            We provide programs for managing all real estate construction and investment companies, allowing you to manage spare parts inventory and other features.
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->



<!--programs-->
@foreach($data as $program)
<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="title-title">
                    {{ @$program->second_title }}
                </h2>
                <p class="pt-3 p-decerption">
                    {!! @$program->second_content !!}
                </p>
                @if(Str::contains($program->second_title,'الحسابات') || Str::contains($program->second_title,'Accounting'))
                <div class="mt-4">
                    <ul>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/reports-invoice.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            تقارير مالية
                            @else
                            Financial reports
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Quotations.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            عروض الأسعار
                            @else
                            Quotations
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/management.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة الأصول
                            @else
                            Asset management
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Invoice.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إعداد الفواتير
                            @else
                            Invoice preparation
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Revenue-management.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة الإيرادات
                            @else
                            Revenue management
                            @endif
                        </li>
                    </ul>
                </div>

                @elseif(Str::contains($program->second_title,'المخزون') || Str::contains($program->second_title,'Inventory'))
                <div class="mt-4">
                    <ul>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/product-life.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة دورة حياة المنتج
                            @else
                            Product lifecycle management
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/movements.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            متابعة تحركات المخزون
                            @else
                            Inventory movement tracking
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Manufacturing.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة التصنيع والإنتاج
                            @else
                            Manufacturing management
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Sales.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة المبيعات
                            @else
                            Sales management
                            @endif
                        </li>
                        <li class="mb-2 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/purchase management.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة المشتريات
                            @else
                            Purchase management
                            @endif
                        </li>
                    </ul>
                </div>

                @elseif(Str::contains($program->second_title,'المناديب') || Str::contains($program->second_title,'Representative'))
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/representatives.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            متابعة كميات المخزون
                            @else
                            GPS tracking
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/customer-data.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            تحرير بيانات العميل
                            @else
                            Customer relationship management
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/sels-sels.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إجراء عمليات البيع
                            @else
                            Order management
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/performance.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            متابعة أداء المندوب
                            @else
                            Reporting
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/additional-tasks.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            تحديد المهام الإضافية
                            @else
                            Edit customer data
                            @endif
                        </li>
                    </ul>
                </div>

                @elseif(Str::contains($program->second_title,'الموارد البشرية') || Str::contains($program->second_title,'Employee'))
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/employee-data.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدخال بيانات الموظف
                            @else
                            Employee data
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/employment-contracts.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إعداد عقود العمل
                            @else
                            Employee contracts
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Employees-salaries.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            مرتبات الموظفين
                            @else
                            Payroll
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Monitoring.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            مراقبة الحضور والإنصراف
                            @else
                            Attendance
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Staff-management.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة الموظفين
                            @else
                            Benefits
                            @endif
                        </li>
                    </ul>
                </div>

                @elseif(Str::contains($program->second_title,'المبيعات') || Str::contains($program->second_title,'POS'))
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Electronicinvoices.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            فواتير إلكترونية
                            @else
                            Electronic invoices
                            @endif
                            {{trans('site.Electronic invoices') }}
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/quotations (2).webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إصدار عروض الأسعار
                            @else
                            Quotations
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/sale-system.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            توفير نظام نقط البيع
                            @else
                            Point of sale system
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Accurate-reports.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            تقارير دقيقة
                            @else
                            توفير خيارات التسعير
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/pricing-options.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة الموظفين
                            @else
                            Pricing options
                            @endif
                        </li>
                    </ul>
                </div>
                @endif
                <div class="mt-4">
                    <a href="{{ route('program.show',@$program->slug) }}" class="p-2 px-4 button-stert button-mor">{{ trans('site.More') }}...</a>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/attachments/program/'.@$program->photo) }}" alt="sales" loading="lazy">
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


                    @if(Str::contains($program->second_title,'الحسابات') || Str::contains($program->second_title,'Accounting'))
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أحصل على نظام إدارة حسابات احترافي
                        @else
                        Get a professional Accounting System
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        يمكنك أن تتابع باستمرار دفاتر الحسابات الخاصة بك بالإضافة إلى مراقبة الإيرادات والمصروفات وإعداد دليل حسابات يقبل التعديل.
                        @else
                        you can track your accounting books, monitor your revenue and expenses, and prepare an adjustable chart of accounts.
                        @endif
                    </p>

                    @elseif(Str::contains($program->second_title,'المخزون') || Str::contains($program->second_title,'Inventory'))
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس برنامج احترافي لإدارة مخزونك
                        @else
                        Establish your system now!
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        بإمكانك أن تقوم بـ إدارة ﻋﻤﻴﻠﺔ اﻟﺸﺮاء واﺻﺪار ﻓﻮاﺗﻴﺮ اﻟﻤﻮردﻳﻦ ورصد ﻣﺮاﺣﻞ و ﻃﺮق اﻟﺴﺪاد اﻟﻤﺨﺘﻠﻔﺔ من خلال نظامنا الاحترافي
                        @else
                        Our system allows you to manage your purchase process, issue supplier invoices, and track different payment stages!
                        @endif
                    </p>

                    @elseif(Str::contains($program->second_title,'المناديب') || Str::contains($program->second_title,'Representative'))
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس نظام لإدارة المناديب
                        @else
                        Establish your system now!
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        تابع خط سير مندوبي الشحن بالإضافة إلى كمية المخزون، واستعلم عن المرتجعات من خلال نظام ERP احترافي.
                        @else
                        With Raito's Sales Representative Management System, you can improve your sales process, increase your sales!
                        @endif
                    </p>

                    @elseif(Str::contains($program->second_title,'الموارد البشرية') || Str::contains($program->second_title,'Employee'))
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس نظام احترافي لإدارة موظفيك
                        @else
                        human resources management system
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        بإمكانك من خلال نظامنا أن تدير موظفينك بسهولة، تراقب حضورهم وانصرافهم ومرتباتهم وغيرها.
                        @else
                        With Raito's Human Resources System, you can streamline your HR processes, improve employee satisfaction
                        @endif
                    </p>

                    @elseif(Str::contains($program->second_title,'المبيعات') || Str::contains($program->second_title,'POS'))
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس نظام احترافي لإدارة موظفيك
                        @else
                        human resources management system
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        بإمكانك من خلال نظامنا أن تدير موظفينك بسهولة، تراقب حضورهم وانصرافهم ومرتباتهم وغيرها.
                        @else
                        With Raito's Human Resources System, you can streamline your HR processes, improve employee satisfaction
                        @endif
                    </p>
                    @endif
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index')}}" class="p-3 px-4 button-stert">{{ trans('site.Start Free Use Now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endforeach


<div class="component-programs pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="title-title">
                    @if (App::getLocale() == 'ar')
                    برامج أخرى
                    @else
                    Other Programs
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    في رايتو نقدم الكثير من البرامج الأخرى، مثل برامج إدارة الأصول الذي يستخدم في تنظيم تلك الأصول وإدارتها، بالإضافة إلى برامج لإدارة المدارس وبرامج لإدارة العقارات، كما تتوفر أنظمة لإدارة المحاماة وغيرها؛ لذلك مهما كان مجالك سنتمكن من مساعدتك.
                    @else
                    At Raito, we provide a wide range of other software programs, This includes Asset Management software, which is used to organize and manage assets effectively.
                    @endif
                </p>
                <div class="mt-4">
                    <ul>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/School-management.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة المدارس
                            @else
                            School Management
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Real-Estate.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة العقارات
                            @else
                            Real Estate Management
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Law.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة المحاماة
                            @else
                            Law Practice Management
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Property Management.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة الأملاك
                            @else
                            Property Management
                            @endif
                        </li>
                        <li class="mb-1 p-decerption">
                            <img class="img-repet" src="{{ asset('public/assets_site/img/icon/Station.webp') }}" alt="ripet">
                            @if (App::getLocale() == 'ar')
                            إدارة المحطات
                            @else
                            Station Management
                            @endif
                        </li>
                    </ul>
                </div>
                <div class="mt-4">
                    <a href="{{ route('program.other') }}" class="p-2 px-4 button-stert button-mor">{{ trans('site.More') }}...</a>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/our-p.png') }}" alt="sales">
            </div>
        </div>
    </div>
</div>


<!--whyPrograms-->
<section class="component-best pt-5 pb-5">
    <div class="container">
        <h2>
            @if (App::getLocale() == 'ar')
            لماذا تعتبر رايتو شريكك الأفضل لإدارة أعمالك؟
            @else
            Why Choose Raito for Programming and ERP Systems?
            @endif
            <br>
            @if (App::getLocale() == 'ar')
            تعتبر شركتنا رائدة في مجال إنشاء الأنظمة المحاسبية ERP، والإدارة السحابية التي قدمـت بالفعـل حلولا تقنية متميزة وليس لدينا أي قيود تعـوق التطويــر المستمـــر والمتنـامـي ، مستشــرفيــن عهــدا جديـدا من التطــور التقنـي و نجـاح الاعمـال، واهم ما يميزنا ما يلي:
            @else
            We are a leading company in the field of ERP accounting systems and cloud management. We have already provided exceptional technical solutions, and we have no limitations that hinder continuous development and growth.
            @endif
        </h2>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            @foreach($whyPrograms as $whyProgram)
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{ asset('public/attachments/whyProgram/'.$whyProgram->photo) }}" alt="{{ $whyProgram->title }}" loading="lazy">
                    <div class="px-3">
                        <h6 class="title-title ">
                            {{ $whyProgram->title }}
                        </h6>
                        <p class="p-decerption pt-1">
                            {{ $whyProgram->content }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--whyPrograms-->
@endsection
