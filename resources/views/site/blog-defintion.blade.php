@extends('site.layouts.master')



@section('title')
    @if (App::getLocale() == 'ar')
    مدونة رايتو للحلول البرمجية والأنظمة البرمجية
    @else
    Raito Blog For Software Solutions And Software Systems
    @endif
@endsection



@section('meta-description')
    <meta name="description" content="استكشف مقالاتنا الممتعة والمفيدة في مدونة رايتو، حيث نقدم نصائح وأفكار حول حلول البرمجة بالإضافة إلى الأنظمة البرمجية وحول تطبيقات الجوال والمواقع الإلكترونية.">
@endsection



@section('meta-keywords')
    <meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة">
@endsection



@section('content')
    <section class="component-hadeer">
        <div class="container">
            <h1 class="page-title">
                {{ trans('site.Blog') }}
            </h1>
        </div>
    </section>


    <section class="component-blog pt-5 pb-5">
        <div class="container">
            <div class="card card-blog card-definti-blog">
                <div class="img-blog-date">
                    <img class="blog-img" src="{{ asset('public/attachments/blog/'.$blog->photo) }}" alt="{{ $blog->first_title }}" loading="lazy">
                </div>
                <div class="defintion-blog p-2">
                    <strong class="title-card">{{ trans('site.Blog Content') }}</strong>
                    <ul class="toc_list px-4 pt-2">
                        @for($i = 1; $i <= count($tableArray); $i++)
                            <li>
                                <a href="#{{ $tableArray[$i - 1]['key'] }}">
                                    {{ $tableArray[$i - 1]['content'] }}
                                </a>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="card-body">
                    <div class="date pb-2">
                        <i class="far fa-calendar-alt mx-2"></i>{{ @$blog->created_at?->format('Y-m-d') }}
                    </div>
                    <h6 class="title-card fs-2">{{ $blog->first_title }}</h6>
                    <p class="title-p pt-3">{!! $blog->first_content !!}</p>
                    
                    <section class="content-project content-project-blog mt-5">
                        <div class="container">
                            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                                <div class="col defintion-abver">
                                    <h6>
                                        شركة رايتو شريكك للنجاح
                                    </h6>
                                </div>
                                <div class="col text-start">
                                    <a href="{{ route('contact.index')}}" class="p-2 px-4 button-wiet"> تواصل معنا</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <h5 class="title-card fs-2 pt-3 mb-4">{{ $blog->second_title }}</h5>
                    <strong id="0" class="title-id title-card">{!! $blog->second_content !!}</strong>
                    {{-- <p class="title-p pt-2">{!! $data !!}</p> --}}
                    {{-- <p class="title-p pt-2">{!! $blog->second_content !!}</p> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
