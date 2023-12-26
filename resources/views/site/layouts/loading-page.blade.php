<!--start loading-page-->
<div class="component-stert">
	<div class="component--intro status--loaded">
		@if (app()->getLocale() == 'ar')
            <img src="{{ asset('public/assets_site/img/logoar.webp') }}" alt="logo">
		@else
			<img src="{{ asset('public/assets_site/img/LOGO.png') }}" alt="logo">
		@endif
	</div>
</div>
<!--end loading-page-->