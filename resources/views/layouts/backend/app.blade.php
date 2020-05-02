<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>
    <!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('assets/backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('assets/backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <!-- start: Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/backend/img/favicon.ico')}}">
	<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <!-- end: Favicon -->
    @stack('css')
</head>
<body>
    	<!-- start: Header -->
	@include('layouts.backend.partials.header')
    <!-- start: Header -->
    
    {{-- sidebar --}}
	@include('layouts.backend.partials.sidebar')
    {{-- end sidebar --}}
      @yield('content')
     {{-- footer --}}
	@include('layouts.backend.partials.footer')
     {{-- footer end--}}

    <!-- start: JavaScript-->
		<script src="{{asset('assets/backend/js/jquery-1.9.1.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.ui.touch-punch.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/modernizr.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/bootstrap.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.cookie.js')}}"></script>
	
		<script src='{{asset('assets/backend/js/fullcalendar.min.js')}}'></script>
	
		<script src='{{asset('assets/backend/js/jquery.dataTables.min.js')}}'></script>

		<script src="{{asset('assets/backend/js/excanvas.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.flot.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.flot.pie.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.flot.stack.js')}}"></script>
	<script src="{{asset('assets/backend/js/jquery.flot.resize.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.chosen.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.uniform.min.js')}}"></script>
		
		<script src="{{asset('assets/backend/js/jquery.cleditor.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.noty.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.elfinder.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.raty.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.iphone.toggle.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.uploadify-3.1.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.gritter.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.imagesloaded.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.masonry.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.knob.modified.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/jquery.sparkline.min.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/counter.js')}}"></script>
	
		<script src="{{asset('assets/backend/js/retina.js')}}"></script>

		<script src="{{asset('assets/backend/js/custom.js')}}"></script>
		<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
		{!! Toastr::message() !!}
		<script>
			@if($errors->any())
			  @foreach($errors->all() as $error)
				 toastr.error('{{$error}}', 'error',{
					 progressBar: true,
					 closeButton: true,
				 });
				 @endforeach
			@endif
			
			</script>
    <!-- end: JavaScript-->
    @stack('js')
</body>
</html>
