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
          <h2 class="page-title pt-5">{{ @$program->first_title }}</h2>
      </div>
     </section>


     <!--program-->
     <section class="component-content pt-5 pb-5">
        <div class="container">
          <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
              <h2 class="title-title">{{ trans('site.Brief') }} {{ @$program->first_title }}</h2>
              <p class="pt-3 p-decerption">{!! @$program->second_content !!}</p>
            </div>
            <div class="col">
              <img class="w-100 img-system" src="{{ asset('public/attachments/program/'.@$program->photo) }}" alt="management">
            </div>
          </div>
        </div>
     </section>

     <!--programManage-->
     <section class="component-accounting pt-5 pb-5 mt-5">
      <div class="container">
        <h2 class="title-title text-center"> {{ trans('site.manage your company general accounts professionally with Raito') }} </h2>
        <div class="row mx-0 row-cols-lg-4 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
            @foreach($program->programManages as $programManage)
            <div class="col mb-4">
              <div class="card-accounting text-center">
                  <img class="img-accountiong" src="{{ asset('public/attachments/programManage/'.@$programManage->photo) }}" alt="accounting">
                  <h6 class="title-accountin">{{ $programManage->title }}</h6>
              </div>
            </div>
            @endforeach
        </div>
      </div>
     </section>


     <!--programAbility-->
      <section class="component-work-accounting pt-5 pb-5 mt-5">
        <div class="container">
          <h2 class="title-title text-center"> 
            {{ trans('site.What can you do with account management software?') }}
          </h2>
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
             @foreach($program->programAbilities as $programAbility)
            <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{ asset('public/attachments/programAbility/'.@$programAbility->photo) }}" alt="{{ $programAbility->title}}">
                  <div class="px-3">
                    <h6 class="title-title">{{ $programAbility->title }}</h6>
                    <p class="p-decerption pt-1">{{ $programAbility->content }}</p>
                  </div>
                </div>
             </div>
             @endforeach
          </div>
        </div>
      </section>


     <!---->
     {{-- <div class="mt-5 pb-5">
        <section class="component-adver">
          <div class="container">
            <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
                <div class="col defintion-abver">
                  <h6>{{ trans('site.Get a professional account management system') }}</h6>
                <p class="pt-3 mb-0">{{ trans('site.You can constantly follow up on your books of accounts, in addition to monitoring income and expenses and preparing a chart of accounts that can be amended.') }}</p>
                </div>
                <div class="col text-start mt-md-0 mt-5">
                  <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">{{ trans('site.Get started now') }}</a>
                </div>
            </div>
          </div>
      </section>
     </div> --}}


     
    
    
    <!--whyPrograms-->
    <section class="component-best pt-5 pb-5">
      <div class="container">
          <h2>
              لماذا تعتبر رايتو
              {{-- {{ trans('site.') }} --}}
              <br>
              شريكك الأفضل لإدارة أعمالك؟
              {{-- {{ trans('site.') }} --}}
          </h2>
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
              @foreach($whyPrograms as $whyProgram)
              <div class="col d-flex">
                  <div class="about-item-best">
                      <img src="{{ asset('public/attachments/whyProgram/'.$whyProgram->photo) }}" alt="{{ $whyProgram->title }}" loading="lazy">
                      <div class="px-3">
                          <h6 class="title-title "> 
                              {{ $whyProgram->title }}
                          </h6>
                          <p class="p-decerption pt-1">
                              {{ $whyProgram->content }}
                          </p>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </section>
  <!--whyPrograms-->


     <!--Program Packages-->
     <section class="component-prices mt-5 pt-5 pb-5">
      <div class="container">
        <div class="text-center">
          <h2 class="title-title">{{ trans('site.Program Prices') }}</h2>
      </div>
        <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 pt-5">
          @foreach($program->programPackages as $package)
           <div class="col col-peicess">
             <div class="price_box_inner pe-3 px-3">
               <div class="nk-pricing-head pb-2">
                <h5 class="pt-3">{{ $package->title }}</h5>
                 <h3 class="price-component text-center pt-3">
                 <span class="span-price">{{ $package->monthly_price }}</span>
                  {{ trans('site.Rial') }}
                  <span>/{{ trans('site.Monthly') }}</span>
                 </h3>
                 
                 
                 <p class="pt-3 text-center">{{ trans('site.Pay') }}<span class="spen-selery fw-bold">{{ $package->annually_price }}</span>{{ trans('site.Riyal') }}/{{ trans('site.Annually') }}</p>
               </div>
              
             </div>
           </div>
           @endforeach
        </div>
        <div class="text-center mt-5">
          <a href="{{ route('contact.index') }}" class="p-2 px-4 button-stert button-mor">{{ trans('site.Get started now') }}</a>
        </div>
      </div>
    </section>
    
    
    
    
    
    
    
    
@endsection