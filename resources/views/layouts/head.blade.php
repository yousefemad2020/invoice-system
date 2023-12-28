<!-- Title -->
<title> @yield('title') </title>
<!-- Favicon -->
<link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/x-icon"/>
<!-- Icons css -->
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
<!--  Sidebar css -->
<link href="{{asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->
@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="{{asset('assets/css-rtl/sidemenu.css')}}">
@else
<link rel="stylesheet" href="{{asset('assets/css/sidemenu.css')}}">
@endif




@yield('css')
<!--- Style css -->

@if (App::getLocale() == 'ar')
<link href="{{asset('assets/css-rtl/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
<link href="{{asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet">
@else
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style-dark.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet">
@endif



<!--- Dark-mode css -->
<!---Skinmodes css-->
