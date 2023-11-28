<!---------------------------start master------------------------->
<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
	<head>
		@include('site.layouts.head')
	</head>
	<body>
		@include('site.layouts.loading-page')
		@include('site.layouts.main-navbar')

		@yield('content')

		@include('site.layouts.customers-services')
		@include('site.layouts.customers-reviews')
		@include('site.layouts.pre-footer')
		@include('site.layouts.footer')
		@include('site.layouts.footer-scripts')
  	</body>
</html>
<!---------------------------end master------------------------->