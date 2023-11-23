@extends('site.layouts.master')



@section('content')

<!--carousel-->
<div id="carouselExampleCaptions" class="carousel slide corousel-index" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="img-slider">
                <img src="{{ asset('public/assets_site/img/sliderb.png') }}" class="d-block w-100" alt="slider">
                <div class="overlay"></div>
            </div>
            <div class="carousel-caption  d-md-block">
                <h5>رايتو</h5>
                <p class="pt-5">للبرمجيات وتخطيط الموارد</p>
            </div>
        </div>
        <div class="carousel-item">
            <div class="img-slider">
                <img src="{{ asset('public/assets_site/img/slider-3.png') }}" class="d-block w-100" alt="slider">
                <div class="overlay"></div>
            </div>

            <div class="carousel-caption d- d-md-block">
                <h5>نظام ERP متطور ومتكامل</h5>
                <p class="pt-5">برنامج رايتو ERP هو الحل الأمثل الذي يلبي احتياجات إدارة أعمالك، تم تطويره باستخدام أحدث التقنيات المتقدمة لضمان السرعة والدقة والأمان، فريق دعم البرنامج يؤمن بمبدأ التطور المستمر كمفتاح للنجاح منذ بداية تأسيسه!
                </p>
                <div class="mt-5">
                    <a href="#" class="p-3 px-4 button-stert button-mor">ابدا الاستخدام مجانى</a>

                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!--end-carousel-->
<!--about-->
<section class="component-about pt-5 pb-5">
    <div class="container">
        <div class="row row-cols-md-2 row-cols-1 mx-0 g-3">
            <div class="col pt-2" data-aos="fade-up" data-aos-delay="50">
                <h2 class="title-title">نبذة عن الشركة </h2>
                <p class="pt-3 p-decerption">
                    شركة رايتو للبرمجيات هي شركة تقنية رائدة تقدم منتجات وخدمات عالية الجودة لعملائها في جميع أنحاء العالم، تلتزم الشركة بالابتكار والتميز التقني، وتهدف لمساعدة عملائها على تحقيق أهدافهم، كما تمتلك الشركة فريقًا موهوبًا من المتخصصين في تطوير البرمجيات وتصميم الواجهات وإدارة المشاريع، وتستخدم الشركة أحدث التقنيات والأدوات لتطوير حلول برمجية مبتكرة ومخصصة تلبي متطلبات السوق الحالية والمستقبلية.
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
<!--services-->
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
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/management system.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title">المحاسبة العامة </h3>
                        <p class="card-text">نقدم لكم برامج المحاسبة لكافة المنشأت، ويتم من خلال هذه البرامج إدارة المدفوعات - القيـود اليوميـة - الايداعات - التحويلات البنكية بيـن الحسابات- تسوية الحسابات البنكية الشــركات وغيرها.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/Stores.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> إدارة المخزون </h3>
                        <p class="card-text">
                            يمكـن مـن خلال نظـام رايتو ERP السـحابي إدارة كل مـن عمليـات أقسـام المخـزون و التصنيع و المشتريات والمبيعات ويتميز هذا النظام بأنه مترابط مـع تطبيـق الجـوال الخاص بمندوبي المبيعات (نقاط البيع المتحركة)
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/delegates.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> إعداد تطبيق المناديب </h3>
                        <p class="card-text">
                            نؤسس لك برنامج يساعدك على على إدارة وتتبع مبيعاتك عبر المندوبين في منشأتك بكل سهولة وذلك من خلال توفير ميزة تسجيل فواتير المبيعات والمردودات مع تطبيق كل سياسات المنشأة الخاصة بالعملاء والأسعار عند إصدار الفاتورة.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/HR.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> إدارة الموارد البشرية </h3>
                        <p class="card-text">
                            ننشئ لك برنامج يساعد في إدارة جميع بيانات الموظفين بكفاءة في ملف تعريف واحد، بالإضافة إلى تنظيم دورة العهدة من البداية إلى النهاية، ويساعدك البرنامج في إعداد استراتيجية المكافآت والعقوبات، ومتابعة تدفقات عمل الموارد البشرية.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>

                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/Sale-purchases.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> برامج إدارة المبيعات</h3>
                        <p class="card-text">
                            نقدم برنامج نقط البيع POS الذي يعزز الأنشطة التجارية ويساهم في زيادة الأرباح، ويعتبر هذا البرنامج نظام مبيعات متكامل يوفر حلولاً شاملة لتسهيل عملية البيع وجميع الجوانب المرتبطة بها
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>

                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/our-p.png') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> برامج أخرى</h3>
                        <p class="card-text">
                            في رايتو نقدم الكثير من البرامج الأخرى، مثل برامج إدارة الأصول الذي يستخدم في تنظيم تلك الأصول وإدارتها، بالإضافة إلى برامج لإدارة المدارس وبرامج لإدارة العقارات، كما تتوفر أنظمة لإدارة المحاماة وغيرها.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ens-services-->
