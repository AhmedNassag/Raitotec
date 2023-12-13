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
          <h2 class="page-title pt-5">  
            {{ @$service->first_title }}
          </h2>
      </div>
     </section>
     <!---->
     <section class="component-content pt-5 pb-5">
        <div class="container">
          <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
            <div class="col">
              <h2 class="title-title">  
                {{ trans('site.Brief') }} {{ @$service->first_title }}
              </h2>
              <p class="pt-3 p-decerption">
                {{ @$service->second_content }}
              </p>
            </div>
            {{-- <div class="col component-video" data-aos="fade-up"data-aos-delay="50">
              <div class="video-date">
                <div class="div-button">
                    <div id="myBtn"></div>
                </div>
                <video  loop="" id="myVideo" poster="{{asset('public/assets_site/img/advertisements.png') }}" style="object-fit:cover;">
                    <source src="{{asset('public/assets_site/img/video/vv.mp4') }}" type="video/mp4">
                </video>
            
            </div>    --}}
            <div class="col">
              <img class="w-100 img-system" src="{{asset('public/attachments/service/'.$service->photo) }}" alt="management">
            </div>
             </div>
            
          </div>
         
            
        </div>
     </section>
     <!---->
     
     <!---->
      <section class="component-work-accounting pt-5 pb-5 mt-5">
        <div class="container">
          <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
              <h2 class="title-title text-center"> 
                {{ trans('site.What are the most important services supported by Raito?') }}
              </h2>
              <p class="pt-3 p-decerption">
                 {{ trans('site.We provide a wide range of services through integrated ERP systems, here are some of the services we provide:') }}
              </p>
            </div>
          </div>
         
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-4 pt-5 mt-3">
            @foreach($service->serviceSupports as $support) 
            <div class="col d-flex">
                <div class="about-item-best text-center">
                  <img src="{{asset('public/attachments/serviceSupport/'.$support->photo) }}" alt="{{ $support->title }}">
                  <div class="px-3">
                    <h6 class="title-title">    
                      {{ @$support->title }}
                    </h6>
                    <p class="p-decerption pt-1">{!! $support->content !!}</p>
                  </div>
                </div>
             </div>
             @endforeach
          </div>
        </div>
      </section>
     <!---->
     <div class="mt-5 pb-5">
      <section class="component-adver">
       
        <div class="container">
           <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
              <div class="col defintion-abver">
             
               <p class="pt-3 mb-0">
                {{ trans('site.Prepare for the future by transforming your station into a smart station that meets the Kingdoms Vision 2030 and the requirements of the Ministry of Energy.') }}
              </p>
              </div>
              <div class="col text-start mt-md-0 mt-5">
               <a href="{{ route('contact.index') }}" class="p-3 px-4 button-stert">
                {{ trans('site.Contact us now') }}
              </a>
              </div>
           </div>
        </div>
     </section>
     </div>
     <!---->


     <!--serviceSteps-->
     @if($service->serviceSteps->count() > 0)
     <section class="mt-5 pt-5 pb-5">
      <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-1 g-4 justify-content-center align-items-center">
          <div class="col">
            <h2 class="title-title">  
              {{ trans('site.Program steps through Raito') }}
            </h2>
            <ul class="pt-3 ">
              <li class="pt-3 p-decerption">{!! $service->serviceSteps[0]->content !!}</li>
            </ul>
          </div>
          <div class="col">
            <img class="w-100 img-system" src="{{asset('public/attachments/serviceStep/'.$service->serviceSteps[0]->photo) }}" alt="management">
          </div>
        </div>
      </div>
     </section>
     @endif
     <!---->
     
     <!--serviceReasons-->
     <section class="component-best mt-5 pt-5 pb-5">
      <div class="container">
        <h2 class="title-title">{{ trans('site.Why rely on Raito?') }}</h2>
          <div class="row mx-0 row-cols-lg-3 row-cols-md-2 row-cols-1 g-3 pt-5">
            @foreach($service->serviceReasons as $reason)
            <div class="col d-flex">
                <div class="about-item-best">
                  <img src="{{asset('public/attachments/serviceReason/'.$reason->photo) }}" alt="{{ $reason->title }}">
                  <div class="px-3">
                    <h6 class="title-title ">{{ $reason->title }}</h6>
                    <p class="p-decerption pt-1">{{ $reason->content }}</p>
                  </div>
               </div>
            </div>
            @endforeach
         </div>
      </div>
    </section>
     <!---->

@endsection