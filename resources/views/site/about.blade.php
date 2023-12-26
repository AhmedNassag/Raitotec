@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
من نحن - شركة رايتو | حلول برمجية وأنظمة برمجية مبتكرة
@else
Who Are We - Raito Company | Innovative Software Solutions And Software Systems
@endif
@endsection



@section('meta-description')
<meta name="description" content="نحن شركة رايتو المتخصصة في تقديم حلول برمجية وأنظمة برمجية مبتكرة لتلبية احتياجات عملك. نقدم تصميم وتطوير برامج مخصصة، وتنفيذ أنظمة متكاملة، وحلول تحسين الأداء.">
@endsection



@section('meta-keywords')
<meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة">
@endsection



@section('content')
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if (App::getLocale() == 'ar')
            نبذة عن الشركة
            @else
            About us
            @endif
        </h1>
    </div>
</section>

<!--about-->
@if(@$aboutUs)
<section class="component-about pt-5 pb-5">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1 mx-0 g-3">
            <div class="col pt-2" data-aos="fade-up" data-aos-delay="50">
                <h2 class="title-title">
                    @if (App::getLocale() == 'ar')
                    نبذة عنا
                    @else
                    About Raito
                    @endif
                </h2>
                <p class="pt-3 p-decerption">{!! @$aboutUs->content !!}</p>
            </div>
            <div class="col component-video" data-aos="fade-up" data-aos-delay="50">
                <div class="video-date">
                    {{-- <iframe width="420" height="345" src="{{ @$aboutUs->video }}" allowfullscreen=""></iframe> --}}
                    <div class="div-button">
                        <div id="myBtn"></div>
                    </div>
                    <video loop="" id="myVideo" poster="{{ asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;">
                        <source src="{{ asset('public/attachments/aboutUs/'.@$aboutUs->video) }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--about-->


<!--vision-->
<section class="component-vision pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4">
            <div class="col">
                <img class="img-vision" src="{{ asset('public/assets_site/img/mission.webp') }}" alt="vision" loading="lazy">
                <h4 class="title-title pt-2">
                    @if (App::getLocale() == 'ar')
                    رؤيتنا
                    @else
                    Our Vision
                    @endif
                </h4>
                <p class="p-decerption pt-4">
                    @if (App::getLocale() == 'ar')
                    التطوير التقني ليس حكراً أن يستفيد منه كل فرد، و قد عقدنا العزم أن يصل لأحدث التطورات التقنية و ينجح معها كل من أراد النجاح و الرقي لنفسه و لوطننا الحبيب.
                    @else
                    Technological development is not limited to benefiting individuals. We are determined to embrace the latest technological advancements and succeed alongside those who strive for personal and national success.
                    @endif
                </p>
            </div>
            <div class="col">
                <img class="img-vision" src="{{ asset('public/assets_site/img/vision.webp') }}" alt="mission" loading="lazy">
                <h4 class="title-title pt-2">
                    @if (App::getLocale() == 'ar')
                    رسالتنا
                    @else
                    Our Mission
                    @endif
                </h4>
                <p class="p-decerption pt-4">
                    @if (App::getLocale() == 'ar')
                    طرح التقنية المعلوماتية بأسهل و أوضح طريقة وأكثرها إتقان و ملائمة و إنتاجية لعملائنا و شركاء النجاح تمهيدا لمواكبة التنمية المستدامة محققين نجاحاتهم الطموحة على الدوام
                    @else
                    We aim to present IT technology in the easiest, clearest, most proficient, and most productive way for our clients and partners for achievements, in preparation for sustainable development.
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>
<!--vision-->


<!--whyUs-->
@if($whyUs->count() >0)
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
                    We are a leading company in developing ERP accounting solutions. We provide innovative and customized solutions for companies to meet their unique needs. We rely on modern cloud technologies, and our services are characterized by high security and excellent technical support. 
                    @endif
                </p>
            </div>
        </div>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            @foreach($whyUs as $why)
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/attachments/whyUs/'.@$why->photo) }}" alt="project-management" loading="lazy">
                    <div class="px-3">
                        <h6 class="title-title">{{ @$why->title}}</h6>
                        <p class="p-decerption pt-1">{!! @$why->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!--whyUs-->


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
                        With Raito your work is easier!
                        @endif
                    </h6>
                    <p class="pt-3 mb-0">
                        @if (App::getLocale() == 'ar')
                        لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                        @else
                        You do not need to be a technical expert or an accountant to complete your financial and administrative reports. We create an integrated, customizable system for you to suit more than 40 different fields.
                        @endif
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="{{ route('contact.index') }}" class="p-2 px-4 button-stert">{{ trans('site.Start Free Use Now') }}</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!--advertisements-->


<!--team-->
<section class="component-team pt-5 pb-5">
    <div class="container">
        <div class="text-center">
            <h2 class="title-title">{{ trans('site.teamwork') }}</h2>
        </div>
        <div class="row mx-0 row-cols-lg-4 row-cols-md-2 row-cols-1 g-2 pt-5">
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Fahd bin Abdul Mohsen Al-Asim') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.General Manager - Founder and Entrepreneur') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Hesham Ibrahim') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Project Programming Sector Manager') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Talat Abu Kabira') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Director of the Technical Development Department') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Ziyad bin Fahd Al-Asim') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Director of Personnel Affairs') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Mahmoud Mustafa') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Director of the technical support department') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Mohamed Gamal Ali') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Director of the web and graphic design department') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Ali Mahrous') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Programmer') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Haitham Mohamed') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Applications programmer') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Ahmed Hamdy') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Programmer') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Mohamed Hamdy') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Technical Support') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Ahmed Nabil') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Programmer') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Mostafa Fahmy') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Programmer') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/hijab.png') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Nehal Osama') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Applications Designer') }}</p>
                </div>
            </div>
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/hijab.png') }}" alt="{{ trans('site.teamwork') }}" loading="lazy">
                    <h6 class="title-tem pt-1">{{ trans('site.Hadeer Hussein') }}</h6>
                    <p class="p-team pt-2">{{ trans('site.Web Designer') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--team-->
@endsection
