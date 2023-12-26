@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
    @if(Str::contains(@$program->first_title,'المحاسبة') || Str::contains(@$program->first_title,'count'))
    برنامج إدارة الحسابات | أدِر حساباتك بكفاءة ودقة عالية
    
    @elseif(Str::contains(@$program->first_title,'المخزون') || Str::contains(@$program->first_title,'Inventory'))
    برنامج إدارة المخزون المبتكر من رايتو
    
    @elseif(Str::contains(@$program->first_title,'المناديب') || Str::contains(@$program->first_title,'Delegates'))
    برنامج إدارة المناديب | تتبع أنشطة المناديب بدقة
    
    @elseif(Str::contains(@$program->first_title,'الموارد البشرية') || Str::contains(@$program->first_title,'Human'))
    أسس برنامج إدارة شؤون الموظفين احترافي مع رايتو
    
    @elseif(Str::contains(@$program->first_title,'المبيعات') || Str::contains(@$program->first_title,'Sales'))
    برنامج إدارة المبيعات المتكامل من رايتو
    @endif                      

@else
    @if(Str::contains(@$program->first_title,'المحاسبة') || Str::contains(@$program->first_title,'count'))
    Account management software Manage your accounts efficiently and accurately
    
    @elseif(Str::contains(@$program->first_title,'المخزون') || Str::contains(@$program->first_title,'Inventory'))
    Innovative inventory management software from Raito
    
    @elseif(Str::contains(@$program->first_title,'المناديب') || Str::contains(@$program->first_title,'Delegates'))
    Delegates management program Accurately track the activities of the delegates
    
    @elseif(Str::contains(@$program->first_title,'الموارد البشرية') || Str::contains(@$program->first_title,'Human'))
    Establish a professional personnel management program with Raito
    
    @elseif(Str::contains(@$program->first_title,'المبيعات') || Str::contains(@$program->first_title,'Sales'))
    Integrated sales management software from Raito
    @endif                      
@endif
@endsection



@section('meta-description')
@if(Str::contains(@$program->first_title,'المحاسبة') || Str::contains(@$program->first_title,'count'))
<meta name="description" content="أدِر حساباتك بكفاءة ودقة عالية مع برنامج إدارة الحسابات القوي والفعّال من رايتو، لن تحتاج إلى محاسب مالي على الإطلاق بعد الآن؛ بفضل هذا البرنامج الاحترافي.">

@elseif(Str::contains(@$program->first_title,'المخزون') || Str::contains(@$program->first_title,'Inventory'))
<meta name="description" content="حسّن إدارة المخزون وتحكم في المخزون بفعالية مع برنامج إدارة المخزون القوي والمبتكر من رايتو للحلول البرمجية، ويقوم بتقديمه لك فريق ماهر من المبرمجين">

@elseif(Str::contains(@$program->first_title,'المناديب') || Str::contains(@$program->first_title,'Delegates'))
<meta name="description" content="قم بتنظيم وتتبع أنشطة المناديب وتابع المرتجعات وعمليات التحصيل والآجل بكفاءة عالية مع برنامج إدارة المناديب الشامل من رايتو للحلول البرمجية">

@elseif(Str::contains(@$program->first_title,'الموارد البشرية') || Str::contains(@$program->first_title,'Human'))
<meta name="description" content="برنامج إدارة شؤون الموظفين الشامل من رايتو، يمكنك من إدارة وتوزيع المهام الخاصة بموظفيك بسهولة ">

@elseif(Str::contains(@$program->first_title,'المبيعات') || Str::contains(@$program->first_title,'Sales'))
<meta name="description" content="قم بتحسين عمليات المبيعات وزيادة الإنتاجية مع برنامج إدارة المبيعات القوي والموثوق به من رايتو للحلول البرمجية، ويقوم بتقديمه لك فريق ماهر في البرمجة.">

@endif                      
@endsection



@section('meta-keywords')
@if(Str::contains(@$program->first_title,'المحاسبة') || Str::contains(@$program->first_title,'count'))
<meta name="keywords" content="برنامج إدارة الحسابات القوي من رايتو">
@elseif(Str::contains(@$program->first_title,'المخزون') || Str::contains(@$program->first_title,'Inventory'))
<meta name="keywords" content="برنامج إدارة المخزون من رايتو للتحكم الفعال في المخزون">
@elseif(Str::contains(@$program->first_title,'المناديب') || Str::contains(@$program->first_title,'Delegates'))
<meta name="keywords" content="برنامج إدارة المناديب الشامل من رايتو">
@elseif(Str::contains(@$program->first_title,'الموارد البشرية') || Str::contains(@$program->first_title,'Human'))
<meta name="keywords" content="برنامج إدارة شؤون الموظفين المتكامل من رايتو">
@elseif(Str::contains(@$program->first_title,'المبيعات') || Str::contains(@$program->first_title,'Sales'))
<meta name="keywords" content="برنامج إدارة المبيعات من رايتو لتحسين عمليات المبيعات">
@endif 
@endsection



