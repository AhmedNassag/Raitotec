@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
شركة رايتو - حلول برمجية مبتكرة وأنظمة برمجية متخصصة
@else
Raito Company - Innovative Software Solutions And Specialized Software Systems
@endif
@endsection



@section('meta-description')
<meta name="description" content="اكتشف حلول برمجية مبتكرة وأنظمة برمجية متخصصة تلبي احتياجات شركتك مع رايتو. نحن نقدم حلولًا مخصصة لتحسين كفاءة العمليات وزيادة الإنتاجية.">
@endsection



@section('meta-keywords')
<meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')

<!--sliders-->
<div id="carouselExampleCaptions" class="carousel slide corousel-index" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        @foreach($sliders as $key=>$slider)
        <div class="carousel-item {{$key==0 ? 'active' : ''}}">
            <div class="img-slider">
                <img src="{{ asset('public/attachments/slider/'.@$slider->photo) }}" class="d-block w-100" alt="{{ @$slider->title }}">
                <div class="overlay"></div>
            </div>
            <div class="carousel-caption  d-md-block">
                <h5>{{ @$slider->title }}</h5>
                <p class="pt-5">{!! @$slider->content !!}</p>
                <div class="mt-md-5 mt-1">
                    @if($slider->add_button == 1)
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert button-mor">{{ trans('site.Get started now') }}</a>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{ trans('site.Previous') }}</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">{{ trans('site.Next') }}</span>
    </button>
</div>
<!--sliders-->


<!--aboutUs-->
<section class="component-about pt-5 pb-5">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1 mx-0 g-3">
            <div class="col pt-2" data-aos="fade-up" data-aos-delay="50">
                <h1 class="title-title">
                    @if (App::getLocale() == 'ar')
                    نبذة عن الشركة
                    @else
                    About us
                    @endif
                </h1>
                <p class="pt-3 p-decerption">{{ @$aboutUs->content }}</p>
            </div>
            <div class="col component-video" data-aos="fade-up" data-aos-delay="50">
                <div class="video-date">
                    {{-- <iframe width="420" height="345" src="{{ @$aboutUs->video }}" allowfullscreen></iframe> --}}
                    <div class="div-button">
                        <div id="myBtn"></div>
                    </div>
                    <video loop="" id="myVideo" poster="{{ asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;" alt="About Us">
                        <source src="{{ asset('public/attachments/aboutUs/'.@$aboutUs->video) }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!--aboutUs-->


