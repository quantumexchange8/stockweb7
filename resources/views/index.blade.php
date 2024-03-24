@extends('layouts.master')
@section('title', 'Home | ' . config('app.full_company_name'))


@section('content')

      <!--HEADER TITLE--->
      <div class="relative">
        <div class="rs-fullscr-container">
          
          <div id="rs-fullwidth" class="tp-banner dark-bg" >
            <ul>	
         
              <li data-transition="zoomout" data-slotamount="1" data-masterspeed="1500" data-thumb="{{asset('assets/images/revo-slider/city-grey.jpg')}}"  data-saveperformance="on"  data-title="GUOLION">
          
                <img src="{{asset('assets/images/revo-slider/city-grey.jpg')}}"  alt="slidebg1" data-lazyload="{{asset('assets/images/revo-slider/city-grey.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                <div class="rs-parallaxlevel-4 opacity-scroll2">
                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption font-white light-52-wide sfb tp-resizeme"
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
                    style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">WE ARE <span class="bold uppercase">{{config('app.short_company_name')}}</span>
                  </div>
                  
                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption font-white norm-16-wide tp-left sfb tp-resizeme hide-0-736 uppercase"
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
                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">TAX-EFFICIENT INVESTMENTS | ESTATE PLANNING | TRUST SERVICES | RETIREMENT PLANNING | HEDGE FUND SERVICES
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
                    style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><a class="button medium thin tp-button white" href="{{url('about-us')}}">SEE MORE</a><a class="button medium thin hover-light tp-button white ml-20" href="{{url('contact-us')}}">CONTACT US</a>
                  </div>
                  
                </div>
              </li>

            </ul>
        
          </div>
          
        </div>	
        
      </div>

      <!--INTRO--->
      <div class="page-section p-110-cont">
        <div class="container">
          <div class="row">
            <div class="col-md-7"> 
              <div class="col-md-12">
                <div class="fes1-main-title-cont wow fadeInDown">
                  <div class="title-fs-60">
                    <span class="bold"> INTRO</span>
                  </div>
                  <div class="line-3-100"></div>
                </div>
                <div class="row wow fadeInDown">
                  <div class="col-md-12 pb-40">
                    <p class="title-fs-20 text-justify">
                      {{config('app.short_company_name')}} is a prominent private equity enterprise that is headquartered in Mainland China and operates out of Hong Kong.
                    </p>
                    <p class="title-fs-20 text-justify">
                      Through the provision of strategic investments and financial knowledge, we are able to unlock the full potential of a wide range of firms operating in a variety of industries.
                    </p>
                    <p class="title-fs-20 text-justify">
                      We are committed to providing our clients with long-term value and generating growth, and we have the client-centric strategy and a great track record to back up our commitment to these goals.
                    </p>
                  </div>
                </div>
              </div>    
   
            </div>
            <div class="col-md-5">
                <img src="{{ asset('assets/images/intro.jpg')}}" alt="img" class="wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1s" >
            </div>
          </div>
        </div>
      </div>


      <!--OUR MISSION-->
      <div class="page-section p-110-cont  grey-light-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="fes1-main-title-cont wow fadeInDown">
                <div class="title-fs-60">
                  <span class="bold"> OUR MISSION</span>
                </div>
                <div class="title-fs-25 mt-10">
                  is to help you achieve your goals. 
                </div>
                <div class="line-3-100"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="fes1-box wow fadeInUp" >
                <p class="title-fs-18 text-justify">The mission of {{config('app.short_company_name')}} is to find attractive investment opportunities and to partner with innovative enterprises in order to fuel the success of such businesses. </p>
                <p class="title-fs-18 text-justify">We work hard to accomplish our goal of providing great returns for our investors while also supporting sustainable growth and innovation within the businesses and industries that we support. </p>
                <p class="title-fs-18 text-justify">Our team of seasoned professionals brings a wealth of expertise and understanding of the business to the table in order to steer our portfolio companies towards record profitability and the attainment of sustainable goals.</p>
                <p class="title-fs-18 text-justify">{{config('app.short_company_name')}} is aware of the significance of comprehending the specific circumstances, requirements, outcomes, and objectives of each individual client. Through the application of specified financial objectives, comprehensive due diligence, and cutting-edge industry research, we actively assist our customers in growing their assets, protecting them, and managing them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">			

        <!-- OUR SERVICES-->
        <div class="page-section clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-12 mt-60 wow fadeInRight">
                
                <div class="mb-50">
                  <h2 class="section-title">OUR <span class="bold">SERVICES</span></h2>
                </div>
                <p class="mb-50 title-fs-18">
                  In order to meet the specific needs of each of our customers, {{config('app.short_company_name')}} is pleased to offer a wide range of specialised services.
                </p>
              
              </div>
            </div>
            <div class="row">
              <!--1ST COLUMN----->
              <div class="col-md-6 fes7-text-cont mb-30">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="fes7-box wow fadeIn" >
                      <div class="fes7-box-icon">
                        <div class="icon icon-basic-lock"></div>
                      </div>
                      <h3>Financial Security</h3>
                      <p class="text-justify">One of the most important aspects of the wealth management services that we provide is financial security. We take great satisfaction in ensuring that individuals and families are able to experience stability and peace of mind despite the dynamic nature of the evolving economic landscape. </p>
                      <p class="text-justify">The ability to cover expenses, make investments for the future, and weather unanticipated financial problems without putting one's standard of life in jeopardy is the essence of what it means to be financially secure.</p>
                      <p class="read-more-content text-justify">In order to achieve and maintain financial stability, it is necessary to take a holistic strategy that incorporates a variety of aspects of wealth management.</p>
                      <a class="button small gray-light btn-4 btn-4aa read-more-button" href="#">Read more..<span aria-hidden="true" class="button-icon-anim arrow_carrot-right"></span></a>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                      <div class="fes7-box wow fadeIn" data-wow-delay="200ms">
                        <div class="fes7-box-icon">
                          <div class="icon icon-basic-todo-txt"></div>
                        </div>
                        <h3>Portfolio Income</h3>
                        <p class="text-justify">{{config('app.short_company_name')}} provides Income Portfolio services as part of its suite of financial services. We are primarily engaged in securities-related activities and have six business segments. {{config('app.short_company_name')}} provides Income Portfolio services such as securities brokerage, asset management, securities investing, margin trading, share transfer agency, and other financial services.
                        </p>
                        <p class="read-more-content text-justify">Clients who use the Income Portfolio services can benefit from a wide selection of income-generating investment options. The company provides securities trading and brokerage services, letting clients to purchase and sell a variety of financial instruments. {{config('app.short_company_name')}} also offers financial leverage services, allowing clients to maximise their investment potential.
                        </p>
                        <p class="read-more-content text-justify">Furthermore, the organisation sells wealth management products, giving clients access to investment options that match their financial goals. {{config('app.short_company_name')}}'s Income Portfolio services are designed to help clients optimise their investment portfolios and reach their desired income levels.</p>
                        <p class="read-more-content text-justify">Overall, {{config('app.short_company_name')}}'s Income Portfolio services offer clients a full range of financial solutions for managing their investments and generating income. Whether it is securities brokerage, asset management, or margin trading, the company seeks to suit its clients' different demands and assist them in successfully navigating the financial markets.</p>
                        <a class="button small gray-light btn-4 btn-4aa read-more-button" href="#">Read more..<span aria-hidden="true" class="button-icon-anim arrow_carrot-right"></span></a>
                      </div>
                    </div>
                      
                </div>
              </div>
              <!--2ND COLUMN----->
              <div class="col-md-6 fes7-text-cont mb-30">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <div class="fes7-box wow fadeIn" >
                      <div class="fes7-box-icon">
                        <div class="icon icon-ecommerce-graph1"></div>
                      </div>
                      <h3>Income Diversification</h3>
                      <p class="text-justify mb-20">Investment diversification is a fundamental component of the financial services that {{config('app.short_company_name')}} provides to its clients. Through the diversification of their assets across a variety of asset classes, including equities, bonds, real estate, and commodities, our customers are able to reduce their exposure to risk and increase their potential for long-term development. Diversification serves as a hedge against the volatility of the market and the economic downturns that can occur, assisting in the preservation and growth of wealth over time.
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
                        <h3>Passive Income</h3>
                        <p class="text-justify">{{config('app.short_company_name')}}'s Passive Income services help clients generate income from their investment portfolios. The organisation provides a variety of passive income alternatives, allowing clients to earn money without actively participating in frequent investment activity.</p>
                        <p class="bold text-justify">{{config('app.short_company_name')}} offers a variety of passive income services, including:</p>
            
                        <ul class="icon-list read-more-content">
                            <li><i class="fa fa-check"></i><span class="bold">Securities Investments: </span> Customers have the opportunity to invest in a wide variety of securities, including stocks, bonds, and mutual funds, in order to generate passive income through dividends, interest payments, or appreciation of their value.

                            </li>
                            <li><i class="fa fa-check"></i><span class="bold">Asset Management:  </span>{{config('app.short_company_name')}} provides professional asset management services, where experienced portfolio managers handle clients' investments to generate passive income. These managers make strategic investment decisions on behalf of clients to maximize returns.
                            </li>
                            <li><i class="fa fa-check"></i><span class="bold">Dividend Investing:   </span>{{config('app.short_company_name')}} offers dividend-focused investment strategies, where clients can invest in dividend-paying stocks or funds. By doing so, they are able to generate a consistent passive income through the distribution of the profits made by the company.
                            </li>
                            <li><i class="fa fa-check"></i><span class="bold">Real Estate Investment Trusts (REITs): </span>Real Estate Investment Trusts (REITs) are investment vehicles that hold and manage properties that generate income. {{config('app.short_company_name')}} offers access to these kinds of vehicles for our clients. Investing in real estate investment trusts (REITs) gives clients the opportunity to generate passive income through rental revenue and appreciation of their properties. 
                            </li>
                            <li><i class="fa fa-check"></i><span class="bold">Fixed Income Investments:</span> Customers have the opportunity to generate passive income by investing in fixed income instruments, such as bonds and treasury bills, which can generate interest payments on a regular basis.
                            </li>
                        </ul>
                        <p class="read-more-content text-justify">Clients have the ability to diversify their investment portfolios and potentially earn income without actively managing their investments when they take advantage of the Passive Income services offered by {{config('app.short_company_name')}}. It is the intention of these services to supply customers with a consistent flow of passive income, so assisting them in accomplishing their preferred financial objectives.</p>
                        <a class="button small gray-light btn-4 btn-4aa read-more-button" href="#">Read more..<span aria-hidden="true" class="button-icon-anim arrow_carrot-right"></span></a>
                      </div>
                    </div>
                      
                </div>
              </div>
            </div>
          </div> 
        </div>  

				<!-- DIVIDER -->
				<hr class="mt-0 mb-0">	
               
@endsection   

@section('scripts')
<script>
      $(document).ready(function() {
          // Define translations object
          window.translations = {
              readMore: "Read more..",
              readLess: "Click to hide"
          };

          $('.read-more-content').hide();

          $('.read-more-button').click(function(event) { // Pass the event object
              event.preventDefault(); // Prevent the default behavior of the anchor element

              var content = $(this).siblings('.read-more-content');
              content.toggle();

              // Update the link text based on content visibility and translations
              var link = $(this);
              if (content.is(':visible')) {
                  link.text(window.translations.readLess);
              } else {
                  link.text(window.translations.readMore);
              }
          });
      });
</script>
@endsection
