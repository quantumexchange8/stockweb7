		
		<!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-touch-icon-114x114.png') }}">
		
<!-- CSS -->
    <!-- REVOSLIDER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rs-plugin/css/settings.min.css') }}" media="screen">

    <!--  BOOTSTRAP -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"> 
	
    <!--  GOOGLE FONT -->		
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet' type='text/css'>
  
    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS  -->		
		<link rel="stylesheet" href="{{ asset('assets/css/icons-fonts.css') }}" >	
	
    <!--  CSS THEME -->		
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
	
    <!-- ANIMATE -->	
		<link rel='stylesheet' href="{{ asset('assets/css/animate.min.css') }}">





    
    <!-- IE Warning CSS -->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->
    
    <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->		
	
<!-- CSS end -->

<!-- JS begin some js files in bottom of file-->
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
    <!-- Modernizr -->
    <!-- <script src="js/modernizr.js"></script> -->
<!-- JS begin -->

		<!-- jQuery  -->
		<script src="{{asset('assets/js/jquery-1.11.2.min.js')}}"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>		

		<!-- MAGNIFIC POPUP -->
		<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    
    <!-- PORTFOLIO SCRIPTS -->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    
    <!-- COUNTER -->
    <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
    
    <!-- APPEAR -->    
    <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
    
    <!-- GOOLE MAP --> 
    <script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
    <script src="js/gmap3.min.js"></script>
    
    <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]--> 
    
    <!-- FORMS VALIDATION	-->
		<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('assets/js/contact-form-validation.min.js')}}"></script>
    
    <!-- OWL CAROUSEL -->    
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    
    <!-- MAIN SCRIPT -->
		<script src="{{asset('assets/js/main.js')}}"></script>
		
		<!-- REVOSLIDER SCRIPTS  -->
			<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
			<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>   
			<script src="{{asset('assets/rs-plugin/js/jquery.themepunch.revolution-parallax.min.js')}}"></script>


      <!-- SLIDER REVOLUTION INIT  -->
			<script>

				jQuery(document).ready(function() {
                if ( (navigator.appVersion.indexOf("Win")!=-1) && ( ieDetect == false ) ) {	
                    jQuery('#rs-fullwidth').revolution(
                    {
                      dottedOverlay:"none",
                      delay:16000,
                      startwidth:1170,
                      startheight:665,
                      hideThumbs:200,
                      
                      thumbWidth:100,
                      thumbHeight:50,
                      thumbAmount:5,
                      
                      //fullScreenAlignForce: "off",
                      
                      navigationType:"none",
                      navigationArrows:"solo",
                      navigationStyle:"preview4",
                      
                      hideTimerBar:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      
                      swipe_velocity: 0.7,
                      swipe_min_touches: 1,
                      swipe_max_touches: 1,
                      drag_block_vertical: false,
                                  
                      parallax:"scroll",
                      parallaxBgFreeze:"on",
                      parallaxLevels:[45,40,35,50],
                      parallaxDisableOnMobile:"on",
                                  
                      keyboardNavigation:"off",
                      
                      navigationHAlign:"center",
                      navigationVAlign:"bottom",
                      navigationHOffset:0,
                      navigationVOffset:20,

                      soloArrowLeftHalign:"left",
                      soloArrowLeftValign:"center",
                      soloArrowLeftHOffset:20,
                      soloArrowLeftVOffset:0,

                      soloArrowRightHalign:"right",
                      soloArrowRightValign:"center",
                      soloArrowRightHOffset:20,
                      soloArrowRightVOffset:0,
                          
                      shadow:0,
                      fullWidth:"on",
                      fullScreen:"off",

                      spinner:"spinner4",
                      
                      stopLoop:"off",
                      stopAfterLoops:-1,
                      stopAtSlide:-1,

                      shuffle:"off",
                      
                      autoHeight:"off",						
                      forceFullWidth:"off",						
                                  
                      hideThumbsOnMobile:"off",
                      hideNavDelayOnMobile:1500,						
                      hideBulletsOnMobile:"off",
                      hideArrowsOnMobile:"off",
                      hideThumbsUnderResolution:0,
                      
                      hideSliderAtLimit:0,
                      hideCaptionAtLimit:0,
                      hideAllCaptionAtLilmit:0,
                      startWithSlide:0,
                      //fullScreenOffsetContainer: ""	
                    });
                } else {
                  jQuery('#rs-fullwidth').revolution(
                    {
                      dottedOverlay:"none",
                      delay:16000,
                      startwidth:1170,
                      startheight:760,
                      hideThumbs:200,
                      
                      thumbWidth:100,
                      thumbHeight:50,
                      thumbAmount:5,
                      
                      navigationType:"none",
                      navigationArrows:"solo",
                      navigationStyle:"preview4",
                      
                      hideTimerBar:"on",
                      
                      touchenabled:"on",
                      onHoverStop:"on",
                      
                      swipe_velocity: 0.7,
                      swipe_min_touches: 1,
                      swipe_max_touches: 1,
                      drag_block_vertical: false,
                                  
                      parallax:"mouse",
                      parallaxBgFreeze:"on",
                      parallaxLevels:[0],
                      parallaxDisableOnMobile:"on",
                                  
                      keyboardNavigation:"off",
                      
                      navigationHAlign:"center",
                      navigationVAlign:"bottom",
                      navigationHOffset:0,
                      navigationVOffset:20,

                      soloArrowLeftHalign:"left",
                      soloArrowLeftValign:"center",
                      soloArrowLeftHOffset:20,
                      soloArrowLeftVOffset:0,

                      soloArrowRightHalign:"right",
                      soloArrowRightValign:"center",
                      soloArrowRightHOffset:20,
                      soloArrowRightVOffset:0,
                          
                      shadow:0,
                      fullWidth:"on",
                      fullScreen:"off",

                      spinner:"spinner4",
                      
                      stopLoop:"off",
                      stopAfterLoops:-1,
                      stopAtSlide:-1,

                      shuffle:"off",
                      
                      autoHeight:"off",						
                      forceFullWidth:"off",						
                                  
                      hideThumbsOnMobile:"off",
                      hideNavDelayOnMobile:1500,						
                      hideBulletsOnMobile:"off",
                      hideArrowsOnMobile:"off",
                      hideThumbsUnderResolution:0,
                      
                      hideSliderAtLimit:0,
                      hideCaptionAtLimit:0,
                      hideAllCaptionAtLilmit:0,
                      startWithSlide:0,
	
                    });      
             }									
				});	//ready
				
			</script>
@yield('scripts')
    <!-- JS end -->	
    