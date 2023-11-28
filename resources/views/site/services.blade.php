@extends('site.layouts.master')



@section('title')

@if(app()->getLocale() == 'ar')
خدمات شركة رايتو | للحلول البرمجية والأنظمة برمجية
@endif

@endsection



@section('meta-description')

@if(app()->getLocale() == 'ar')
<meta name="description" content="استفد من خدماتنا المتخصصة في تقديم حلول برمجية وأنظمة برمجية مبتكرة لشركتك؛ فنحن نوفر تصميم وتطوير برامج مخصصة، وتنفيذ أنظمة متكاملة، ونحسن أداء شركتك.">
@endif

@endsection



@section('content')
<!--end-nav-->
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if(app()->getLocale() == 'ar')
            خدمات شركة برمجة | رايتو للأنظمة البرمجية
            @endif
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
                    <video loop="" id="myVideo" poster="{{ asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;">
                        <source src="{{ asset('public/assets_site/img/video/vv.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</section>
<!---->
<section class="component-services mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="title-title"> خدماتنا </h2>
            </div>
        </div>
        <div class="content-services-beg content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 justify-content-center">
            <!---->
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/web-design.png') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> تصميم المواقع الإلكترونية </h3>
                        <p class="card-text">
                            نقدم خدمات تصميم وتطوير المواقع الإلكترونية الاحترافية والجذابة، سواء كنت تحتاج إلى موقع استاتيكي بسيط أو متجر إلكتروني معقد، فإن فريقنا المحترف سيساعدك، ونولي اهتمامًا كبيرًا لتحقيق توافق الموقع مع مختلف الأجهزة وتجربة المستخدم السلسة.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/wep-mopile.png') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> تصميم تطبيقات الجوال </h3>
                        <p class="card-text">
                            نقدم خدمات تصميم وتطوير تطبيقات الجوال لأنظمة iOS و Android. سواء كنت ترغب في تطبيق للأعمال أو التجارة الإلكترونية أو التواصل الاجتماعي، فإننا نستخدم أحدث التقنيات لتطوير تطبيقات قابلة للتخصيص وسهلة الاستخدام وذات واجهة مستخدم جذابة.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/stations.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> تأهيل محطات الوقود </h3>
                        <p class="card-text">
                            نعمل على تحويل محطات الوقود العادية إلى محطات ذكية، وذلك استجابةً لرؤية المملكة 2030 وتلبية لمتطلبات وزارة الطاقة، وتحقيقًا لهذا الهدف، نستخدم أحدث التقنيات البرمجية والأجهزة المخصصة لهذا الغرض، لإدارة المخزون والتحكم في محطات الوقود وإعداد التقارير المالية وغيرها.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!---->
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
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/project-management.webp') }}" alt="project-management">
                    <div class="px-3">
                        <h6 class="title-title ">أحدث التقنيات الخدمية السحابية</h6>
                        <p class="p-decerption pt-1">نستخدم أحدث التقنيات السحابية لتطوير وتقديم حلولنا، كما نتبع أفضل الممارسات ونواكب التغيرات السريعة في السوق المحلية والعالمية لضمان تقديم تقنيات متقدمة وموثوقة.</p>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="about-item">
                    <img src="{{ asset('public/assets_site/img/link-other.webp') }}" alt="service-v">
                    <div class="px-3">
                        <h6 class="title-title "> تكامل وربط الأنظمة المتنوعة</h6>
                        <p class="p-decerption pt-1">لدينا القدرة على ربط أنظمتنا مع المنصات المختلفة، سواء كانت حكومية أو خاصة، وهذا يسمح للعملاء بالاستفادة من تكامل سلس كما يسهل تبادل المعلومات بين الأنظمة.
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
                            نقدم نظامًا محاسبيًا ERP يتميز بمرونته وقدرته على أن يكون متعدد المهام، وبذلك يمكن للعملاء الاستفادة من مجموعة واسعة من الخدمات البرمجية المتنوعة التي تلبي احتياجاتهم الفريدة.

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
                            نحرص على تأمين خدماتنا بأعلى مستويات الأمان والحماية السيبرانية، كما نتبع معايير صارمة لضمان أمان بيانات العملاء واستقرار النظام.
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
                            نحن نضع معايير جودة عالية لخدمتنا ونسعى جاهدين لتحسين أعمالنا بشكل مستمر، كما نستمع إلى آراء عملائنا ونعمل بنشاط على تلبية احتياجاتهم وتوفير حلول مبتكرة وموثوقة.
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
                            يتميز فريقنا بالمهارات القوية في التعامل مع تحديات تطوير الأنظمة المحاسبية المعقدة، نحن نضمن توفير فريق متكامل يضم مبرمجين ومحللين محترفين يتفاعلون بشكل مثالي لتطوير وتنفيذ حلول ERP مخصصة وفقًا لمتطلبات العملاء.
                        </p>
                    </div>
                </div>
            </div>
            <!---->
        </div>
    </div>
</section>
<!---->
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
<!--Reviews customers-->
<section class="mt-5 pb-5 pt-5 component-reviews">
    <div class="text-center">
        <h2 class="title-title text-white"> اراء عملائنا </h2>
    </div>
    <div class="slider-reviews pt-5">
        <div id="carouselExampleIndicators" class="carousel slide custemer-reviews" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider-1 ">
                        <div class="slider-img">
                            <img src="{{ asset('public/assets_site/img/ceo.webp') }}" class="d-block" alt="...">
                        </div>
                        <div class="slider-title">
                            <h6 class="fw-bold text-white fs-4">Dawaa Care Experts</h6>
                        </div>
                        <p class="fw-bold text-white py-3">فريق المبرمجين لديهم يتفهم طلب العميل جيدا</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-1 ">
                        <div class="slider-img">
                            <img src="{{ asset('public/assets_site/img/ceo.webp') }}" class="d-block" alt="...">
                        </div>
                        <div class="slider-title">
                            <h6 class="fw-bold text-white fs-4">Dawaa Care Experts</h6>
                        </div>
                        <p class="fw-bold py-3 text-white">
                            "أعجبتني المرونة والتعديلات الممكنة في البرامج المحاسبية لديهم، حيث يمكن تخصيصها لتلبية احتياجات شركتي بالضبط"
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="slider-1 ">
                        <div class="slider-img">
                            <img src="{{ asset('public/assets_site/img/ceo.webp') }}" class="d-block" alt="...">
                        </div>
                        <div class="slider-title">
                            <h6 class="fw-bold text-white fs-4">Dawaa Care Experts</h6>
                        </div>
                        <p class="fw-bold py-3 text-white">فريق المبرمجين لديهم يتفهم طلب العميل جيدا</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@endsection
