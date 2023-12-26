<!--start pre-footer-->
<section class="content-project">
    <div class="container">
        <div class="row mx-0 row-cols-lg-2 row-cols-md-2 row-cols-1 justify-content-between align-items-center">
            <div class="col defintion-abver">
                <h6>
                    {{ trans('site.Let start your project now!') }}
                </h6>
                <p class="pt-3 mb-0">
                    {{ trans('site.Our creative team is at your side to create a professional ERP system that helps you increase your sales and improve your business.') }}
                </p>
            </div>
            <div class="col text-start col-button-con">
                <a href="{{ route('contact.index') }}" class="p-2 px-4 button-wiet">{{ trans('site.Contact Us') }}</a>
            </div>
        </div>
        <div class="shape-tri">
            <img class="shape-left" src="{{ asset('public/assets_site/img/shap.webp') }}" alt="shape" loading="lazy">
        </div>
    </div>
</section>
<!--end pre-footer-->