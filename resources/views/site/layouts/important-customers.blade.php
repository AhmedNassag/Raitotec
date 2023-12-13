<!--important customer-->
<?php
    $importantCustomers = App\Models\ImportantCustomer::get();
?>

<section class="component-custemer mt-5 pb-5">
    <div class="text-center">
        <h2 class="title-title">{{ trans('site.Important Customers') }}</h2>
    </div>
    <div class="owl-carousel component-team-new pt-5">
        @foreach ($importantCustomers as $importantCustomer)
        <div class="ms-3 me-5">
            <img src="{{ asset('public/attachments/importantCustomer/'.$importantCustomer->photo) }}" alt="customer" loading="lazy">
        </div>
        @endforeach
    </div>
</section>
<!--custumer-img-->