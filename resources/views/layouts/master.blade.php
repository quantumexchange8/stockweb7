<!DOCTYPE html>

<html lang="en">
 	<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="noindex, nofollow">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <title>
            @yield('title')
        </title>

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}">
		<link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">


		<!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/rs-plugin/css/settings.min.css')}}" media="screen">


		<!--  BOOTSTRAP -->
			<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> 
		
		<!--  GOOGLE FONT -->		
			<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
	
		<!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->		
			<link rel="stylesheet" href="{{ asset('assets/css/icons-fonts.css') }}" >	
		
		<!--  CSS THEME -->		
			<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
            <link rel="stylesheet" href="{{ asset('assets/css/text-rotator.css')}}" >
		<!-- ANIMATE -->	
		<link rel='stylesheet' href="{{ asset('assets/css/animate.min.css') }}">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	</head>
	<body>
	

  
		<div id="wrap" class="boxed ">
			<div class="grey-bg"> 
                <!--Navigation bar-->
                @include('layouts.partials.header')
                 <!--Content-->
                @yield('content')
                 <!--Footer-->
                @include('layouts.partials.footer')
			</div>
		</div>
		<!--JS Scripts-->
        @include('layouts.partials.scripts')
	</body>
</html>		