@extends('site.layouts.master')



@section('title')

@if(app()->getLocale() == 'ar')
من نحن - شركة رايتو | حلول برمجية وأنظمة برمجية مبتكرة
@endif

@endsection



@section('meta-description')

@if(app()->getLocale() == 'ar')
<meta name="description" content="نحن شركة رايتو المتخصصة في تقديم حلول برمجية وأنظمة برمجية مبتكرة لتلبية احتياجات عملك. نقدم تصميم وتطوير برامج مخصصة، وتنفيذ أنظمة متكاملة، وحلول تحسين الأداء.">
@endif

@endsection



@section('content')
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if(app()->getLocale() == 'ar')
            من نحن | رايتو للحلول برمجية وأنظمة برمجية مبتكرة
            @endif
        </h1>
    </div>
</section>
<!--about-->
<section class="component-about pt-5 pb-5">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1 mx-0 g-3">
            <div class="col pt-2" data-aos="fade-up" data-aos-delay="50">
                <h2 class="title-title">نبذة عن الشركة </h2>
                <p class="pt-3 p-decerption">
                    شركة رايتو للبرمجيات هي شركة تقنية رائدة تقدم منتجات وخدمات عالية الجودة لعملائها في جميع أنحاء
                    العالم، تلتزم الشركة بالابتكار والتميز التقني، وتهدف لمساعدة عملائها على تحقيق أهدافهم، كما
                    تمتلك الشركة فريقًا موهوبًا من المتخصصين في تطوير البرمجيات وتصميم الواجهات وإدارة المشاريع،
                    وتستخدم الشركة أحدث التقنيات والأدوات لتطوير حلول برمجية مبتكرة ومخصصة تلبي متطلبات السوق
                    الحالية والمستقبلية.
                </p>
            </div>
            <div class="col component-video" data-aos="fade-up" data-aos-delay="50">
                <div class="video-date">
                    <div class="div-button">
                        <div id="myBtn"></div>
                    </div>
                    <video loop="" id="myVideo" poster="{{ asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;">
                        <source src="{{ asset('public/assets_site/img/video/vv.mp4') }}" type="video/mp4">
                    </video>

                </div>
            </div>
        </div>
    </div>
</section>
<!--end-about-->
<!--vision-->
<section class="component-vision pt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4">
            <div class="col">
                <img class="img-vision" src="{{ asset('public/assets_site/img/mission.webp') }}" alt="vision">
                <h4 class="title-title pt-2">رؤيتنا</h4>
                <p class="p-decerption pt-4">التطوير التقني ليس حكراً أن يستفيد منه كل فرد، و قد عقدنا العزم أن يصل
                    لأحدث التطورات التقنية و ينجح معها كل من أراد النجاح و الرقي لنفسه و لوطننا الحبيب.
                </p>
            </div>
            <div class="col">
                <img class="img-vision" src="{{ asset('public/assets_site/img/vision.webp') }}" alt="mission">
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
<!---->
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
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/project-management.webp') }}" alt="project-management">
                    <div class="px-3">
                        <h6 class="title-title ">أحدث التقنيات الخدمية السحابية</h6>
                        <p class="p-decerption pt-1">نستخدم أحدث التقنيات السحابية لتطوير وتقديم حلولنا، كما نتبع
                            أفضل الممارسات ونواكب التغيرات السريعة في السوق المحلية والعالمية لضمان تقديم تقنيات
                            متقدمة وموثوقة.</p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/link-other.webp') }}" alt="service-v">
                    <div class="px-3">
                        <h6 class="title-title "> تكامل وربط الأنظمة المتنوعة</h6>
                        <p class="p-decerption pt-1">لدينا القدرة على ربط أنظمتنا مع المنصات المختلفة، سواء كانت
                            حكومية أو خاصة، وهذا يسمح للعملاء بالاستفادة من تكامل سلس كما يسهل تبادل المعلومات بين
                            الأنظمة.
                        </p>
                    </div>

                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/programming.webp') }}" alt="development">
                    <div class="px-3">
                        <h6 class="title-title "> خدمات برمجية متنوعة</h6>
                        <p class="p-decerption pt-1">
                            نقدم نظامًا محاسبيًا ERP يتميز بمرونته وقدرته على أن يكون متعدد المهام، وبذلك يمكن
                            للعملاء الاستفادة من مجموعة واسعة من الخدمات البرمجية المتنوعة التي تلبي احتياجاتهم
                            الفريدة.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/cyber-security.webp') }}" alt="cyber-security">
                    <div class="px-3">
                        <h6 class="title-title ">
                            أمان وسيبرانية
                        </h6>
                        <p class="p-decerption pt-1">
                            نحرص على تأمين خدماتنا بأعلى مستويات الأمان والحماية السيبرانية، كما نتبع معايير صارمة
                            لضمان أمان بيانات العملاء واستقرار النظام.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/page-quality.webp') }}" alt="page-quality">
                    <div class="px-3">
                        <h6 class="title-title ">
                            الالتزام بمعايير جودة الخدمة
                        </h6>
                        <p class="p-decerption pt-1">
                            نحن نضع معايير جودة عالية لخدمتنا ونسعى جاهدين لتحسين أعمالنا بشكل مستمر، كما نستمع إلى
                            آراء عملائنا ونعمل بنشاط على تلبية احتياجاتهم وتوفير حلول مبتكرة وموثوقة.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/member.webp') }}" alt="member">
                    <div class="px-3">
                        <h6 class="title-title ">
                            فريق عمل ماهر
                        </h6>
                        <p class="p-decerption pt-1">
                            يتميز فريقنا بالمهارات القوية في التعامل مع تحديات تطوير الأنظمة المحاسبية المعقدة، نحن
                            نضمن توفير فريق متكامل يضم مبرمجين ومحللين محترفين يتفاعلون بشكل مثالي لتطوير وتنفيذ
                            حلول ERP مخصصة وفقًا لمتطلبات العملاء.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!---->
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
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
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
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
                    <h6 class="title-tem pt-1">هشام إبراهيم</h6>
                    <p class="p-team pt-2">مدير قطاع برمجة المشاريع

                    </p>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
                    <h6 class="title-tem pt-1"> طلعت أبو كبيرة</h6>
                    <p class="p-team pt-2"> مدير قسم التطوير الفني
                    </p>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
                    <h6 class="title-tem pt-1"> زياد بن فهد العاصم
                    </h6>
                    <p class="p-team pt-2"> مدير شؤون العاملين </p>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col">
                <div class="component-team text-center">
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
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
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
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
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
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
                    <img class="img-team" src="{{ asset('public/assets_site/img/ceo.webp') }}" alt="ceo">
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
<!--advertisements-->
@endsection
