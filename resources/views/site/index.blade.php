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
                    <img src="{{ asset('public/attachments/slider/'.$slider->photo) }}" class="d-block w-100" alt="{{ $slider->title }}">
                    <div class="overlay"></div>
                </div>
                <div class="carousel-caption  d-md-block">
                    <h5>{{ $slider->title }}</h5>
                    <p class="pt-5">{{ $slider->content }}</p>
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
                    <h2 class="title-title">{{ trans('site.About Us') }}</h2>
                    <p class="pt-3 p-decerption">{{ @$aboutUs->content }}</p>
                </div>
                <div class="col component-video" data-aos="fade-up" data-aos-delay="50">
                    <div class="video-date">
                        <div class="div-button">
                            <div id="myBtn"></div>
                        </div>
                        <iframe width="420" height="345" src="{{ @$aboutUs->video }}"></iframe>
                        {{-- <video loop="" id="myVideo" style="object-fit:cover;">
                            <source src="{{ asset('public/attachments/aboutUs/'.@$aboutUs->video) }}" type="video/mp4">
                        </video> --}}
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
                    <h2 class="title-title"> أهم أنظمة رايتو ERP</h2>
                    <p class="pt-3 p-decerption">
                        تقدم أنظمة رايتو حلولًا شاملة تستهدف تحسين أداء الشركات من خلال تقديم أنظمة ERP وتطبيقات إدارة المناديب والفواتير الإلكترونية، بالإضافة إلى خدمات تحسين وتطوير المحطات وفقًا لاحتياجات العملاء.
                    </p>
                </div>
            </div>
            <div class="content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5">
                @foreach($programs as $program)
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('public/attachments/program/'.$program->photo) }}" alt="{{ $program->first_title }}" loading="lazy">
                        <div class="card-body">
                            <h3 class="card-title">{{ $program->first_title }}</h3>
                            <p class="card-text">{!! $program->first_content !!}</p>
                            <div>
                                <a href="{{ route('program.show',$program->id) }}" class="btn btn-primar px-3">{{ trans('site.More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        <h6> مع رايتو عملك أسهل!</h6>
                        <p class="pt-3 mb-0">
                            لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                        </p>
                    </div>
                    <div class="col text-start mt-md-0 mt-5">
                        <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">ابدا الاستخدام مجانى</a>
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
                    <h2 class="title-title"> مهما كان تخصصك! </h2>
                    <p class="pt-3 p-decerption">
                        نساعدك في إدارته باحترافية من خلال نظام ERP
                    </p>
                </div>
            </div>
            <div class="content-erp row mx-0 row-cols-lg-5 row-cols-md-3 row-cols-1 g-4 pt-5">
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img src="{{ asset('public/assets_site/img/pieces.webp') }}" alt="pieces" loading="lazy">
                        <div class="card-body p-1 text-center">
                            <h3 class="card-title"> بيع بالتجزئة </h3>
                            <p class="card-text">
                                نبني لك نظام يسهل عليك إدارة محلك التجاري، كما يساعدك على متابعة المخزون ومتابعة الحركة المالية.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img src="{{ asset('public/assets_site/img/service.webp') }}" alt="vision" loading="lazy">
                        <div class="card-body p-1 text-center">
                            <h3 class="card-title"> الخدمات المهنية </h3>
                            <p class="card-text">
                                نؤسس لك نظام يحتوي على أدوات تساعدك على تسجيل كافة الطلبات الخاصة بالعملاء، كما تساعدك تلك الأدوات على المتابعة حتى التسليم.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img src="{{ asset('public/assets_site/img/accounting.webp') }}" alt="accounting" loading="lazy">
                        <div class="card-body p-1 text-center">
                            <h3 class="card-title"> خدمات الأعمال </h3>
                            <p class="card-text">
                                نؤسس لك أنظمة إدارة دقيقة تمكنك من متابعة المواعيد الخاصة بالعملاء، كما تتوفر تلك الأنظمة بميزة التذكير الآلي للمواعيد.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img src="{{ asset('public/assets_site/img/learning.webp') }}" alt="vision" loading="lazy">
                        <div class="card-body p-1 text-center">
                            <h3 class="card-title"> التعليم </h3>
                            <p class="card-text">
                                نوفر برامج لإدارة المدارس وإدارة الحضانات، كما نوفر برامج لإدارة المراكز التعليمية كافتها.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img src="{{ asset('public/assets_site/img/estate.webp') }}" alt="vision" loading="lazy">
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
    <!--ERP-->


    <!--advertisements-->
    <div class="mt-5 pb-5">
        <section class="component-adver">
            <div class="container">
                <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                    <div class="col defintion-abver">
                        <h6> أحصل على نظام ERP بميزات متعددة
                        </h6>
                        <p class="pt-3 mb-0">
                            نقدم لك أنظمة بسيطة ذات واجهة استخدام سهلة لأكثر من 40 نشاط تجاري
                        </p>
                    </div>
                    <div class="col text-start mt-md-0 mt-5">
                        <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">ابدا الاستخدام مجانى</a>
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
                    <h2 class="title-title">{{ trans('site.Services') }}</h2>
                </div>
            </div>
            <div class="services-other content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 justify-content-center">
                @foreach($services as $service)
                <div class="col d-flex">
                    <div class="card" data-aos-delay="30" data-aos="fade-up">
                        <img class="img-fluid" src="{{ asset('public/attachments/service/'.$service->photo) }}" alt="{{ $service->first_title }}" loading="lazy">
                        <div class="card-body">
                            <h3 class="card-title">{{ $service->first_title }}</h3>
                            <p class="card-text">{{ $service->first_content }}</p>
                            <div>
                                <a href="{{ route('service.show',$service->id) }}" class="btn btn-primar px-3">{{ trans('site.More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--end-services-->


    <!--custamer-->
    <section class="mt-5 pb-5">
        <div class="component-custmer pt-5 pb-5">
            <div class="container pt-5 pb-5">
                <div class="over"></div>
                <div class="row mx-0 row-cols-md-2 row-cols-1 row-custemer">
                    <div class="col">
                        <h2>انضم إلى قائمة عملائنا الكرام الآن</h2>
                        <p class="pt-4">انضم إلى قائمة عملائنا الكرام الآن استفساراتكم هي اهتمامنا ، خدمتكم مميزة ، ورضاك هو سعينا الدؤوب </p>
                    </div>
                    <div class="col">
                        <div class="row mx-0">
                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="counter-item animated-hover-icon text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                                    <div class="text">
                                        <h2 class="number"><span class="count" data-count="40">0</span>K</h2>
                                        <p>مستخدم</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="counter-item animated-hover-icon text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="40">
                                    <div class="text">
                                        <h2 class="number"><span class="count" data-count="50">0</span>K</h2>
                                        <p>عميل</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="counter-item text-center animated-hover-icon aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                    <div class="text">
                                        <h2 class="number"><span class="count" data-count="245">0</span></h2>
                                        <p>نظام</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-6">
                                <div class="counter-item text-center animated-hover-icon aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                                    <div class="text">
                                        <h2 class="number"><span class="count" data-count="550">0</span></h2>
                                        <p>منتج</p>
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
                    <h2 class="title-title"> {{ trans('site.Why Depend On Title') }} </h2>
                    <p class="pt-3 p-decerption">{{ trans('site.Why Depend On Content') }}</p>
                </div>
            </div>
            <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
                @foreach($whyUs as $why)
                <div class="col d-flex">
                    <div class="about-item">
                        <img src="{{ asset('public/attachments/whyUs/'.$why->photo) }}" alt="{{ $why->title }}" loading="lazy">
                        <div class="px-3">
                            <h6 class="title-title">{{ $why->title }}</h6>
                            <p class="p-decerption pt-1">{{ $why->content }}</p>
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
                        <img class="img-fluid" src="{{ asset('public/attachments/blog/'.$blog->photo) }}" alt="{{ $blog->first_title }}" loading="lazy">
                        <div class="card-body p-2 text-center">
                            <h3 class="card-title">{{ $blog->first_title }}</h3>
                            @php
                                $normalizedText = Normalizer::normalize($blog->first_content, Normalizer::FORM_C);
                            @endphp
                            <p class="card-text">
                                {{ $normalizedText }}
                            </p>
                            <a href="{{ route('blog.show',$blog->id) }}" class="btn btn-primar px-3 pt-3 pb-3">{{ trans('site.More') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--Blog-->
@endsection
