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
    <meta name="keywords" content="مع رايتو أحصل على حلول برمجية وأنظمة برمجية مبتكرة ">
@endsection



@section('content')
    <section class="component-hadeer">
        <div class="container">
            <h1 class="page-title">
                {{ trans('site.Contact Us And Benefit From Customized Software Solutions And Software Systems') }}
            </h1>
        </div>
    </section>
    <section class="content-content mt-5 pb-5">
        <div class="container">
            <div class="row mx-0 justify-content-center">
                <div class="col-md-8 text-center">
                    <h6 class="title-title"> جاهزون لدعم عملك على مدار 24 ساعة </h6>
                    <p class="pt-3 p-decerption">
                        نمتلك قسم كامل من خدمة العملاء يساعدك طوال اليوم، إذا أردت أن تطرح سؤالًا بخصوص الحلول البرمجية أو الأنظمة المحاسبية، لا تتردد في التواصل معنا.
                    </p>
                </div>
            </div>
            <div class="row mx-0 row-cols-lg-2 row-cols-1 pt-5">
                <div class="col">
                    <h6 class="title-title">معلومات الاتصال</h6>
                    <div class="component-contents pt-5">
                        <div class="contact-content mb-3">
                            <a class="content-box" href="https://maps.app.goo.gl/YTLGN9WXiyjrZhZK9">
                                <i class="fa fa-location-dot"></i>
                                {{ @$companyInformaion->address }}
                            </a>
                        </div>
                        <div class="contact-content mb-3">
                            <a href="tel:{{ @$companyInformaion->phone }}" class="content-box">
                                <i class="fa fa-phone"></i>
                                <span>{{ @$companyInformaion->phone }}</span>
                            </a>
                        </div>
                        <div class="contact-content mb-3">
                            <a href="mailto:{{ @$companyInformaion->email }}" class="content-box">
                                <i class="fas fa-envelope"></i>
                                {{ @$companyInformaion->email }}
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
                        تمت العملية بنجاح
                    </div>
                    @endif
                    <!-- error Notify -->
                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        لقد حدث خطأ.. برجاء المحاولة مرة أخرى!
                    </div>
                    @endif
                    <!-- canNotDeleted Notify -->
                    @if (session()->has('canNotDeleted'))
                    <script id="canNotDeleted">
                        window.onload = function() {
                            notif({
                                msg: "لا يمكن الحذف لوجود بيانات أخرى مرتبطة بها..!",
                                type: "error"
                            })
                        }
                    </script>
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
                                <option value="{{ $service->id }}">{{ $service->first_title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput" class="form-label">{{ trans('site.Phone') }}<span>*</span></label>
                            <input type="phone" class="form-control" id="exampleInput" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput" class="form-label"><span>*</span></label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" rows="6" name="description" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primar  px-5 pt-3 pb-3">{{ trans('site.Send Now') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
