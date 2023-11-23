<!---------------------------start fixed-div------------------------->
<div class="position-fixed component-whatsapp">
    <button class="btn btn-my" onclick="myFunction()" id="myDIV">
        <img src="{{ asset('public/assets_site/img/customer-service.png') }}" alt="customer-service">
    </button>
    <div class="dropdown-content dropdown-menu" id="myDropdown">
        <div class="mb-2">
            <a href="https://wa.me/+966538499438" target="_blank">
                <img src="{{ asset('public/assets_site/img/whatsapp.png') }}" alt="whatsapp">
            </a>
        </div>
        <div class="mb-2 phone-component">
            <a href="tel:+966538499438">
                <i class="fa-solid fa-phone"></i>
            </a>
        </div>
        <div class="compoent-chat-hadder mb-2">
            <div class="btn-group dropend">
                <button type="button" class="btn btn-btn d-flex mx-0 justify-content-between dropdown-togglen" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="span-i">
                        <i class="fa-brands fa-rocketchat"></i>
                    </span>
                </button>
                <div class=" dropdown-menu ">
                    <p class="px-3 text-white pb-3 text-center fs-6">Please fill out the form below and we will get back to you as soon as possible.</p>
                    <form class="row  g-2 mx-0 pt-4 px-2 needs-validation form-index-form pb-3" novalidate="">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="الاسم" id="validationCustom01" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="البريد الالكتروني" id="validationCustom02" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a email.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder=" رقم الهاتف" id="validationCustom03" required="">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Please choose a email.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <textarea rows="3" class="form-control" placeholder=" تفاصيل الطلب" required=""></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-submit" type="submit">
                                <img src="{{ asset('public/assets_site/img/Path.png') }}" alt="path">
                                ارسال
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!---------------------------end fixed-div------------------------->