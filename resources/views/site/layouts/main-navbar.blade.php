<?php
    $programs = App\Models\Program::get(['id','first_title_ar','first_title_en']);
    $services = App\Models\Service::get(['id','first_title_ar','first_title_en']);
?>

<!--start main-navbar-->
<nav class="navbar navbar-expand-xl bg-body-tertiary fixed-top navber-index">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">
            <img src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo" loading="lazy">
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
                    <a class="nav-link" href="{{ route('aboutUs.index') }}">من نحن</a>
                </li>
                

                <!--services-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('service.index') }}">
                        {{ trans('site.Services') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($services as $service) 
                            <li><a class="dropdown-item" href="{{ route('service.show',$service->id) }}">{{$service->first_title }}</a></li>
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
                            <li><a class="dropdown-item" href="{{ route('program.show',$program->id) }}">{{$program->first_title }}</a></li>
                        @endforeach
                    </ul>
                </li>


                <!--business-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('business.index') }}">نماذج اعمالنا</a>
                </li>


                <!--blog-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">المدونة</a>
                </li>


                <!--contact-->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.index') }}">تواصل معنا</a>
                </li>


                <!--dashboard-->
                @auth
                @if(Auth()->user()->roles_name)
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">الأدمن</a>
                </li>
                @endif
                <li class="nav-item nav-login-lang">
                    <a class="nav-link {{ Request::is('logout') ? 'active' : '' }}" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">خروج</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item nav-login-lang">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"> تسجيل الدخول</a>
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