@section('content')

<section class="component-hadeer">
    <div class="container">

        @if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            برنامج إدارة الحسابات
            @else
            Accounting Management Software
            @endif
        </h2>
        <p class="pt-3 text-white fs-6 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            قم بإدارة حسابات شركتك بطريقة ذكية وسلسة تساعدك في زيادة مبيعاتك
            @else
            Manage your company's accounts in a smart way that helps you increase your sales
            @endif
        </p>


        @elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            برنامج إدارة المخزون
            @else
            Inventory Management Software
            @endif
        </h2>
        <p class="pt-3 text-white fs-6 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            أحصل على برنامج بتجربة استخدام سلسة وواجهة مستخدم احترافية لتحسين إدارة المخزون والمبيعات والمشتريات الخاصة بك.
            @else
            Get a software with a smooth user experience and a professional user interface
            @endif
        </p>


        @elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            برنامج إدارة المناديب
            @else
            Sales Representative Management Software
            @endif
        </h2>
        <p class="pt-3 text-white fs-6 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            أدر العملية البيعية التي يقوم بها مندوبيك كاملة من خلال نظام ERP احترافي.
            @else
            Manage your sales representatives' entire sales process through a professional ERP system.
            @endif
        </p>


        @elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            برنامج إدارة شئون الموظفين
            @else
            Employee Management Software
            @endif
        </h2>
        <p class="pt-3 text-white fs-5 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            تابع تطور مستويات أداء الموظفين في شركتك وقيّم كفاءتهم من خلال مجموعة شاملة من التقارير التفصيلية التي يقدمها لك نظام إدارة الموظفين
            @else
            Track employee performance with a comprehensive set of detailed reports from our employee management system.
            @endif
        </p>


        @elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            برنامج إدارة المبيعات
            @else
            Sales Management Software
            @endif
        </h2>
        <p class="pt-3 text-white fs-5 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            أدر عمليات البيع وأصدر فواتيرك الإلكترونية من خلال قوالب جاهزة قابلة للتخصيص
            @else
            Manage your sales process and issue your electronic invoices through customizable templates.
            @endif    
        </p>
        @endif
    </div>
</section>


<!--program-->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
                <h2 class="title-title">
                    @if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن برنامج إدارة الحسابات
                        @else
                        Overview of Accounting Management Software
                        @endif


                    @elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن برنامج إدارة المخزون
                        @else
                        Overview of Inventory Management Software
                        @endif
                    

                    @elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن برنامج إدارة المناديب
                        @else
                        Overview of the Sales Representative Management Program
                        @endif

                    
                    @elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن برنامج إدارة الموظفين
                        @else
                        Overview of the Employee Management System
                        @endif
                    

                    @elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن برنامج ادارة نقاط البيع POS 
                        @else
                        About Raito POS Management Software
                        @endif
                    @endif
                <p class="pt-3 p-decerption">{!! @$program->second_content !!}</p>
            </div>
            <div class="col">
                <img class="w-100 img-system" src="{{ asset('public/attachments/program/'.@$program->photo) }}" alt="management">
            </div>
        </div>
    </div>
</section>

<!--programManage-->
<section class="component-accounting pt-5 pb-5 mt-5">
    <div class="container">
        <h2 class="title-title text-center">
            @if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
                @if (App::getLocale() == 'ar')
                أدر الحسابات العامة في شركتك بإحترافية
                @else
                Manage your company's general accounts professionally
                @endif


            @elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
                @if (App::getLocale() == 'ar')
                أدر المخزون في شركتك بإحترافية مع رايتو
                @else
                Manage your company's inventory professionally with Raito
                @endif
            

            @elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
                @if (App::getLocale() == 'ar')
                أدر تطبيق المناديب بإحترافية مع رايتو
                @else
                Manage your caller application professionally with Raito
                @endif
            

            @elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
                @if (App::getLocale() == 'ar')
                أدر شئون الموظفين بإحترافية مع رايتو
                @else
                Manage employee affairs professionally with Raito
                @endif

            
            @elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))
                @if (App::getLocale() == 'ar')
                أدِّر المبيعات باحترافية مع رايتو
                @else
                Manage sales professionally with Raito
                @endif
            @endif 
        </h2>
        <div class="row mx-0 row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
            @foreach($program->programManages as $programManage)
            <div class="col mb-4">
                <div class="card-accounting text-center">
                    <img class="img-accountiong" src="{{ asset('public/attachments/programManage/'.@$programManage->photo) }}" alt="accounting">
                    <h6 class="title-accountin">{{ $programManage->title }}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!--programAbility-->
