@extends('site.layouts.master')



@section('title')
    @if (App::getLocale() == 'ar')
    نماذج أعمال رايتو | للحلول البرمجية والأنظمة البرمجية
    @else
    Raito Business Models | For Software Solutions And Software Systems
    @endif
@endsection



@section('meta-description')
    <meta name="description" content="استعرض نماذج أعمال رايتو وتعرّف على حلولنا البرمجية المبتكرة والأنظمة البرمجية المخصصة التي نقدمها. اكتشف قدراتنا في تطوير البرمجيات وتصميم الحلول التقنية">
@endsection



@section('meta-keywords')
    <meta name="keywords" content="نماذج أعمال شركة رايتو للخدمات البرمجية">
@endsection



@section('content')
    <section class="component-hadeer">
        <div class="container">
            <h1 class="page-title">
                @if (App::getLocale() == 'ar')
                نماذج أعمالنا
                @else
                Our Work
                @endif
            </h1>
        </div>
    </section>


    <section class="component-content pt-5 pb-5">
        <div class="container">
            <h2 class="title-title">
                @if (App::getLocale() == 'ar')
                نبذة عن أعمالنا
                @else
                Overview of Our Work
                @endif
            </h2>
            <p class="pt-3 p-decerption">
                @if (App::getLocale() == 'ar')
                رايتو هي شركة تطوير برمجيات احترافية، قدمت الشركة الكثير من الأعمال في مجالات متعددة، ومن أهم تلك المجالات تصميم وتنفيذ الأنظمة البرمجية ERP بالإضافة إلى تصميم تطبيقات الجوال و تصميم المواقع الإلكترونية وغيرها من الخدمات في مجال الأنظمة البرمجية.
                @else
                Raito is a professional software development company that has delivered numerous projects in various fields. Among the key areas of our expertise are designing and implementing ERP software systems, as well as mobile application development, website design, and other services in the software systems domain.
                @endif
            </p>
            <div class="component-content-or mt-5">
                <h2 class="title-title text-center">
                    @if (App::getLocale() == 'ar')
                    أهم نماذج أعمالنا 
                    @else
                    Samples of Our work
                    @endif
                </h2>
                <div class="component-or p-4 mt-5">
                    @foreach($business as $example)
                    <h3 class="title-title text-end">{{ @$example->title }}</h3>
                    <div class="row mx-0 row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 pt-4 pb-4">
                        @foreach($example->businessPhotos as $examplePhoto)
                        <div class="col">
                            <img class="img-or" src="{{ asset('public/attachments/business/'.@$examplePhoto->photo) }}" alt="{{ @$example->title }}" loading="lazy">
                        </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!--whyUs-->
    @if($whyUs->count() > 0)
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
                        We are a leading company in the field of ERP accounting systems and cloud management. We have already provided exceptional technical solutions, and we have no limitations that hinder continuous development and growth.
                        @endif
                    </p>
                </div>
            </div>
            <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
                @foreach($whyUs as $item)
                <div class="col d-flex">
                    <div class="about-item">
                        <img src="{{ asset('public/attachments/whyUs/'.@$item->photo) }}" alt="{{ @$item->title }}" loading="lazy">
                        <div class="px-3">
                            <h6 class="title-title">{{ @$item->title }}</h6>
                            <p class="p-decerption pt-1">{!! @$item->content !!}</p>
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