<!--advertisements-->
<div class="mt-5 pb-5">
    <section class="component-adver">
        <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                    <h6> مع رايتو عملك أسهل!
                    </h6>
                    <p class="pt-3 mb-0">
                        لا تحتاج أن تكون خبيرًا تقنيًا أو محاسباً لإنجاز تقاريرك المالية والإدارية، نؤسس لك نظام متكامل قابل للتخصيص ليناسب أكثر من 40 مجالاً مختلفاً.
                    </p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                    <a href="#" class="p-3 px-4 button-stert">ابدا الاستخدام مجانى</a>
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
                    <img src="{{ asset('public/assets_site/img/pieces.webp') }}" alt="pieces">
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
                    <img src="{{ asset('public/assets_site/img/service.webp') }}" alt="vision">
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
                    <img src="{{ asset('public/assets_site/img/accounting.webp') }}" alt="accounting">
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
                    <img src="{{ asset('public/assets_site/img/learning.webp') }}" alt="vision">
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
                    <img src="{{ asset('public/assets_site/img/estate.webp') }}" alt="vision">
                    <div class="card-body p-1 text-center">
                        <h3 class="card-title"> العقارات </h3>
                        <p class="card-text">
                            نوفر برامج لإدارة كافة شركات الإنشاء والاستثمار العقاري تمكنك من إدارة المخزون الخاص بقطع الغيار وغيرها من المميزات.
                        </p>
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
                    <a href="#" class="p-3 px-4 button-stert">ابدا الاستخدام مجانى</a>
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
                <h2 class="title-title"> خدماتنا </h2>
            </div>
        </div>
        <div class="services-other content-services row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 justify-content-center">
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/web-design.png') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> تصميم المواقع الإلكترونية </h3>
                        <p class="card-text">
                            نساعدك في تصميم موقع إلكتروني سريع وآمن ومتوافق مع قواعد السيو، سهل الاستخدام، سهل التنقل ذو محتوى مفيد وجذاب.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/wep-mopile.png') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> تطبيقات الجوال </h3>
                        <p class="card-text">
                            نقدم لك تطبيق جوال سهل الاستخدام، بسيط، مزود بنظام تقييم وإمكانية تخصيص، يتميز بالسرعة والأداء المميز.
                        </p>
                        <div>
                            <a href="#" class="btn btn-primar px-3">قراءة المزيد </a>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card" data-aos-delay="30" data-aos="fade-up">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/stations.webp') }}" alt="Services">
                    <div class="card-body">
                        <h3 class="card-title"> تأهيل محطات الوقود </h3>
                        <p class="card-text">
                            نستخدم أحدث التقنيات البرمجية والأجهزة المخصصة لهذا الغرض، لإدارة المخزون والتحكم في محطات الوقود وإعداد التقارير المالية وغيرها.
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
<!--ens-services-->
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
<!--Your sales-->
<section class="component-sales mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 g-5 align-items-center">
            <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-duration="3000">
                <h2 class="title-title"> زود مبيعاتك
                </h2>
                <p class="pt-3 p-decerption">
                    برنامج رايتو لإدارة المبيعات ليس فقط يساعدك علي مراقبة أعمالك من خلال تقارير تحليلية تنظم عمليات البيع والتارجت وتتبع المناديب ولكنه يقدم خدمة التكامل مع المنصات المختلفة والربط مع تطبيق العملاء لزيادة مبيعاتك
                </p>
                <div class="mt-4">
                    <a href="#" class="p-2 px-4 button-stert button-mor"> اكتشف المزيد</a>
                </div>
            </div>
            <div class="col">
                <img class="sales-img img-one animate-float-y" src="{{ asset('public/assets_site/img/seles.png') }}" alt="sales">
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
                <h2 class="title-title"> المدونة
                </h2>
                <p class="pt-3 p-decerption">
                    هنا ستجد كل المدونات الخاصة بنا
                </p>
            </div>
        </div>
        <div class="content-blog row mx-0 row-cols-lg-4 row-cols-md-2 g-4 pt-5 row-cols-1">
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/bolog1.webp') }}" alt="blog">
                    <div class="card-body p-2 text-center">
                        <h3 class="card-title">تحليل الأعمال الأكثر شيوعًا </h3>
                        <p class="card-text">تحليل الأعمال هو عملية استخدام البيانات والإحصاءات والتحليل الكمي والنمذجة الرياضية لفهم الأداء التج...</p>
                        <a href="#" class="btn btn-primar px-3 pt-3 pb-3">معرفة المزيد </a>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/bolog2.webp') }}" alt="blog">
                    <div class="card-body p-2 text-center">
                        <h3 class="card-title"> تصميم مواقع </h3>
                        <p class="card-text"> نحن نقوم باستخدام الأساليب الحديثة في تصميم وتطوير الواجهات الأمامية والخلفية، واستخدام التصميم الإب...</p>
                        <a href="#" class="btn btn-primar px-3 pt-3 pb-3">معرفة المزيد </a>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/bolog3.webp') }}" alt="blog">
                    <div class="card-body p-2 text-center">
                        <h3 class="card-title"> الاستضافة السحابية </h3>
                        <p class="card-text"> نعتمد على ربط عدد من خوادم الويب ببعضها البعض لتكوين شبكة متصلة من خوادم الاستضافة السحابية</p>
                        <a href="#" class="btn btn-primar px-3 pt-3 pb-3">معرفة المزيد </a>
                    </div>
                </div>
            </div>
            <!---->
            <div class="col d-flex">
                <div class="card aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    <img class="img-fluid" src="{{ asset('public/assets_site/img/bolog4.webp') }}" alt="blog">
                    <div class="card-body p-2 text-center">
                        <h3 class="card-title"> أنظمة تخطيط موارد المؤسسات </h3>
                        <p class="card-text"> نقوم بتصميم وتنفيذ نظم برمجية تهدف إلى تنظيم وتنسيق عمليات الأعمال داخل المؤسسات</p>
                        <a href="#" class="btn btn-primar px-3 pt-3 pb-3">معرفة المزيد </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Blog-->

@endsection