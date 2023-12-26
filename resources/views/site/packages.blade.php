@extends('site.layouts.master')



@section('title')
    @if (App::getLocale() == 'ar')
    شركة رايتو |  أنظمة برمجية متقدمة ومبتكرة
    @else
    Raito Company | Advanced And Innovative Software Systems
    @endif
@endsection



@section('meta-description')
    <meta name="description" content="اكتشف أنظمة برمجية متقدمة ومبتكرة تلبي احتياجات عملك مع رايتو، نحن نقدم حلولًا مخصصة لتطوير وتنفيذ أنظمة برمجية متكاملة لتحسين كفاءة عملك.">
@endsection



@section('meta-keywords')
    <meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')
    <section class="component-hadeer">
        <div class="container">
            <h2 class="page-title">{{ trans('site.Prices') }}</h2>
        </div>
    </section>

    
    <section class="component-prices pt-5 pb-5">
        <div class="container">
            <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1">
                @foreach ($data as $package)
                <div class="col col-peicess">
                    <div class="price_box_inner p-md-4 p-2">
                        <div class="nk-pricing-head pb-2">
                            <h3 class="price-component">
                                <span class="span-price">{{ @$package->price }}</span>
                                {{ trans('site.Riyal' )}}
                                <span>/{{ trans('site.Monthly') }}</span>
                            </h3>
                            <h5 class="pt-3">{{ @$package->name }}</h5>
                            <p class="pt-3">{{ trans('site.Benefit from a discount') }} {{ $package->discount }}% {{ trans('site.On the annual package') }}</p>
                        </div>
                        <div class="nk-pricing-body">
                            @foreach ($package->packageBenefits as $benefit )
                                <p><i class="fa-regular fa-circle-check"></i><span class="px-2">{{ @$benefit->name }}</span></p>
                            @endforeach
                            <a href="{{ route('contact.index') }}" class="btn btn-price">{{ trans('site.Contact Us') }}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
@endsection