<section class="component-work-accounting pt-5 pb-5 mt-5">
    <div class="container">
        @if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
        <h2 class="title-title text-center">
            @if (App::getLocale() == 'ar')
            ما الذي يمكنك القيام به من خلال برنامج إدارة الحسابات؟
            @else
            What you can do with accounting management software
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
        <h2 class="title-title text-center">
            @if (App::getLocale() == 'ar')
            ما الذي يمكنك القيام به من خلال برنامج إدارة المخزون؟
            @else
            What you can do with inventory management software
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
        <h2 class="title-title text-center"> 
            @if (App::getLocale() == 'ar')
            ما الذي يمكنك القيام به من خلال برنامج إدارة المناديب؟
            @else
            What You Can Do with Representative Management Software?
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
        <h2 class="title-title text-center"> 
            @if (App::getLocale() == 'ar')
            ما الذي يمكنك القيام به من خلال برنامج إدارة شئون الموظفين؟
            @else
            What can you do with an employee management system?
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))
        <h2 class="title-title text-center"> 
            @if (App::getLocale() == 'ar')
            ما الذي يمكنك القيام به من خلال برنامج إدارة المبيعات؟
            @else
            What can you do with Raito POS Management Software?
            @endif
        </h2>
        @endif
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
            @foreach($program->programAbilities as $programAbility)
            <div class="col d-flex">
                <div class="about-item-best text-center">
                    <img src="{{ asset('public/attachments/programAbility/'.@$programAbility->photo) }}" alt="{{ $programAbility->title}}">
                    <div class="px-3">
                        <h6 class="title-title">{{ $programAbility->title }}</h6>
                        <p class="p-decerption pt-1">{!! $programAbility->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!---->
@if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
<div class="mt-5 pb-5">
  <section class="component-adver">
    <div class="container">
      <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
        <div class="col defintion-abver">
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أحصل على نظام إدارة حسابات احترافي
                        @else
                        Get a professional accounting management system
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        يمكنك أن تتابع باستمرار دفاتر الحسابات الخاصة بك بالإضافة إلى مراقبة الإيرادات والمصروفات وإعداد دليل حسابات يقبل التعديل.
                        @else
                        You can continuously track your ledgers in addition to monitoring revenue and expenses and preparing an adjustable chart of accounts.
                        @endif
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Contact us now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>


@elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
<div class="mt-5 pb-5">
  <section class="component-adver">
    <div class="container">
      <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
        <div class="col defintion-abver">
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس برنامج احترافي لإدارة مخزونك
                        @else
                        manage your inventory now!
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        بإمكانك أن تقوم بـ إدارة ﻋﻤﻴﻠﺔ اﻟﺸﺮاء واﺻﺪار ﻓﻮاﺗﻴﺮ اﻟﻤﻮردﻳﻦ ورصد ﻣﺮاﺣﻞ و ﻃﺮق اﻟﺴﺪاد اﻟﻤﺨﺘﻠﻔﺔ من خلال نظامنا الاحترافي
                        @else
                        You can manage the purchase and sale orders, track inventory, and optimize supply chain management through our professional system.
                        @endif    
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Contact us now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>


@elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
<div class="mt-5 pb-5">
  <section class="component-adver">
    <div class="container">
      <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
        <div class="col defintion-abver">
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس نظام لإدارة المناديب
                        @else
                        Establish a Sales Representative Management System
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        تابع خط سير مندوبي الشحن بالإضافة إلى كمية المخزون، واستعلم عن المرتجعات من خلال نظام ERP احترافي.
                        @else
                        Track the travel itinerary of your sales representatives, inventory levels, and returns through a professional ERP system.
                        @endif
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Contact us now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>


@elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
<div class="mt-5 pb-5">
  <section class="component-adver">
    <div class="container">
      <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
        <div class="col defintion-abver">
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أسس نظام احترافي لإدارة موظفيك
                        @else
                        a professional system for managing your employees
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        أسس نظام احترافي لإدارة موظفيك
                        @else
                        Through our system, you can easily manage your employees, monitor their attendance and departure, and manage their salaries, and more.
                        @endif
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Contact us now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>


@elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))
<div class="mt-5 pb-5">
  <section class="component-adver">
    <div class="container">
      <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
        <div class="col defintion-abver">
                    <h6>
                        @if (App::getLocale() == 'ar')
                        أحصل على برنامج احترافي لإدارة مبيعاتك
                        @else
                        Get a professional sales management Software
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        يمكنك الآن إدارة عمليات البيع وإصدار فواتيرك الإلكترونية من خلال قوالب جاهزة قابلة للتخصيص
                        @else
                        Now you can manage your sales processes and issue your electronic invoices through ready-made, customizable templates.
                        @endif
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Contact us now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endif





