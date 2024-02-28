@extends('layouts.main')
@section('title', 'Home | ' . config('app.full_company_name'))


@section('content')

      <div class="relative">
        <div class="rs-fullscr-container">
          
          <div id="rs-fullwidth" class="tp-banner dark-bg" >
            <ul>	
              <!-- SLIDE 1 -->
              <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="{{asset('assets/images/revo-slider/terka-thumb.jpg')}}"  data-saveperformance="on"  data-title="HASWELL">
                <!-- MAIN IMAGE -->
                
                <img src="images/revo-slider/dummy.png"  alt="slidebg1" data-lazyload="{{asset('assets/images/revo-slider/city-grey.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                
                <!-- LAYERS -->
                
                <!--PARALLAX & OPACITY container -->
                <div class="rs-parallaxlevel-4 opacity-scroll2">
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption font-white light-69-wide sfb tp-resizeme"
                    data-x="center" 
                    data-hoffset="0" 
                    data-y="center" 
                    data-voffset="-50" 
                    data-speed="500"
                    data-start="850"
                    data-easing="Power1.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">WE ARE 
                  </div>
                  
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption font-white light-73-wide tp-left sfb tp-resizeme hide-0-736 mt-30 mb-20 uppercase"
                    data-x="center" 
                    data-hoffset="0" 
                    data-y="center" 
                    data-voffset="25" 
                    data-speed="900"
                    data-start="1500"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><span class="bold">{{config('app.full_company_name')}}</span>
                  </div>
                  
                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption center-0-478 sfb"
                    data-x="center" 
                    data-hoffset="0" 
                    data-y="center" 
                    data-voffset="115" 
                    data-speed="900"
                    data-start="1350"
                    data-easing="Power3.easeInOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.1"
                    data-endelementdelay="0.1"
                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a class="button medium thin hover-dark tp-button white" href="https://1.envato.market/1rOKNa">GET STARTED</a><a class="button medium thin hover-dark tp-button white ml-20" href="https://1.envato.market/GVZ26">CONTACT US</a>
                  </div>
                  
                </div>
              </li>

        
            </ul>
        
          </div>
          
        </div>	
        
      </div>

      <div class="page-section p-110-cont">
        <div class="container">
          <div class="row">
            <div class="col-md-12 pb-40">
                
              <div class="fes1-main-title-cont wow fadeInDown">
                <div class="title-fs-60">
                  <span class="bold"> INTRO</span>
                </div>
                
                <div class="line-3-100"></div>
              </div>
         
          </div>
          </div>
   
          <div class="row">
            <!-- TESTIMONIALS -->
            <div class="col-md-12 pb-40">
              <p class="title-fs-20">
                Guolian Securities Co. Ltd. is a prominent private equity enterprise that is headquartered in Mainland China and operates out of Hong Kong.
              </p>
              <p class="title-fs-20">
                Through the provision of strategic investments and financial knowledge, we are able to unlock the full potential of a wide range of firms operating in a variety of industries.
              </p>
              <p class="title-fs-20">
                We are committed to providing our clients with long-term value and generating growth, and we have the client-centric strategy and a great track record to back up our commitment to these goals.
              </p>
            </div>
           
            </div>
         
        </div>
      </div>

        {{--
        <!-- REVO SLIDER FULLSCREEN 1 -->
				<div class="relative">
					<div class="rs-fullscr-container">
						
						<div id="rs-fullscr" class="tp-banner" >
							<ul>	
								<!-- SLIDE 1 -->
								<li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="{{ asset('assets/images/revo-slider/rs-fullscr-thumb1.jpg') }}"  data-saveperformance="on"  data-title="BEGIN">
									<!-- MAIN IMAGE -->
									 
									<img src="{{ asset('assets/images/revo-slider/dummy.png') }}"  alt="slidebg1" data-lazyload="{{ asset('assets/images/revo-slider/slide_1_1.jpg') }}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								
									
									<!-- LAYERS -->

									<!-- LAYER NR. 0 BG CAPTIONS -->
									<div class="tp-caption rs-parallaxlevel-4 zoomout"
										data-x="left"
										data-y="center" 
										
										data-speed="1300"
										data-start="200"
										
										data-easing="Power3.easeInOut"
										style="z-index: 0;">
										<div class="slider-bg-white-cap"></div>
									</div>
									
									<!--PARALLAX & OPACITY container -->
									<div class="rs-parallaxlevel-4 opacity-scroll2">
										<!-- LAYER NR. 1 -->
										<div class="tp-caption dark-light-100 tp-left sfb tp-resizeme"
											data-x="640"
											data-y="205" 
											data-speed="500"
											data-start="850"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Begin
										</div>
										
										<!-- LAYER NR. 2 -->
										<div class="tp-caption dark-black-100 tp-left sfb tp-resizeme"
											data-x="650"
											data-y="295" 
											data-speed="500"
											data-start="1050"
											data-easing="Power1.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;">Anywhere
										</div>
										
										<!-- LAYER NR. 3 LINE -->
										 <div class="tp-caption slider-1-cap-line tp-left hide-0-736 sfb tp-resizeme"
											data-x="650"
											data-y="420" 
											data-speed="1000"
											data-start="1250"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
											<div class="cap-line"></div>
										</div> 			
										
										<!-- LAYER NR. 4 -->
										<div class="tp-caption dark-light-32 fs16-when-0-736 tp-left sfb tp-resizeme"
											data-x="650"
											data-y="450" 
											data-speed="900"
											data-start="1500"
											data-easing="Power3.easeInOut"
											data-splitin="none"
											data-splitout="none"
											data-elementdelay="0.1"
											data-endelementdelay="0.1"
											style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">Your passion will guide you
										</div>
									</div>



								</li>
							</ul>
					
						</div>
						
					</div>	
					
					<!-- SCROLL ICON -->
					<div class="local-scroll-cont">
						<a href="#about" class="scroll-down smooth-scroll">
              <div class="icon icon-arrows-down"></div>
            </a>  
					</div>
					
				</div>
    
				<!-- FEATURES 1 -->
				<div id="about" class="page-section">
					<div class="container fes1-cont">
						<div class="row">
            
							<div class="col-md-4 fes1-img-cont wow fadeInUp mb-20">
								<img src="images/phone-with-arrow.png" alt="img" >
							</div>
              
							<div class="col-md-8">
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="fes1-main-title-cont wow fadeInDown">
                      <div class="title-fs-60">
                        WE ARE<br>
                        <span class="bold">CREATIVE</span>
                      </div>
                      <div class="line-3-100"></div>
                    </div>
                  </div>
								</div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn" >
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-mixer2"></div>
                      </div>
                      <h3>FULLY RESPONSIVE</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-lightbulb"></div>
                      </div>
                      <h3>RETINA READY</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn" data-wow-delay="400ms">
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-helm"></div>
                      </div>
                      <h3>UNIQUE DESIGN</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                      
                  <div class="col-md-6 col-sm-6">
                    <div class="fes1-box wow fadeIn"  data-wow-delay="600ms">
                      <div class="fes1-box-icon">
                        <div class="icon icon-basic-settings"></div>
                      </div>
                      <h3>EASY TO CUSTOMIZE</h3>
                      <p>Sed ut perspiciatis unde omnis iste nat eror acus  antium que</p>
                    </div>
                  </div>
                  
                </div>                    
                    
							</div>
						
            </div>
					</div>
				</div>
  	--}}

        <!-- OUR MISSION -->
        <div id="about" class="page-section">
          <div class="container fes1-cont">
            <div class="row">
              
              <div class="col-md-8">
              
                <div class="row">
                  <div class="col-md-12">
                    <div class="fes1-main-title-cont wow fadeInDown">
                      <div class="title-fs-60">
                        <span class="bold"> OUR MISSION</span>
                      </div>
                      <div class="title-fs-25">
                        is to help you achieve your goals. 
                      </div>
                      <div class="line-3-100"></div>
                    </div>
                  </div>
                </div>
                    
                <div class="row">
                    
                  <div class="col-md-10 col-sm-12">
                    <div class="fes1-box wow fadeIn" >
                       <p class="title-fs-18">Guolian is aware of the significance of comprehending the specific circumstances, requirements, outcomes, and objectives of each individual client. Through the application of specified financial objectives, comprehensive due diligence, and cutting-edge industry research, we actively assist our customers in growing their assets, protecting them, and managing them.</p>
                    </div>
                  </div>
                      
              
                </div>
              
              </div>
              <div class="col-md-4">
                <img src="{{ asset('assets/images/phone-with-arrow.png')}}" alt="img" class="wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1s" >
              </div>
            </div>
          </div>
        </div>

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">			

        <!-- OUR SERVICES-->
        <div class="page-section clearfix">
          <div class="fes7-img-cont col-md-5">
            <div class="fes7-img" style="background-image: url('{{ asset('assets/images/fes7.jpg') }}');"></div>
          </div>
          
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 col-md-offset-6 fes7-text-cont p-80-cont">
          
                  <div class="mb-50">
                    <h2 class="section-title">OUR <span class="bold">SERVICES</span></h2>
                  </div>
              
                <p class="mb-60 title-fs-18">
                  In order to meet the specific needs of each of our customers, {{config('app.short_company_name')}} is pleased to offer a wide range of specialised services.
                </p>
              
                <div class="row">
                    
                  <div class="col-md-12 col-sm-12">
                    <div class="fes7-box wow fadeIn" >
                      <div class="fes7-box-icon">
                        <div class="icon icon-basic-lock-open"></div>
                      </div>
                      <h3>Financial Security</h3>
                      <p>Would you like to have a future in which you and your family are financially secure for the rest of your lives, but you are unsure how to get started? You may get a free consultation with one of our financial experts by getting in touch with us right away by clicking on the link that is provided below.
                      </p>
                    </div>
                  </div>
                </div>
                  <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-ecommerce-graph-increase"></div>
                      </div>
                      <h3>Portfolio Income</h3>
                      <p>The first and most critical step in putting your money to work for you, even while you are sleeping, is to ensure that you have portfolio income. This is in contrast to earned income, which requires you to work for it. Contact us right away to talk with one of our senior portfolio managers and obtain additional information regarding this matter.</p>
                    </div>
                  </div>
                      
                </div>
             
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes7-box-icon">
                        <div class="icon icon-ecommerce-bag"></div>
                      </div>
                      <h3>Passive Income</h3>
                      <p>Passive income is an essential requirement for anyone who is hoping to advance in life, regardless of whether they are attempting to reach a certain level of wealth or are simply searching for a side hustle. Find out more about this by getting in touch with us right away and requesting to speak with one of our many financial specialists. You can count on us to be more than delighted to guide you in the proper direction.</p>
                    </div>
                  </div>
                      
                </div>
              </div>
            </div><!--end of row-->
          </div>
        </div>  

        {{--
        <!-- BLOG 1 -->
        <div class="page-section pt-110-b-30-cont">
          <div class="container">
                
            <div class="mb-50">
              <h2 class="section-title pr-0">LATEST <span class="bold">NEWS</span><a href="blog-right-sidebar.html" class="section-more right">OUR BLOG</a>
                  </h2>
            </div>
            
            <div class="row">
              
              <!-- Post Item 1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-1.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">TIME FOR MINIMALISM</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  JULE 10<span class="slash-divider">/</span><a href="https://1.envato.market/1rOKNa">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="https://1.envato.market/1rOKNa" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-2.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">NEW TRENDS IN WEB DESIGN</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  MAY 11<span class="slash-divider">/</span><a href="https://1.envato.market/1rOKNa">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="https://1.envato.market/1rOKNa" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-70" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="blog-single-sidebar-right.html"><img src="images/blog/post-prev-3.jpg" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">THE SOUND OF LIFE</a></h3>
                </div>
                  
                <div class="post-prev-info">
                  DECEMBER 21<span class="slash-divider">/</span><a href="https://1.envato.market/1rOKNa">JOHN DOE</a>
                </div>
                  
                <div class="post-prev-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, nostrum, cumque culpa provident aliquam commodi assumenda laudantium magnam illo nostrum. 
                </div>
                  
                <div class="post-prev-more-cont clearfix">
                  <div class="post-prev-more left">
                    <a href="blog-single-sidebar-right.html" class="blog-more">READ MORE</a>
                  </div>
                  <div class="right" >
                    <a href="blog-single-sidebar-right.html#comments" class="post-prev-count"><span aria-hidden="true" class="icon_comment_alt"></span><span class="icon-count">21</span></a>
                    <a href="https://1.envato.market/1rOKNa" class="post-prev-count"><span aria-hidden="true" class="icon_heart_alt"></span><span class="icon-count">53</span></a>
                    <a href="#" class="post-prev-count dropdown-toggle" data-toggle="dropdown" aria-expanded="false" >
                      <span aria-hidden="true" class="social_share"></span>
                    </a>
                    <ul class="social-menu dropdown-menu dropdown-menu-right" role="menu">
                      <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a>
                      </li>
                      <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                      <li><a href="#"><span aria-hidden="true" class="social_dribbble"></span></a></li>
                    </ul>
                  </div>
                </div>
              
              </div>
              
            </div>
            
          </div>
        </div>
        <!-- BLOG 1 -->
        --}}

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	
               
        

        
        <!-- NEWS LETTER -->
        <div class="page-section nl-cont">
          <div class="container">
            <div class="relative" >
              <div id="mc_embed_signup" class="nl-form-container clearfix">
                <form action="http://abcgomel.us9.list-manage.com/subscribe/post-json?u=ba37086d08bdc9f56f3592af0&amp;id=e38247f7cc&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>   <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                  <input type="email" value="" name="EMAIL" class="email nl-email-input" id="mce-EMAIL" placeholder="Enter your email" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;"><input type="text" name="b_ba37086d08bdc9f56f3592af0_e38247f7cc" tabindex="-1" value=""></div>
          
                  <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button medium gray">
                </form>
                <div id="notification_container"  ></div>
              </div>
            </div>
          </div>
        </div>
@endsection