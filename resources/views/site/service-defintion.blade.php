@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
    @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
    تصميم تطبيقات الجوال | تطبيقات جوال متميزة وسلسة
    @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
    تصميم وتطوير المواقع الإلكترونية | مواقع إلكترونية مبتكرة وجذابة
    @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
    تأهيل محطات الوقود | حسن وحدث محطة وقودك بنظام احترافي
    @endif
@else
    @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
    Mobile application design | Distinctive and smooth mobile applications
    @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
    Website design and development | Innovative and attractive websites
    @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
    Rehabilitation of gas stations Improve and modernize your gas station with a professional system
    @endif
@endif
@endsection



@section('meta-description')
@if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
<meta name="description" content="احصل على تطبيق جوال متميز وسلس يلبي احتياجات عملك ومستخدميك مع فريق تصميم وتطوير تطبيقات الجوال المحترف لدينا.">
        
@elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
<meta name="description" content="احصل على موقع إلكتروني مبتكر وجذاب يعكس هوية علامتك التجارية ويوفر تجربة مميزة للمستخدمين مع فريق تصميم وتطوير رايتو للحلول البرمجية">
        
@elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
<meta name="description" content="اعتمد على خبرتنا في تأهيل وتحديث محطات الوقود لتلبية أعلى المعايير وتحقيق الكفاءة والأمان، وذلك تحقيقاً لرؤية المملكة العربية السعودية 2030.">
        
@endif
@endsection



@section('meta-keywords')
@if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
<meta name="keywords" content="تصميم وتطوير تطبيقات جوال متميزة وسلسة مع رايتو">

@elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
<meta name="keywords" content="تصميم وتطوير مواقع إلكترونية مبتكرة ومتجاوبة مع رايتو">

@elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
<meta name="keywords" content="تأهيل محطات الوقود المتقدم وفقًا لأعلى المعايير مع رايتو">
@endif
@endsection



@section('content')
<section class="component-hadeer">
    <div class="container">
        @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            تصميم تطبيقات الجوال
            @else
            Mobile App Development Services
            @endif
        </h2>
        <p class="pt-3 text-white fs-6 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            عالم جديد من التفاعل والابتكار مع تصميماتنا الفريدة والمميزة لتطبيقات الجوال.
            @else
            A new world of interaction with our unique mobile app designs.
            @endif
        </p>


        @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            تصميم المواقع الإلكترونية
            @else
            Web Design Services
            @endif
        </h2>
        <p class="pt-3 text-white fs-6 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            نصمم مواقع إلكترونية استثنائية تعكس هويتك، وتوفر تجربة متميزة للمستخدمين.
            @else
            We design websites that reflect your identity and provide an outstanding experience for users.
            @endif
        </p>


        @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
        <h2 class="page-title pt-5">
            @if (App::getLocale() == 'ar')
            تأهيل محطات الوقود
            @else
            Fuel Station Qualification
            @endif
        </h2>
        <p class="pt-3 text-white fs-6 col-md-12 text-center">
            @if (App::getLocale() == 'ar')
            حول محطة الوقود الخاصة بك من محطة عادية إلى محطة ذكية
            @else
            Turn Your Traditional Fuel Station into a Smart Station
            @endif
        </p>
        @endif
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
                <h2 class="title-title">
                    @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن تصميم تطبيقات الجوال في شركتنا
                        @else
                        About Mobile App Development Services at Our Company
                        @endif

                    @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن تصميم المواقع الإلكترونية في شركتنا
                        @else
                        Introduction to Website Design Services
                        @endif


                    @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
                        @if (App::getLocale() == 'ar')
                        نبذة عن خدمة تأهيل محطات الوقود
                        @else
                        About Fuel Station Qualification
                        @endif

                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    {!! @$service->second_content !!}
                </p>
            </div>
            <div class="col">
                <img class="w-100 img-system" src="{{asset('public/attachments/service/'.@$service->photo) }}" alt="management">
            </div>
        </div>
    </div>
</section>
<!---->

