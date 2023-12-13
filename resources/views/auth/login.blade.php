<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="أنظمة رايتو المحاسبية - Raito ERP systems">
    <meta name="author" content="hadeer hussein">
    <meta property="og:title" content="حلول برمجية مبتكرة وأنظمة برمجية متخصصة - شركة رايتو">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="https://website.raitotec.com">
    <meta property="og:image" content="{{ asset('public/assets_site/img/LOGO.png') }}">
    <link href="assets/img/LOGO.png" rel="shortcut icon" />
    <title>أنظمة رايتو المحاسبية - Raito ERP systems</title>
    <link href="{{ asset('public/assets_site/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets_site/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets_site/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css') }}" />
    <link href="{{ asset('public/assets_site/font/font-awesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets_site/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets_site/css/style-en.css') }}" rel="stylesheet">
</head>
<body>
    <!-------------------------start-loading-pag------------------------->
    <div class="component-stert">
        <div class="component--intro status--loaded">
            <img src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo" loading="lazy">
        </div>
    </div>
    <!---------------------------end-loading-pag------------------------->

    <section class="content-content mt-5 pb-5">
        <div class="container">

            <div class="row mx-0 row-cols-lg-2 row-cols-1 row-login">

                <div class="col pt-5">
                    <div class="mx-auto text-center">
                        <a href="{{ route('home.index') }}">
                            <img loading="lazy" class="logo-login" src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo">
                        </a>
                        <h2 class="pt-3 title-login">مرحبا بك مجددا</h2>
                        <p class="pt-3 p-login">مرحبًا بعودتك! الرجاء إدخال التفاصيل الخاصة بك</p>
                    </div>

                    <form method="POST" action="{{ route('login') }}" class="form-content col-md-8 mx-auto pt-3">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">{{ trans('main.Email Or Mobile') }}<span class="text-danger">*</span></label>
                            {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
                            <input id="identify" type="text" class="form-control floating @error('identify') is-invalid @enderror" name="identify" value="{{ old('identify') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInput" class="form-label">{{ trans('main.Password') }}<span class="text-danger">*</span></label>
                            {{-- <input type="password" class="form-control" id="exampleInput"> --}}
                            <input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primar  px-5 pt-2 pb-2">{{ trans('main.Login') }}</button>

                        </div>
                    </form>
                    <p class="p-login text-center pt-3">ليس لديك حساب <a href="{{ route('register') }}" class="mx-2 link-login">سجل هنا</a></p>
                </div>
                <div class="col px-0">
                    <img loading="lazy" class="w-100 img-login" src="{{ asset('public/assets_site/img/login.png') }}" alt="login">
                </div>
            </div>
        </div>
    </section>
    <!--advertisements-->
    <script src="{{ asset('public/assets_site/js/jquery.js') }}"></script>
    <script src="{{ asset('public/assets_site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/assets_site/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('public/assets_site/js/loade.js') }}"></script>
</body>
</html>
