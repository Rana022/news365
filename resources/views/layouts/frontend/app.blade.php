<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')-{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <!-- Scrollbar css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/jquery.mCustomScrollbar.css')}}" />
    <!-- Owl Carousel css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/owl-carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/owl-carousel/owl.theme.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/owl-carousel/owl.transitions.css')}}" />
    <!-- youtube css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/RYPP.css')}}" />
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/jquery-ui.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/animate.min.css')}}">
    <!-- fonts css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/Pe-icon-7-stroke.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/frontend/css/flaticon.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @stack('css')
</head>
<body>
    	<!-- start: Header -->
	@include('layouts.frontend.partials.header')
    <!-- start: Header -->
    
      @yield('content')
     {{-- footer --}}
	@include('layouts.frontend.partials.footer')
     {{-- footer end--}}

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script data-cfasync="false" src="https://news365htmllatest.bdtask.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/metisMenu.min.js')}}"></script>
    <!-- Scrollbar js -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- animate js -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
    <!-- Newstricker js -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery.newsTicker.js')}}"></script>z
    <!--  classify JavaScript -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/classie.js')}}"></script>
    <!-- owl carousel js -->
    <script type="text/javascript" src="{{asset('assets/frontend/owl-carousel/owl.carousel.js')}}"></script>
    <!-- youtube js -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/RYPP.js')}}"></script>
    <!-- jquery ui js -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/jquery-ui.js')}}"></script>
    <!-- form -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/form-classie.js')}}"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/custom.js')}}"></script>
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
    @stack('js')
</body>
</html>
