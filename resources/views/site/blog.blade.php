@extends('site.layouts.master')



@section('title')

@if(app()->getLocale() == 'ar')
مدونة رايتو للحلول البرمجية والأنظمة البرمجية
@endif

@endsection



@section('meta-description')

@if(app()->getLocale() == 'ar')
<meta name="description" content="استكشف مقالاتنا الممتعة والمفيدة في مدونة رايتو، حيث نقدم نصائح وأفكار حول حلول البرمجة بالإضافة إلى الأنظمة البرمجية وحول تطبيقات الجوال والمواقع الإلكترونية.">
@endif

@endsection



@section('content')

<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if(app()->getLocale() == 'ar')
            المدونة | نصائح وأفكار حول الحلول البرمجية
            @endif
        </h1>
    </div>
</section>
<!--about-->
<!---->
<section class="component-blog pt-5 pb-5">
    <div class="container">
        <div class="component-serch">
            <h4 class="title-serch">بحث</h4>
            <form action="" method="GET" role="search" class="mt-2">
                <div class="input-group">
                    <input type="search" class="form_control" placeholder="بحث...." name="search" value="" required="">
                    <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 mx-0 pt-5">
            <!--start-->
            <div class="col col-serves aos-init aos-animate d-flex" data-aos="fade-up" data-aos-delay="20">
                <div class="card card-blog">
                    <a href="blog-defintion.html">
                        <div class="img-blog-date">
                            <img class="blog-img" src="{{ asset('public/assets_site/img/Blog.webp') }}" alt="Blog">
                            <div class="date-time">
                                <div class="number-time">25</div>
                                <div>Sep</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="date">
                                <i class="far fa-calendar-alt mx-2"></i>2023-05-18
                            </div>
                            <h6 class="title-card">تحليل الأعمال الأكثر شيوعًا</h6>
                            <p class="title-p">
                                تحليل الأعمال هو عملية استخدام البيانات والإحصاءات والتحليل الكمي والنمذجة الرياضية لفهم الأداء التج...
                            </p>
                        </div>
                        <div class="component-Know">
                            <a class="btn btn-primar px-3 link-more" href="blog-defintion.html">
                                قرأة المزيد
                            </a>
                        </div>
                    </a>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="col col-serves aos-init aos-animate d-flex" data-aos="fade-up" data-aos-delay="20">
                <div class="card card-blog">
                    <a href="blog-defintion.html">
                        <div class="img-blog-date">
                            <img class="blog-img" src="{{ asset('public/assets_site/img/Blog-design.webp') }}" alt="Blog">
                            <div class="date-time">
                                <div class="number-time">25</div>
                                <div>Sep</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="date">
                                <i class="far fa-calendar-alt mx-2"></i>2023-05-18
                            </div>
                            <h6 class="title-card"> تصميم مواقع</h6>
                            <p class="title-p">
                                نحن نقوم باستخدام الأساليب الحديثة في تصميم وتطوير الواجهات الأمامية والخلفية، واستخدام التصميم الإب...
                            </p>
                        </div>
                        <div class="component-Know">
                            <a class="btn btn-primar px-3 link-more" href="blog-defintion.html">
                                قرأة المزيد
                            </a>
                        </div>
                    </a>
                </div>
            </div>
            <!--end-->
            <!--start-->
            <div class="col col-serves aos-init aos-animate d-flex" data-aos="fade-up" data-aos-delay="20">
                <div class="card card-blog">
                    <a href="blog-defintion.html">
                        <div class="img-blog-date">
                            <img class="blog-img" src="{{ asset('public/assets_site/img/Blog-design.webp') }}" alt="Blog">
                            <div class="date-time">
                                <div class="number-time">25</div>
                                <div>Sep</div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="date">
                                <i class="far fa-calendar-alt mx-2"></i>2023-05-18
                            </div>
                            <h6 class="title-card"> الاستضافة السحابية</h6>
                            <p class="title-p">
                                نعتمد على ربط عدد من خوادم الويب ببعضها البعض لتكوين شبكة متصلة من خوادم الاستضافة السحابية
                            </p>
                        </div>
                        <div class="component-Know">
                            <a class="btn btn-primar px-3 link-more" href="blog-defintion.html">
                                قرأة المزيد
                            </a>
                        </div>
                    </a>
                </div>
            </div>
            <!--end-->
        </div>
    </div>
</section>

@endsection
