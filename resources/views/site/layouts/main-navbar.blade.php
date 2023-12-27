<?php
    $programs = App\Models\Program::get();
    $services = App\Models\Service::get();
?>

<!--start main-navbar-->
<nav class="navbar navbar-expand-xl bg-body-tertiary fixed-top navber-index">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            @if (app()->getLocale() == 'ar')
                <img src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo" loading="lazy">
            @else
                <img src="{{ asset('public/assets_site/img/LOGO.png') }}" alt="logo" loading="lazy">
            @endif
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                
                <!--home-->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home.index') }}">{{ trans('site.Home') }}</a>
                </li>


                <!--aboutUs-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutUs.index') }}">{{ trans('site.About Us') }}</a>
                </li>
                

                <!--services-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('service.index') }}">
                        {{ trans('site.Services') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($services as $service) 
                            <li><a class="dropdown-item" href="{{ route('service.show',$service->slug) }}">{{$service->first_title }}</a></li>
                        @endforeach
                    </ul>
                </li>


                <!--programs-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('program.index') }}" role="button">
                        {{ trans('site.Programs') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($programs as $program)    
                            <li><a class="dropdown-item" href="{{ route('program.show',$program->slug) }}">{{$program->first_title }}</a></li>
                        @endforeach
                        <li><a class="dropdown-item" href="{{ route('program.other') }}">{{ trans('site.Other Programs') }}</a></li>
                    </ul>
                </li>


                <!--business-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('business.index') }}">{{ trans('site.Our Models') }}</a>
                </li>


                <!--blog-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">{{ trans('site.Blog') }}</a>
                </li>


                <!--contact-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">{{ trans('site.Contact Us') }}</a>
                </li>


                <!--dashboard-->
                @auth
                @if(Auth()->user()->roles_name)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">{{ trans('site.Dashboard') }}</a>
                </li>
                @endif
                <li class="nav-item nav-login-lang">
                    <a class="nav-link {{ Request::is('logout') ? 'active' : '' }}" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ trans('site.Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item nav-login-lang">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ trans('site.Login') }}</a>
                </li>
                @endauth


                <!--lang-->
                <li class="nav-item nav-login-lang">
                    @if ( app()->getLocale() == 'en')
                    <a class="nav-link" href={{route('lang.ar') }} class="main-bttn bordered-bttn">
                        AR
                    </a>
                    @else
                    <a class="nav-link" href={{route('lang.en') }}>
                        En
                    </a>
                    @endif
                </li>

            </ul>
        </div>
    </div>
</nav>
<!--end main-navbar-->