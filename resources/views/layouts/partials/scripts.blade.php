		<!-- jQuery  -->
		<script src="{{asset('assets/js/jquery-1.11.2.min.js')}}"></script>

		<!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>		

            <!-- MAGNIFIC POPUP -->
        <script src='{{asset('assets/js/jquery.magnific-popup.min.js')}}''></script>
        
        <!-- PORTFOLIO SCRIPTS -->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
        
        <!-- COUNTER -->
        <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
        
        <!-- APPEAR -->    
        <script src="{{asset('assets/js/jquery.appear.js')}}"></script>
        
        <!-- OWL CAROUSEL -->    
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

        <!-- TEXT ROTATOR -->    
        <script src="{{asset('assets/js/text-rotator.js')}}"></script>
        
        <!-- MAIN SCRIPT -->
        <script src="{{asset('assets/js/main.js')}}"></script>
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
                    } 
                    else {
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