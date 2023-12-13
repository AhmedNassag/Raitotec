@extends('site.layouts.master')



@section('title')
    @if (App::getLocale() == 'ar')
    خدمات شركة رايتو | للحلول البرمجية والأنظمة برمجية
    @else
    Raito Company Services | For Software Solutions And Software Systems
    @endif
@endsection



@section('meta-description')
    <meta name="description" content="استفد من خدماتنا المتخصصة في تقديم حلول برمجية وأنظمة برمجية مبتكرة لشركتك؛ فنحن نوفر تصميم وتطوير برامج مخصصة، وتنفيذ أنظمة متكاملة، ونحسن أداء شركتك.">
@endsection



@section('meta-keywords')
    <meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')
<!--end-nav-->
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            {{ trans('site.Programming Company Services | Raito Software Systems') }}
        </h1>
    </div>
</section>
<!---->
<section class="component-content pt-5 pb-5">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1 mx-0 g-3">
            <div class="col pt-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                <h2 class="title-title"> نبذة عن خدماتنا </h2>
                <p class="pt-3 p-decerption">
                    شركتنا هي شركة حلول برمجية رائدة تقدم مجموعة واسعة من الخدمات لعملائنا، نحن ملتزمون بتلبية احتياجات العملاء وتقديم حلول تقنية مبتكرة وفعالة لمساعدتهم على تحقيق أهدافهم التجارية، ونعمل على ذلك من خلال تقديم مجموعة من البرامج المحاسبية بالإضافة إلى خدمات تأهيل المحطات وتصميم المواقع الإلكترونية وتطبيقات الجوال وغيرها من الخدمات.
                </p>
            </div>
            <div class="col component-video aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                <div class="video-date">
                    <div class="div-button">
                        <div id="myBtn"></div>
                    </div>
                    <video loop="" id="myVideo" poster="{{ asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;" alt="video" loading="lazy">
                        <source src="{{ asset('public/assets_site/img/video/vv.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>


<!--services-->
@if($services->count() >0)
<section class="component-services mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title"> خدماتنا </h2>
            </div>
        </div>
        <div class="content-services-beg content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 justify-content-center">
            @foreach($services as $service)
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/attachments/service/'.$service->photo) }}" alt="Services" loading="lazy">
                    <div class="card-body">
                        <h3 class="card-title">{{ $service->first_title }}</h3>
                        <p class="card-text">{{ $service->first_content }}</p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">{{ trans('site.More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif
<!--services-->

<!--whyUs-->
@if($whyUs->count() >0)
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title"> لماذا تعتمد على رايتو للبرمجة والأنظمة المحاسبية - ERP </h2>
                <p class="pt-3 p-decerption">
                    تعتبر شركتنا رائدة في مجال إنشاء الأنظمة المحاسبية ERP، و الإدارة السحابية التي قدمـت بالفعـل حلولا تقنية متميزة وليس لدينا أي قيود تعـوق التطويــر المستمـــر والمتنـامـي ، مستشــرفيــن عهــدا جديـدا من التطــور التقنـي و نجـاح الاعمـال، واهم ما يميزنا ما يلي:
                </p>
            </div>
        </div>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            @foreach($whyUs as $why)
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/attachments/whyUs/'.$why->photo) }}" alt="project-management" loading="lazy">
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
@endif
<!--whyUs-->
@endsection
