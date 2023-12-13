@extends('site.layouts.master')



@section('title')
    @if (App::getLocale() == 'ar')
    شركة رايتو |  أنظمة برمجية متقدمة ومبتكرة
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
            {{ trans('site.Get Advanced And Innovative Software Systems With Raito') }}
        </h1>
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <h2 class="title-title">{{ trans('site.About Raito Programs') }}</h2>
        <p class="pt-3 p-decerption">
            في شركتنا نقدم مجموعة متنوعة من الخدمات المبتكرة والمخصصة لتلبية احتياجات عملائنا، كما نتخصص في تطوير وتنفيذ حلول ERP المحاسبية التي تساعد الشركات على تحسين كفاءتها وإدارة أعمالها بشكل أفضل.
            {{-- {{ trans('site.') }} --}}
        </p>
        <p class="pt-3 p-decerption">
            تمكنا من إضافة نظم رايتو ERP للحلول الإدارية و المحاسبية المركزي السحابى مــن خلال عــدة برامـج (Modules ً ( مترابطة لتقديم الخدمات الأكثر طلبا ً و احتياجا في الوقت الحالي و غيرها من المنصات الخدمية المتخصصة الأخرى والأنشطة التسويقية على منصات التواصل الاجتماعي العالمية مثل Face Instagram/Twitter/Book/ و الإعلانات الممولة على Google
            {{-- {{ trans('site.') }} --}}
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
                        مع رايتو عملك أسهل!
                        {{-- {{ trans('site.') }} --}}
                    </h6>
                    <p class="pt-3 mb-0">
                        لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                        {{-- {{ trans('site.') }} --}}
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert">
                        ابدأ الاستخدام الآن
                        {{-- {{ trans('site.') }} --}}
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
                    مهما كان تخصصك!
                    {{-- {{ trans('site.') }} --}}
                </h2>
                <p class="pt-3 p-decerption">
                    نساعدك في إدارته باحترافية من خلال نظام ERP
                    {{-- {{ trans('site.') }} --}}
                </p>
            </div>
        </div>
        <div class="content-erp row mx-0 row-cols-lg-5 row-cols-md-3 row-cols-1 g-4 pt-5">
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/pieces.webp') }}" alt="pieces" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> 
                            بيع بالتجزئة 
                            {{-- {{ trans('site.') }} --}}
                        </h3>
                        <p class="card-text">
                            نبني لك نظام يسهل عليك إدارة محلك التجاري، كما يساعدك على متابعة المخزون ومتابعة الحركة المالية.
                            {{-- {{ trans('site.') }} --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/service.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> 
                            الخدمات المهنية 
                            {{-- {{ trans('site.') }} --}}
                        </h3>
                        <p class="card-text">
                            نؤسس لك نظام يحتوي على أدوات تساعدك على تسجيل كافة الطلبات الخاصة بالعملاء، كما تساعدك تلك الأدوات على المتابعة حتى التسليم.
                            {{-- {{ trans('site.') }} --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/accounting.webp') }}" alt="accounting" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> 
                            خدمات الأعمال
                            {{-- {{ trans('site.') }} --}}
                        </h3>
                        <p class="card-text">
                            نؤسس لك أنظمة إدارة دقيقة تمكنك من متابعة المواعيد الخاصة بالعملاء، كما تتوفر تلك الأنظمة بميزة التذكير الآلي للمواعيد.
                            {{-- {{ trans('site.') }} --}}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/learning.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> 
                            التعليم 
                            {{-- {{ trans('site.') }} --}}
                        </h3>
                        <p class="card-text">
                            {{-- {{ trans('site.') }} --}}
                            نوفر برامج لإدارة المدارس وإدارة الحضانات، كما نوفر برامج لإدارة المراكز التعليمية كافتها.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img src="{{ asset('public/assets_site/img/estate.webp') }}" alt="vision" loading="lazy">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> 
                            العقارات 
                            {{-- {{ trans('site.') }} --}}
                        </h3>
                        <p class="card-text">
                            نوفر برامج لإدارة كافة شركات الإنشاء والاستثمار العقاري تمكنك من إدارة المخزون الخاص بقطع الغيار وغيرها من المميزات.
                            {{-- {{ trans('site.') }} --}}
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
                    <div class="mt-4">
                        <a href="{{ route('blog.show',@$program->id) }}" class="p-2 px-4 button-stert button-mor">{{ trans('site.More') }}...</a>
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
                        <h6> 
                            مع رايتو عملك أسهل!
                            {{-- {{ trans('site.') }} --}}
                        </h6>
                        <p class="pt-3 mb-0">
                            لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                            {{-- {{ trans('site.') }} --}}
                        </p>
                    </div>
                    <div class="col text-start mt-md-0 mt-5">
                        <a href="{{ route('contact.index')}}" class="p-3 px-4 button-stert">
                            ابدأ الاستخدام الآن
                            {{-- {{ trans('site.') }} --}}
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endforeach


<!--whyPrograms-->
<section class="component-best pt-5 pb-5">
    <div class="container">
        <h2>
            لماذا تعتبر رايتو
            {{-- {{ trans('site.') }} --}}
            <br>
            شريكك الأفضل لإدارة أعمالك؟
            {{-- {{ trans('site.') }} --}}
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
