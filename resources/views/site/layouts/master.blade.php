<!--start master-->
<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
	<head>
		@include('site.layouts.head')
		<script type="application/ld+json">
			{
				"@context": "https://schema.org"
				, "@type": "Organization"
				, "name": "شركة رايتو للحلول البرمجية"
				, "alternateName": "شركة رايتو للبرمجيات والأنظمة المحاسبية"
				, "url": "https://raitotec.com/"
				, "logo": "https://raitotec.com/image/logo.png"
				, "contactPoint": {
					"@type": "ContactPoint"
					, "telephone": "+966538499438"
					, "contactType": "customer service"
					, "areaServed": ["SA", "EG"]
					, "availableLanguage": ["en", "Arabic"]
				}
				, "sameAs": [
					"https://www.facebook.com/Raitotec"
					, "https://twitter.com/raitotec"
					, "https://www.instagram.com/raitotec1/"
				]
			}
		</script>
	</head>
	<body>
		@include('site.layouts.loading-page')
		@include('site.layouts.main-navbar')

		@yield('content')

		@include('site.layouts.customers-services')
		@include('site.layouts.important-customers')
		@include('site.layouts.customers-reviews')
		@include('site.layouts.pre-footer')
		@include('site.layouts.footer')
		@include('site.layouts.footer-scripts')
  	</body>
</html>
<!--end master-->