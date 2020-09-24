<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        {!! SEO::generate() !!}
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/img/favicon.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
            @yield('styles')
   </head>

   <body>
    @include('layout/preload')    
    @include('layout/header')    
    <main>
        @yield('content')
    </main>
    
    @include('layout/footer')
    
    @include('layout/scrollup')

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('public/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('public/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('public/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/assets/js/slick.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
		<script src="{{asset('public/assets/js/animated.headline.js')}}"></script>
        <script src="{{asset('public/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('public/assets/js/jquery.sticky.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{asset('public/assets/js/plugins.js')}}"></script>
        <script src="{{asset('public/assets/js/main.js')}}"></script>
        @yield('scripts')
        
    </body>
</html>