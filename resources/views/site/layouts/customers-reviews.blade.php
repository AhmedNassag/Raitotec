<!--start customers-reviews-->
<?php
    $customersReviews = App\Models\CustomersReview::get();
?>

<section class="mt-5 pb-5 pt-5 component-reviews">
    <div class="text-center">
        <h2 class="title-title text-white"> اراء عملائنا </h2>
    </div>
    <div class="slider-reviews pt-5">
        <div id="carouselExampleIndicators" class="carousel slide custemer-reviews">
            <div class="carousel-inner">
                @foreach($customersReviews as $key=>$customerReview)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="slider-1 ">
                        <div class="slider-img">
                            <img src="{{ asset('public/attachments/customersReview/'.$customerReview->photo) }}" class="d-block" alt="image" loading="lazy">
                        </div>
                        <div class="slider-title">
                            <h6 class="fw-bold text-white fs-4">{{ $customerReview->user_name }}</h6>
                        </div>
                        <p class="fw-bold text-white py-3">{{ $customerReview->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ trans('site.Previous') }}</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">{{ trans('site.Next') }}</span>
            </button>
        </div>
    </div>
</section>
<!--start customers-reviews-->
