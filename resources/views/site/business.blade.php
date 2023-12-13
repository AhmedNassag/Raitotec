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
    <meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')
    <section class="component-hadeer">
        <div class="container">
            <h1 class="page-title">
                {{ trans('site.Raito Software Services Business Models')}}
            </h1>
        </div>
    </section>


    <section class="component-content pt-5 pb-5">
        <div class="container">
            <h2 class="title-title">{{ trans('site.About Our Business') }}</h2>
            <p class="pt-3 p-decerption">رايتو هي شركة تطوير برمجيات احترافية، قدمت الشركة الكثير من الأعمال في مجالات متعددة، ومن أهم تلك المجالات تصميم وتنفيذ الأنظمة البرمجية ERP بالإضافة إلى تصميم تطبيقات الجوال و تصميم المواقع الإلكترونية وغيرها من الخدمات في مجال الأنظمة البرمجية.</p>
            <div class="component-content-or mt-5">
                <h2 class="title-title text-center"> أهم نماذج أعمالنا</h2>
                <div class="component-or p-4 mt-5">
                    @foreach($business as $example)
                    <h3 class="title-title text-end">{{ $example->title }}</h3>
                    <div class="row mx-0 row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 pt-4 pb-4">
                        @foreach($example->businessPhotos as $examplePhoto)
                        <div class="col">
                            <img class="img-or" src="{{ asset('public/attachments/business/'.$examplePhoto->photo) }}" alt="{{ $example->title }}" loading="lazy">
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
                    <h2 class="title-title"> لماذا تعتمد على رايتو للبرمجة والأنظمة المحاسبية - ERP </h2>
                    <p class="pt-3 p-decerption">
                        تعتبر شركتنا رائدة في مجال إنشاء الأنظمة المحاسبية ERP، و الإدارة السحابية التي قدمـت بالفعـل حلولا تقنية متميزة وليس لدينا أي قيود تعـوق التطويــر المستمـــر والمتنـامـي ، مستشــرفيــن عهــدا جديـدا من التطــور التقنـي و نجـاح الاعمـال، واهم ما يميزنا ما يلي:
                    </p>
                </div>
            </div>
            <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
                @foreach($whyUs as $item)
                <div class="col d-flex">
                    <div class="about-item">
                        <img src="{{ asset('public/attachments/whyUs/'.$item->photo) }}" alt="{{ $item->title }}" loading="lazy">
                        <div class="px-3">
                            <h6 class="title-title">{{ $item->title }}</h6>
                            <p class="p-decerption pt-1">{{ $item->content }}</p>
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
