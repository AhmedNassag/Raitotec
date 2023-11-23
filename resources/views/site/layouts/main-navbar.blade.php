<!---------------------------start main-navbar------------------------->
<nav class="navbar navbar-expand-xl bg-body-tertiary fixed-top navber-index">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('site.index') }}">{{ trans('site.Home') }}</a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('site.about') }}">من نحن</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('services') ? 'active' : '' }}" href="{{ route('site.services') }}">
                        الخدمات
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">تاهيل المحطات</a></li>
                        <li><a class="dropdown-item" href="#">تصميم المواقع الاكترونية </a></li>
                        <li><a class="dropdown-item" href="#">تصميم تطبيقات الجوال </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('programs') ? 'active' : '' }}" href="{{ route('site.programs') }}" role="button">
                        البرامج
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> برنامج المحاسبة</a></li>
                        <li><a class="dropdown-item" href="#"> برنامج ادارة المخازن </a></li>
                        <li><a class="dropdown-item" href="#"> برنامج ادارة المناديب </a></li>
                        <li><a class="dropdown-item" href="#"> برنامج ادارة الموارد البشرية </a></li>
                        <li><a class="dropdown-item" href="#"> برنامج نقاط البيعpos </a></li>
                        <li><a class="dropdown-item" href="#"> برامج اخرى </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('business') ? 'active' : '' }}" href="{{ route('site.business') }}">نماذج اعمالنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="{{ route('site.blog') }}">المدونة</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ route('site.contact') }}">تواصل معنا</a>
                </li>
                <li class="nav-item nav-login-lang">
                    <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" href="{{ route('login') }}"> تسجيل الدخول</a>
                </li>
                {{-- <li class="nav-item nav-login-lang">
                    <a class="nav-link" href="#"> en</a>
                </li> --}}
                <li class="nav-item nav-login-lang">
                    @if ( app()->getLocale() == 'en')
                    <a class="nav-link" href={{route('lang.ar') }} class="main-bttn bordered-bttn">
                        <img src="{{ asset('public/assets_site/img/arabic.png')}}" alt="arabic" width="30" height="5%">
                        AR
                    </a>
                    @else
                    <a class="nav-link" href={{route('lang.en') }} class="main-bttn bordered-bttn">
                        <img src="{{ asset('public/assets_site/img/english.png')}}" alt="arabic" width="30" height="5%">
                        En
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
<!---------------------------end main-navbar------------------------->