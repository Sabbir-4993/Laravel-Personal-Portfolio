@extends('frontview.master')

@section('title')
Web Developer
@endsection

@section('css')
<!-- CSS Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/font-awesome.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/magnific-popup.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/simplebar.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/plugins/jquery.animatedheadline.css">

	<!-- CSS Base -->
	<link rel="stylesheet" class="back-color" href="{{ asset('frontend') }}/css/style-dark.css">
	<link rel="stylesheet" href="{{ asset('frontend') }}/css/style-demo.css">

	<!-- Settings Style -->
	<link rel="stylesheet" class="posit-nav" href="{{ asset('frontend') }}/css/settings/left-nav.css" />
	<link rel="stylesheet" class="theme-color" href="{{ asset('frontend') }}/css/settings/green-color.css" />

@endsection

@section('js')
    <!-- All Script -->
	<script src="{{ asset('frontend') }}/js/jquery.min.js"></script>
	<script src="{{ asset('frontend') }}/js/isotope.pkgd.min.js"></script>
	<script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
	<script src="{{ asset('frontend') }}/js/simplebar.js"></script>
	<script src="{{ asset('frontend') }}/js/owl.carousel.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.animatedheadline.min.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.easypiechart.js"></script>
	<script src="{{ asset('frontend') }}/js/jquery.validation.js"></script>
	<script src="{{ asset('frontend') }}/js/tilt.js"></script>
	<script src="{{ asset('frontend') }}/js/main.js"></script>
	<script src="{{ asset('frontend') }}/js/main-demo.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>

	<!-- Page Script -->
	<script src="{{ asset('frontend') }}/js/particles.min.js"></script>
	<script>
		particlesJS.load('particles-js', '{{ asset('frontend') }}/js/particles.json', function () {
			console.log('callback - particles.js config loaded');
		});

	</script>
@endsection

@section('loader')
<!-- Preloader -->
    <div id="preloader">
		<div class="loading-area">
			<div class="circle"></div>
		</div>
		<div class="left-side"></div>
		<div class="right-side"></div>
	</div>
@endsection