<!--whyPrograms-->
<section class="component-best pt-5 pb-5">
    <div class="container">
        @if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
        <h2>
            @if (App::getLocale() == 'ar')
            لماذا تحصل على برنامج إدارة الحسابات من خلال رايتو؟
            @else
            Why Choose Raito for Programming and ERP Systems?
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
        <h2>
            @if (App::getLocale() == 'ar')
            لماذا تحصل على برنامج إدارة المخزون من خلال رايتو؟
            @else
            Why Get an Inventory Management SoftwareThrough Raito?
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
        <h2>
            @if (App::getLocale() == 'ar')
            لماذا تحصل على برنامج إدارة المناديب من خلال رايتو؟
            @else
            Why Get a Sales Representative Management SoftwareThrough Raito?
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
        <h2>
            @if (App::getLocale() == 'ar')
            لماذا تحصل على برنامج إدارة الموظفين من خلال رايتو؟
            @else
            Why get an employee management system from Raito?
            @endif
        </h2>


        @elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))
        <h2>
            @if (App::getLocale() == 'ar')
            لماذا تحصل على برنامج إدارة المبيعات من خلال رايتو؟
            @else
            Why Choose Raito for Programming and ERP Systems?
            @endif
        </h2>
        @endif

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


<!--Program Packages-->
<section class="component-prices mt-5 pt-5 pb-5">
    <div class="container">
        <div class="text-center">
            <h2 class="title-title">
                @if(Str::contains($program->first_title,'المحاسبة') || Str::contains($program->first_title,'count'))
                    @if (App::getLocale() == 'ar')
                    باقات إدارة الحسابات
                    @else
                    Accounting Management Software Packages
                    @endif


                @elseif(Str::contains($program->first_title,'المخزون') || Str::contains($program->first_title,'Inventory'))
                    @if (App::getLocale() == 'ar')
                    باقات إدارة المخزون
                    @else
                    Inventory Management Software Packages
                    @endif

                
                @elseif(Str::contains($program->first_title,'المناديب') || Str::contains($program->first_title,'Delegates'))
                    @if (App::getLocale() == 'ar')
                    باقات إدارة المناديب
                    @else
                    Sales Representative Management Software Packages
                    @endif


                @elseif(Str::contains($program->first_title,'الموارد البشرية') || Str::contains($program->first_title,'Human'))
                    @if (App::getLocale() == 'ar')
                    باقات إدارة الموظفين
                    @else
                    Employee Management Software Packages
                    @endif


                @elseif(Str::contains($program->first_title,'المبيعات') || Str::contains($program->first_title,'Sales'))        
                    @if (App::getLocale() == 'ar')
                    باقات إدارة المبيعات
                    @else
                    Sales Management Software Packages
                    @endif
                @endif
            </h2>
        </div>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 pt-5">
            @foreach($program->programPackages as $package)
            <div class="col col-peicess">
                <div class="price_box_inner pe-3 px-3">
                    <div class="nk-pricing-head pb-2">
                        <h5 class="pt-3">{{ $package->title }}</h5>
                        <h3 class="price-component text-center pt-3">
                            <span class="span-price">{{ $package->monthly_price }}</span>
                            {{ trans('site.Rial') }}
                            <span>/{{ trans('site.Monthly') }}</span>
                        </h3>
                        <p class="pt-3 text-center">{{ trans('site.Pay') }}<span class="spen-selery fw-bold"> {{ $package->annually_price }} </span>{{ trans('site.Riyal') }}/{{ trans('site.Annually') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('contact.index') }}" class="p-2 px-4 button-stert button-mor">
                {{ trans('site.Get started now') }}
            </a>
        </div>
    </div>
</section>

@endsection
