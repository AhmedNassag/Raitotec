<!--start footer-->
<?php
    $companyInformation = App\Models\CompanyInformation::first();
?>

<footer class="component-footer  pt-55">
    <div class="container">
        <div class="row mx-0 pb-55 row-footer">
            <div class="col-lg-4 ">
                <div class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="30">
                    <div class="logo-footer">
                        <a href="{{ route('home.index') }}">
                            @if (app()->getLocale() == 'ar')
                            <img class="img-footer-logo" src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo" loading="lazy">
                            @else
                            <img class="img-footer-logo" src="{{ asset('public/assets_site/img/LOGO.png') }}" alt="logo" loading="lazy">
                            @endif
                        </a>
                    </div>
                    <p class="p-footer pt-4">{{ @$companyInformation->brief }}</p>
                    <div class="a-google">
                        <a href="{{ @$companyInformation->appstore }}">
                            <img src="{{ asset('public/assets_site/img/app_store.svg') }}" alt="app" loading="lazy">
                        </a>
                        <a href="{{ @$companyInformation->googleplay }}">
                            <img src="{{ asset('public/assets_site/img/google_play.svg') }}" alt="google" loading="lazy">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="40">
                    {{-- <h4 class="title-footer">{{ trans('site.Quick addresses') }}</h4> --}}
                    <ul class="footer-nav pt-4">
                        <li><a href="{{ route('home.index') }}">{{ trans('site.Home') }}</a></li>
                        <li><a href="{{ route('aboutUs.index') }}">{{ trans('site.About Us') }}</a></li>
                        <li><a href="{{ route('service.index') }}">{{ trans('site.Services') }} </a></li>
                        <li><a href="{{ route('blog.index') }}">{{ trans('site.Blog') }}</a></li>
                        <li><a href="{{ route('package.index') }}">{{ trans('site.Prices') }}</a></li>
                        <li><a href="{{ route('contact.index') }}">{{ trans('site.Contact Us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                    {{-- <h4 class="title-footer">{{ trans('site.Contact Us') }}</h4> --}}
                    <div class="pt-4">
                        <div class="contact-content mb-2">
                            <a href="https://maps.app.goo.gl/YTLGN9WXiyjrZhZK9" class="content-box">
                                <i class="fa fa-location-dot"></i>
                                {{ @$companyInformation->address }}
                            </a>
                        </div>
                        <div class="contact-content mb-2">
                            <a href="tel:{{ @$companyInformation->phone }}" class="content-box">
                                <i class="fa fa-phone"></i>
                                <span>{{ @$companyInformation->phone }}</span>
                            </a>
                        </div>
                        <div class="contact-content mb-2">
                            <a href="mailto:{{ @$companyInformation->email }}" class="content-box">
                                <i class="fas fa-envelope"></i>
                                {{ @$companyInformation->email }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="60">
                    {{-- <h4 class="title-footer">{{ trans('site.Social Media') }}</h4> --}}
                    <ul class="footer-nav pt-4">
                        <li><a href="{{ @$companyInformation->twitter }}" target="_blank"><i class="fab fa-twitter"></i>{{ trans('site.Twitter') }}</a></li>
                        <li><a href="{{ @$companyInformation->facebook }}" target="_blank"> <i class="fab fa-facebook-f"></i>{{ trans('site.Facebook') }}</a></li>
                        <li><a href="{{ @$companyInformation->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i>{{ trans('site.Youtube') }}</a></li>
                        <li><a href="{{ @$companyInformation->instagram }}" target="_blank"><i class="fab fa-instagram"></i>{{ trans('site.Intagram') }}</a></li>
                        <li><a href="{{ @$companyInformation->linkedin }}" target="_blank"> <i class="fab fa-linkedin-in"></i>{{ trans('site.Linkedin') }}</a></li>
                        <li><a href="https://wa.me/{{ @$companyInformation->whatsapp }}?text=I'm%20interested%20in%20your%20website" target="_blank"><i class="fab fa-whatsapp"></i>{{ trans('site.Whatsapp') }}</a></li>
                        <li><a href="{{ @$companyInformation->snapchat }}" target="_blank"> <i class="fa-brands fa-snapchat"></i>{{ trans('site.Snapchat') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="text text-center">
                <p class="mb-0">{{ trans('site.©Copyright by Raito 2023 All rights reserved') }} </p>
            </div>
        </div>
        <div class="shape-footer">
            <img class="shape-right" src="{{ asset('public/assets_site/img/shap.webp') }}" alt="shape" loading="lazy">
        </div>
    </div>
</footer>
<!--end footer-->