<!---->
<section class="component-work-accounting pt-5 pb-5 mt-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
                <h2 class="title-title text-center">
                    @if (App::getLocale() == 'ar')
                    ما هي أهم الخدمات التي تدعمها رايتو لتصميم التطبيقات؟
                    @else
                    Services Supported by Raito for App Design?
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    نحن في شركتنا نقدم مجموعة شاملة من الخدمات في مجال تصميم تطبيقات الجوال، ونسعى جاهدين لتلبية احتياجات وتطلعات عملائنا، وإليك نظرة عامة على أهم الخدمات التي نقدمها:
                    @else
                    We, at our company, provide a comprehensive range of services in the field of mobile app design. We strive to meet the needs and expectations of our customers. Here is an overview of the most important services we offer:
                    @endif
                </p>


                @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
                <h2 class="title-title text-center">
                    @if (App::getLocale() == 'ar')
                    ما هي أهم الخدمات التي تدعمها رايتو لتصميم المواقع؟
                    @else
                    Web design services supported by Raito
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    في Raito، نقدم مجموعة متنوعة من الخدمات التي تدعم تصميم المواقع الإلكترونية بشكل شامل، كما نسعى جاهدين لتلبية احتياجات عملائنا وتحقيق رؤيتهم من خلال توفير الحلول المبتكرة والمخصصة، إليك بعض الخدمات الرئيسية التي نقدمها:
                    @else
                    At Raito, we offer a variety of services that comprehensively support website design. We strive to meet the needs of our customers and achieve their vision by providing innovative and customized solutions. Here are some of the main services we offer:
                    @endif
                </p>


                @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
                <h2 class="title-title text-center">
                    @if (App::getLocale() == 'ar')
                    ما هي أهم الخدمات التي تدعمها رايتو لتأهيل محطات الوقود؟
                    @else
                    services Raito supports for fuel station qualification
                    @endif
                </h2>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    نحن نقدم مجموعة واسعة من الخدمات لتأهيل محطات الوقود من خلال أنظمة ERP المتكاملة، إليك بعض الخدمات التي نوفرها:
                    @else
                    We offer a wide range of services to qualify fuel stations through integrated ERP systems. Here are some of the services we provide:
                    @endif
                </p>
                @endif
            </div>
        </div>

        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
            @foreach($service->serviceSupports as $support)
            <div class="col d-flex">
                <div class="about-item-best text-center">
                    <img src="{{asset('public/attachments/serviceSupport/'.@$support->photo) }}" alt="{{ @$support->title }}">
                    <div class="px-3">
                        <h6 class="title-title">
                            {{ @$support->title }}
                        </h6>
                        <p class="p-decerption pt-1">{!! @$support->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!---->
<div class="mt-5 pb-5">
    <section class="component-adver">

        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        احصل على تطبيق جوال متميز يساهم في نجاح عملك ويواكب التطورات التكنولوجية الحديثة.
                        @else
                        Get a distinguished mobile app that contributes to the success of your business
                        @endif
                    </p>


                    @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        صمم موقع إلكتروني يحقق هدفك التجاري ويساهم في نمو عملك.
                        @else
                        Design a website that achieves your business goals and contributes to the growth of your business.
                        @endif
                    </p>


                    @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        استعد للمستقبل مع تحويل محطتك إلى محطة ذكية تلبي رؤية المملكة 2030 ومتطلبات وزارة الطاقة.
                        @else
                        transform your station into a smart station that meets the Kingdom's Vision 2030 and the Ministry of Energy's requirements.
                        @endif
                    </p>
                    @endif
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">
                        {{ trans('site.Contact us now') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<!---->


<!--serviceSteps-->
@if($service->serviceSteps->count() > 0)
<section class="mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center align-items-center">
            <h2 class="title-title text-center">
                @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
                    @if (App::getLocale() == 'ar')
                    خطوات تصميم تطبيق جوال من خلال رايتو
                    @else
                    Steps for Designing a Mobile App with Raito
                    @endif
                
                
                @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
                    @if (App::getLocale() == 'ar')
                    خطوات تصميم المواقع الإلكترونية من خلال رايتو
                    @else
                    Steps for Designing Websites with Raito
                    @endif
                
                
                @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
                    @if (App::getLocale() == 'ar')
                    @else
                    @endif
                @endif
            </h2>
            {{-- <ul class="pt-3 ">
                <li class="pt-3 p-decerption">{!! $service->serviceSteps[0]->content !!}</li>
            </ul> --}}
            <div class="col-md-8 m-auto pt-4">
              <img class="w-100 img-system" src="{{asset('public/attachments/serviceStep/'.@$service->serviceSteps[0]->photo) }}" alt="management">
            </div>
        </div>
        {{-- <div class="col">
            <img class="w-100 img-system" src="{{asset('public/attachments/serviceStep/'.$service->serviceSteps[0]->photo) }}" alt="management">
        </div> --}}
    </div>
</section>
@endif
<!---->

<!--serviceReasons-->
<section class="component-best mt-5 pt-5 pb-5">
    <div class="container">
        <h2 class="title-title">
            @if(Str::contains(@$service->first_title,'الجوال') || Str::contains(@$service->first_title,'Mobile'))
                @if (App::getLocale() == 'ar')
                لماذا تعتمد على رايتو في تصميم التطبيقات؟
                @else
                Why Choose Raito for Programming and ERP Systems?
                @endif
            

            @elseif(Str::contains(@$service->first_title,'المواقع') || Str::contains(@$service->first_title,'Website'))
                @if (App::getLocale() == 'ar')
                لماذا تعتمد على رايتو في تصميم المواقع؟
                @else
                Why Choose Raito for Programming and ERP Systems?
                @endif


            @elseif(Str::contains(@$service->first_title,'الوقود') || Str::contains(@$service->first_title,'Gas'))
                @if (App::getLocale() == 'ar')
                لماذا تعتمد على رايتو في تأهيل المحطات؟
                @else
                Why Choose Raito for Programming and ERP Systems?
                @endif
            @endif
        
        </h2>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            @foreach($service->serviceReasons as $reason)
            <div class="col d-flex">
                <div class="about-item-best">
                    <img src="{{asset('public/attachments/serviceReason/'.@$reason->photo) }}" alt="{{ @$reason->title }}">
                    <div class="px-3">
                        <h6 class="title-title ">{{ @$reason->title }}</h6>
                        <p class="p-decerption pt-1">{!! @$reason->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!---->

@endsection
