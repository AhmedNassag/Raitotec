@extends('layouts.master')

@section('css')
<link href="{{ asset('public/assets_site/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('public/assets_site/css/style-en.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">{{ trans('main.Services') }}</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('main.Dashboard') }}</a></li>
                    <li class="breadcrumb-item active">{{ trans('main.Services') }}</li>
                </ul>
            </div>
            <div class="col-auto">
                <a href="{{ route('dashboard-service.index') }}" type="button" class="btn btn-primary me-2" id="filter_search">
                    {{ trans('main.Back') }}
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Page Header -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-blog card-definti-blog">
                <div class="img-blog-date">
                    <img loading="lazy" class="blog-img" src="{{ asset('public/attachments/service/'.$service->photo) }}" alt="{{ $service->fist_title }}">
                </div>  
                <div class="card-body">
        
                    <div class="date pb-2">
                        <i class="far fa-calendar-alt mx-2"></i>{{ $service->created_at->format('Y-m-d') }}
                    </div>
                    <h6 class="title-card fs-2">{{ $service->first_title }}</h6>
                    <p class="title-p pt-3">{!! $service->first_content !!}</p>
                    {{-- <h5 class="title-card fs-2 pt-3 mb-4">{{ $service->second_title }}</h5> --}}
                    {{-- <p class="title-p pt-2">{!! $service->second_content !!}</p> --}}
                </div>
            </div>
        </div>	
    </div>
@endsection



@section('js')
@endsection
