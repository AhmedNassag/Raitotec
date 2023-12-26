@extends('site.layouts.master')



@section('title')
@if (App::getLocale() == 'ar')
تواصل معنا | شركة رايتو لحلول برمجية وأنظمة برمجية
@else
Contact Us | Raito Software Solutions And Software Systems Company
@endif
@endsection



@section('meta-description')
<meta name="description" content="اتصل بفريق رايتو للحصول على الدعم المتعلق بحلول برمجية وأنظمة برمجية، نحن نقدم خدمة العملاء الممتازة والاستشارات المخصصة لمساعدتك في تحقيق أهدافك التقنية.">
@endsection



@section('meta-keywords')
<meta name="keywords" content="تواصل معنا واستفد من حلول برمجية وأنظمة برمجية مخصصة">
@endsection



@section('content')
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if (App::getLocale() == 'ar')
            تواصل معنا
            @else
            Contact Us
            @endif
        </h1>
    </div>
</section>
<section class="content-content mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h6 class="title-title">
                    @if (App::getLocale() == 'ar')
                    جاهزون لدعم عملك على مدار 24 ساعة
                    @else
                    We are ready to support your business
                    @endif
                </h6>
                <p class="pt-3 p-decerption">
                    @if (App::getLocale() == 'ar')
                    نمتلك قسم كامل من خدمة العملاء يساعدك طوال اليوم، إذا أردت أن تطرح سؤالًا بخصوص الحلول البرمجية أو الأنظمة المحاسبية، لا تتردد في التواصل معنا.
                    @else
                    We have a dedicated customer service department that is available to assist you throughout the day. If you have any questions regarding software solutions or accounting systems, feel free to reach out to us.
                    @endif
                </p>
            </div>
        </div>
        <div class="row mx-0 row-cols-lg-2 row-cols-1 pt-5">
            <div class="col">
                <h6 class="title-title">
                    @if (App::getLocale() == 'ar')
                    معلومات الإتصال
                    @else
                    contact information
                    @endif
                </h6>
                <div class="component-contents pt-5">
                    <div class="contact-content mb-3">
                        <a class="content-box" href="https://maps.app.goo.gl/YTLGN9WXiyjrZhZK9">
                            <i class="fa fa-location-dot"></i>
                            {{ @$companyInformation->address }}
                        </a>
                    </div>
                    <div class="contact-content mb-3">
                        <a href="tel:{{ @$companyInformation->phone }}" class="content-box">
                            <i class="fa fa-phone"></i>
                            <span>{{ @$companyInformation->phone }}</span>
                        </a>
                    </div>
                    <div class="contact-content mb-3">
                        <a href="mailto:{{ @$companyInformation->email }}" class="content-box">
                            <i class="fas fa-envelope"></i>
                            {{ @$companyInformation->email }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- validationNotify -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- success Notify -->
                @if (session()->has('success'))
                <div class="alert alert-success">
                    @if (App::getLocale() == 'ar')
                    تمت العملية بنجاح
                    @else
                    Data sent successfully
                    @endif
                </div>
                @endif
                <!-- error Notify -->
                @if (session()->has('error'))
                <div class="alert alert-danger">
                    @if (App::getLocale() == 'ar')
                    لقد حدث خطأ.. برجاء المحاولة مرة أخرى!
                    @else
                    There's an error occurs.. please try again!
                    @endif
                </div>
                @endif
                <form class="form-content" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">{{ trans('site.Name') }}<span>*</span></label>
                        <input type="text" class="form-control" id="exampleInput" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{ trans('site.Email') }}<span>*</span></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">{{ trans('site.Service Type') }}<span>*</span></label>
                        <select class="form-select" aria-label="Default select example" name="service_id" required>
                            @foreach($services as $service)
                            <option value="{{ @$service->id }}">{{ @$service->first_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">{{ trans('site.Phone') }}<span>*</span></label>
                        <input type="phone" class="form-control" id="exampleInput" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">{{ trans('site.Description') }}<span>*</span></label>
                        <textarea class="form-control" placeholder="{{ trans('site.Leave a comment here') }}" id="floatingTextarea2" rows="6" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primar  px-5 pt-3 pb-3">{{ trans('site.Send Now') }}</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
