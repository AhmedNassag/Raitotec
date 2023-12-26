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
    <meta name="keywords" content="المدونة | نصائح وأفكار حول الحلول البرمجية">
@endsection



@section('content')
    <section class="component-hadeer">
        <div class="container">
            <h1 class="page-title">
                {{ trans('site.Blog | Tips And Ideas About Software Solutions') }}
            </h1>
        </div>
    </section>


    <section class="component-blog pt-5 pb-5">
        <div class="container">
            <div class="component-serch">
                <h4 class="title-serch">
                    {{ trans('site.Search') }}
                </h4>
                <form action="{{ route('blog.index') }}" method="GET" role="search" class="mt-2">
                    <div class="input-group">
                        <input type="search" class="form_control" placeholder="{{ trans('site.Search') }}" name="search" value="{{ @$search }}">
                        <button type="submit" class="search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 mx-0 pt-5">
                @if($data->count() > 0)
                @foreach ($data as $key=>$item)
                    <div class="col col-serves aos-init aos-animate d-flex" data-aos="fade-up" data-aos-delay="20">
                        <div class="card card-blog">
                            <a href="{{ route('blog.show',@$item->id) }}">
                                <div class="img-blog-date">
                                    <img class="blog-img" src="{{ asset('public/attachments/blog/'.@$item->photo) }}" alt="{{ @$item->first_title }}" loading="lazy">
                                    <div class="date-time">
                                        <div class="number-time">{{ @$item->created_at?->format('d') }}</div>
                                        <div>{{ @$item->created_at?->format('M') }}</div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="date">
                                        <i class="far fa-calendar-alt mx-2"></i>{{ @$item->created_at?->format('Y-m-d') }}
                                    </div>
                                    <h6 class="title-card">{{ @$item->first_title }}</h6>
                                    <p class="title-p">{!! $item->first_content !!}</p>
                                    {{-- @php
                                        $normalizedText = Normalizer::normalize(@$item->first_content, Normalizer::FORM_C);
                                    @endphp
                                    <p class="title-p">
                                        {{ @$normalizedText }}
                                    </p> --}}
                                </div>
                                <div class="component-Know">
                                    <a class="btn btn-primar px-3 link-more" href="{{ route('blog.show',@$item->id) }}">
                                        {{ trans('site.More') }}...    
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
            {{ @$data->links() }}
        </div>
    </section>
@endsection