<!--programs-->
<section class="component-services pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title">
                    @if (App::getLocale() == 'ar')
                    أهم أنظمة رايتو ERP
                    @else
                    ERP Systems
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    تقدم أنظمة رايتو حلولًا شاملة تستهدف تحسين أداء الشركات من خلال تقديم أنظمة ERP وتطبيقات إدارة المناديب والفواتير الإلكترونية، بالإضافة إلى خدمات تحسين وتطوير المحطات وفقًا لاحتياجات العملاء.
                    @else
                    Raito offers comprehensive solutions aimed at improving company performance by providing ERP systems and applications for managing delegates, and electronic invoices, as well as improving and developing stations according to customer needs.
                    @endif
                </p>
            </div>
        </div>
        <div class="content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5">
            @foreach($programs as $program)
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/attachments/program/'.@$program->photo) }}" alt="{{ @$program->first_title }}" loading="lazy">
                    <div class="card-body">
                        <h3 class="card-title">{{ @$program->first_title }}</h3>
                        <p class="card-text">{!! @$program->first_content !!}</p>
                        <div>
                            <a href="{{ route('program.show',@$program->id) }}" class="btn btn-primar px-3">{{ trans('site.More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/our-p.png') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title">
                            @if (App::getLocale() == 'ar')
                            برامج أخرى
                            @else
                            Other Programs
                            @endif
                        </h3>
                        <p class="card-text">
                            @if (App::getLocale() == 'ar')
                            في رايتو نقدم الكثير من البرامج الأخرى، مثل برامج إدارة الأصول الذي يستخدم في تنظيم تلك الأصول وإدارتها، بالإضافة إلى برامج لإدارة المدارس وبرامج لإدارة العقارات، كما تتوفر أنظمة لإدارة المحاماة وغيرها.
                            @else
                            At Raito, we offer many other programs, such as asset management programs used to organize and manage assets, as well as programs for school management and real estate management. We also have systems for managing law firms and more.
                            @endif
                        </p>
                        <div>
                            <a href="{{ route('program.other') }}" class="btn btn-primar px-3">{{ trans('site.More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--programs-->


<!--advertisements-->
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
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Start Free Use Now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--advertisements-->


<!--ERP-->
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
                <div class="card" data-aos-delay="30" data-aos="fade-up">
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
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/service.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> 
                            @if (App::getLocale() == 'ar')
                            الخدمات المهنية
                            @else
                            Professional Services
                            @endif
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
                <div class="card" data-aos-delay="30" data-aos="fade-up">
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
                <div class="card" data-aos-delay="30" data-aos="fade-up">
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
                <div class="card" data-aos-delay="30" data-aos="fade-up">
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
<!--ERP-->


<!--advertisements-->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6>
                        {{ trans('site.Get an ERP system with multiple features') }}
                    </h6>
                    <p class="pt-3 mb-0">
                        {{ trans('site.We provide you with simple systems with an easy-to-use interface for more than 40 businesses') }}
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Start Free Use Now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--advertisements-->


<!--services-->
<section class="component-services mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title">
                    @if (App::getLocale() == 'ar')
                    خدماتنا
                    @else
                    Our Services 
                    @endif
                </h2>
            </div>
        </div>
        <div class="services-other content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 justify-content-center">
            @foreach($services as $service)
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/attachments/service/'.@$service->photo) }}" alt="{{ @$service->first_title }}" loading="lazy">
                    <div class="card-body">
                        <h3 class="card-title">{{ @$service->first_title }}</h3>
                        <p class="card-text">{!! @$service->first_content !!}</p>
                        <div>
                            <a href="{{ route('service.show',@$service->id) }}" class="btn btn-primar px-3">{{ trans('site.More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--end-services-->


<!--customer-->
<section class="mt-5 pb-5">
    <div class="component-custmer pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="over"></div>
            <div class="row mx-0 row-cols-md-2 row-cols-1 row-custemer">
                <div class="col">
                    <h2>
                        {{ trans('site.Join the list of our valued customers now') }}
                    </h2>
                    <p class="pt-4">{{ trans('site.Join the list of our valued customers now. Your inquiries are our concern, your service is distinguished, and your satisfaction is our tireless pursuit.') }}</p>
                </div>
                <div class="col">
                    <div class="row mx-0">
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="counter-item animated-hover-icon text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                                <div class="text">
                                    <h2 class="number"><span class="count" data-count="40">0</span>K</h2>
                                    <p>{{ trans('site.User') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="counter-item animated-hover-icon text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="40">
                                <div class="text">
                                    <h2 class="number"><span class="count" data-count="50">0</span>K</h2>
                                    <p>{{ trans('site.Client') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="counter-item text-center animated-hover-icon aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <div class="text">
                                    <h2 class="number"><span class="count" data-count="245">0</span></h2>
                                    <p>{{ trans('site.System') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-6">
                            <div class="counter-item text-center animated-hover-icon aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                <div class="text">
                                    <h2 class="number"><span class="count" data-count="550">0</span></h2>
                                    <p>{{ trans('site.Product') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--custemer-->


<!--whyUs-->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title"> 
                    @if (App::getLocale() == 'ar')
                    لماذا تعتمد على رايتو للبرمجة والأنظمة المحاسبية - ERP
                    @else
                    Why Choose Raito for Programming and ERP Systems? 
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    تعتبر شركتنا رائدة في مجال إنشاء الأنظمة المحاسبية ERP، والإدارة السحابية التي قدمـت بالفعـل حلولا تقنية متميزة وليس لدينا أي قيود تعـوق التطويــر المستمـــر والمتنـامـي ، مستشــرفيــن عهــدا جديـدا من التطــور التقنـي و نجـاح الاعمـال، واهم ما يميزنا ما يلي:
                    @else
                    We are a leading company in the field of ERP accounting systems and cloud management. We have already provided exceptional technical solutions, and we have no limitations that hinder continuous development and growth. 
                    @endif
                </p>
            </div>
        </div>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            @foreach($whyUs as $why)
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/attachments/whyUs/'.@$why->photo) }}" alt="{{ @$why->title }}" loading="lazy">
                    <div class="px-3">
                        <h6 class="title-title">{{ @$why->title }}</h6>
                        <p class="p-decerption pt-1">{!! @$why->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--whyUs-->


<!--Your sales-->
<section class="component-sales mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="title-title">{{ @$sale->first_title }}</h2>
                <p class="pt-3 p-decerption">{!! @$sale->first_content !!}</p>
                {{-- <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor">{{ trans('site.More') }}</a>
                </div> --}}
        </div>
        <div class="col">
            <img class="sales-img img-one animate-float-y" src="{{ asset('public/attachments/sale/'.@$sale->photo) }}" alt="{{ @$sale->first_title }}" loading="lazy">
        </div>
    </div>
    </div>
</section>
<!--Your sales-->


<!--Blog-->
<section class="component-Blog mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                <h2 class="title-title">{{ trans('site.Blog Title') }}</h2>
                <p class="pt-3 p-decerption">{{ trans('site.Blog Content') }}</p>
            </div>
        </div>
        <div class="content-blog row mx-0 row-cols-lg-4 row-cols-md-2 g-4 pt-5 row-cols-1">
            @foreach($blogs as $blog)
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <img class="img-fluid" src="{{ asset('public/attachments/blog/'.@$blog->photo) }}" alt="{{ @$blog->first_title }}" loading="lazy">
                    <div class="card-body p-2 text-center">
                        <h3 class="card-title">{{ @$blog->first_title }}</h3>
                        @php
                        $normalizedText = Normalizer::normalize($blog->first_content, Normalizer::FORM_C);
                        @endphp
                        <p class="card-text">
                            {{ @$normalizedText }}
                        </p>
                        <a href="{{ route('blog.show',@$blog->id) }}" class="btn btn-primar px-3 pt-3 pb-3">{{ trans('site.More') }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!--Blog-->
@endsection
