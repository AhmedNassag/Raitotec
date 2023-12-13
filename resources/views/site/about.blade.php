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
                {{ trans('site.Who Are We') }}
            </h1>
        </div>
    </section>

    <!--about-->
    @if($aboutUs)
    <section class="component-about pt-5 pb-5">
        <div class="container">
            <div class="row row-cols-md-2 row-cols-1 mx-0 g-3">
                <div class="col pt-2" data-aos="fade-up" data-aos-delay="50">
                    <h2 class="title-title">{{ trans('site.Brief About Company') }}</h2>
                    <p class="pt-3 p-decerption">{{ $aboutUs->content}}</p>
                </div>
                <div class="col component-video" data-aos="fade-up" data-aos-delay="50">
                    <div class="video-date">
                        <div class="div-button">
                            <div id="myBtn"></div>
                        </div>
                        <video  id="myVideo" style="object-fit:cover;" controls>
                            <source src="{{ asset('public/attachments/'.$aboutUs->video) }}" type="video/mp4">
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
                    <h4 class="title-title pt-2">رؤيتنا</h4>
                    <p class="p-decerption pt-4">التطوير التقني ليس حكراً أن يستفيد منه كل فرد، و قد عقدنا العزم أن يصل
                        لأحدث التطورات التقنية و ينجح معها كل من أراد النجاح و الرقي لنفسه و لوطننا الحبيب.
                    </p>
                </div>
                <div class="col">
                    <img class="img-vision" src="{{ asset('public/assets_site/img/vision.webp') }}" alt="mission" loading="lazy">
                    <h4 class="title-title pt-2">رسالتنا</h4>
                    <p class="p-decerption pt-4">
                        طرح التقنية المعلوماتية بأسهل و أوضح طريقة وأكثرها إتقان و ملائمة و إنتاجية لعملائنا و شركاء
                        النجاح تمهيدا لمواكبة التنمية المستدامة محققين نجاحاتهم الطموحة على الدوام
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
                    <h2 class="title-title"> لماذا تعتمد على رايتو للبرمجة والأنظمة المحاسبية - ERP </h2>
                    <p class="pt-3 p-decerption">
                        تعتبر شركتنا رائدة في مجال إنشاء الأنظمة المحاسبية ERP، و الإدارة السحابية التي قدمـت بالفعـل
                        حلولا تقنية متميزة وليس لدينا أي قيود تعـوق التطويــر المستمـــر والمتنـامـي ، مستشــرفيــن
                        عهــدا جديـدا من التطــور التقنـي و نجـاح الاعمـال، واهم ما يميزنا ما يلي:
                    </p>
                </div>
            </div>
            <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
                @foreach($whyUs as $why)
                <div class="col d-flex">
                    <div class="about-item">
                        <img src="{{ asset('public/attachments/whyUs/'.$why->photo) }}" alt="project-management" loading="lazy">
                        <div class="px-3">
                            <h6 class="title-title">{{ $why->title}}</h6>
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


    <!--advertisements-->
    <div class="mt-5 pb-5">
        <section class="component-adver">
            <div class="container">
                <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                    <div class="col defintion-abver">
                        <h6> مع رايتو عملك أسهل!
                        </h6>
                        <p class="pt-3 mb-0">
                            لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام
                            متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                        </p>
                    </div>
                    <div class="col text-start mt-md-0 mt-5">
                        <a href="#" class="p-2 px-4 button-stert">ابدا الاستخدام مجانى</a>
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
                <h2 class="title-title ">فريق العمل</h2>
            </div>
            <div class="row mx-0 row-cols-lg-4 row-cols-md-2 row-cols-1 g-2 pt-5">
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> فهد بن عبد المحسن العاصم
                        </h6>
                        <p class="p-team pt-2"> مدير عام - مؤسس ورجل أعمال
                        </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1">هشام إبراهيم</h6>
                        <p class="p-team pt-2">مدير قطاع برمجة المشاريع

                        </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> طلعت أبو كبيرة</h6>
                        <p class="p-team pt-2"> مدير قسم التطوير الفني
                        </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> زياد بن فهد العاصم
                        </h6>
                        <p class="p-team pt-2"> مدير شؤون العاملين </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> محمود مصطفى
                        </h6>
                        <p class="p-team pt-2"> مدير قسم الدعم الفني

                        </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> محمد جمال علي
                        </h6>
                        <p class="p-team pt-2"> مدير قسم تصميم الويب والجرافيك

                        </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> علي محروس
                        </h6>
                        <p class="p-team pt-2"> مبرمج

                        </p>
                    </div>
                </div>
                <!---->
                <!---->
                <div class="col">
                    <div class="component-team text-center">
                        <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo" loading="lazy">
                        <h6 class="title-tem pt-1"> هيثم محمد
                        </h6>
                        <p class="p-team pt-2"> مبرمج تطبيقات

                        </p>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </section>
    <!--team-->
@endsection
