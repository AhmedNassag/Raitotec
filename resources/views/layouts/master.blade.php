<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
	<head>
		@include('layouts.head')
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
					@auth
						@include('layouts.main-header')
						@include('layouts.main-sidebar')
					@endauth

					<!-- Page Wrapper -->
					<div class="page-wrapper">
						<div class="content container-fluid">
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
							<script id="successNotify">
								window.onload = function() {
									notif({
										msg: "تمت العملية بنجاح",
										type: "success"
									})
								}
							</script>
							@endif
							<!-- error Notify -->
							@if (session()->has('error'))
							<script id="errorNotify">
								window.onload = function() {
									notif({
										msg: "لقد حدث خطأ.. برجاء المحاولة مرة أخرى!",
										type: "error"
									})
								}
							</script>
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
							
							@yield('content')
			
						</div>
					</div>			
				</div>
				<!-- /Page Wrapper -->
			</div>
		</div>
		<!-- /Main Wrapper -->

		@include('layouts.footer')
		@include('layouts.footer-scripts')
  	</body>
</html>