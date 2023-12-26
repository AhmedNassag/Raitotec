<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Title -->
<title> Coding System </title>

<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('public/assets_admin/img/favicon.png')}}">

<!-- Bootstrap CSS -->
@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="{{asset('public/assets_admin/css/bootstrap_rtl.min.css')}}">
@else
<link rel="stylesheet" href="{{asset('public/assets_admin/css/bootstrap.min.css')}}">
@endif

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{asset('public/assets_admin/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/assets_admin/plugins/fontawesome/css/all.min.css')}}">

<!-- Feather CSS -->
<link rel="stylesheet" href="{{asset('public/assets_admin/css/feather.css')}}">

<!-- Select2 CSS -->
<link rel="stylesheet" href="{{asset('public/assets_admin/plugins/select2/css/select2.min.css')}}">

<!-- Datatables CSS -->
<link rel="stylesheet" href="{{asset('public/assets_admin/plugins/datatables/datatables.min.css')}}">

<!-- Datepicker CSS -->
<link rel="stylesheet" href="{{asset('public/assets_admin/css/bootstrap-datetimepicker.min.css')}}">

<!-- Ck Editor -->
<link rel="stylesheet" href="{{asset('public/assets_admin/css/ckeditor.css')}}">

<!--Internal Notify -->
<link href="{{ URL::asset('public/assets_admin/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

<!--- Internal Sweet-Alert css-->
<link href="{{URL::asset('public/assets_admin/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Main CSS -->
@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="{{asset('public/assets_admin/css/style_rtl.css')}}">
@else
<link rel="stylesheet" href="{{asset('public/assets_admin/css/style.css')}}">
@endif



<!---Internal Fileupload css-->
<link href="{{asset('public/assets_admin/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css" />
<!---Internal Fancy uploader css-->
<link href="{{asset('public/assets_admin/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />

@yield('css')
