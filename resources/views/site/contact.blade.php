@extends('site.layouts.master')



@section('title')

@if(app()->getLocale() == 'ar')
تواصل معنا | شركة رايتو لحلول برمجية وأنظمة برمجية
@endif

@endsection



@section('meta-description')

@if(app()->getLocale() == 'ar')
<meta name="description" content="اتصل بفريق رايتو للحصول على الدعم المتعلق بحلول برمجية وأنظمة برمجية، نحن نقدم خدمة العملاء الممتازة والاستشارات المخصصة لمساعدتك في تحقيق أهدافك التقنية.">
@endif

@endsection



@section('content')

<!---->
<section class="component-hadeer">
    <div class="container">
        <h1 class="page-title">
            @if(app()->getLocale() == 'ar')
            تواصل معنا واستفد من حلول برمجية وأنظمة برمجية مخصصة
            @endif
        </h1>
    </div>
</section>
<section class="content-content mt-5 pb-5">
    <div class="container">
        <div class="row mx-0 justify-content-center">
            <div class="col-md-8 text-center">
                <h6 class="title-title"> جاهزون لدعم عملك على مدار 24 ساعة </h6>
                <p class="pt-3 p-decerption">
                    نمتلك قسم كامل من خدمة العملاء يساعدك طوال اليوم، إذا أردت أن تطرح سؤالًا بخصوص الحلول البرمجية أو الأنظمة المحاسبية، لا تتردد في التواصل معنا. </p>
            </div>
        </div>

        <div class="row mx-0 row-cols-lg-2 row-cols-1 pt-5">
            <div class="col">
                <h6 class="title-title">معلومات الاتصال</h6>
                <div class="component-contents pt-5">
                    <div class="contact-content mb-3">
                        <a class="content-box" href="https://maps.app.goo.gl/YTLGN9WXiyjrZhZK9">

                            <i class="fa fa-location-dot"></i>
                            الرياض ، المملكة العربية السعودية ، 4000
                            طريق دائري 12993 ، 27
                        </a>
                    </div>
                    <div class="contact-content mb-3">
                        <a href="tel:+966538499438" class="content-box">
                            <i class="fa fa-phone"></i>
                            <span>966538499438+</span>
                        </a>
                    </div>
                    <div class="contact-content mb-3">
                        <a href="mailto:info@raitotec.com" class="content-box">
                            <i class="fas fa-envelope"></i>
                            info@raitotec.com
                        </a>
                    </div>
                </div>

            </div>
            <div class="col">
                <form class="form-content">
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label">الأسم بالكامل<span>*</span></label>
                        <input type="text" class="form-control" id="exampleInput">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">البريد الالكتروني <span>*</span></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> نوع المشروع <span>*</span></label>

                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> الجوال<span>*</span></label>
                        <input type="phone" class="form-control" id="exampleInput">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInput" class="form-label"> وصف المشروع<span>*</span></label>
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" rows="6"></textarea>

                    </div>
                    <button type="submit" class="btn btn-primar  px-5 pt-3 pb-3">سجل الان</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
