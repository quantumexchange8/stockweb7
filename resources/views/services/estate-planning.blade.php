@extends('layouts.master')
@section('title', 'Estate Planning | ' . config('app.full_company_name'))

@section('content')

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-small grey-light-bg" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-7">
          <h1 class="page-title">ESTATE PLANNING</h1>
        </div>
        
        <div class="col-md-5">
          <div class="breadcrumbs">
            <a href="{{url('/')}}">Home</a><i class="icon icon-arrows-right"></i><a href="{{url('our-services')}}">OUR SERVICES</a><span class="slash-divider">/</span><span class="bread-current">ESTATE PLANNING</span>
          </div>
        </div>
        
      </div>
    </div>
</div>

     <!-- COTENT CONTAINER -->
<div class="container p-140-cont">
        <div class="row">
        
          <!-- CONTENT -->
          <div class="col-sm-8 blog-main-posts">
        
            <!-- POST ITEM -->
            <div class="blog-post wow fadeIn pb-50">
              <div class="post-prev-img">
                <a href="#"><img src="{{asset('assets/images/estate.jpg')}}" alt="img"></a>
              </div>
                
              <div class="post-prev-title">
                <h3 class="uppercase"> ESTATE PLANNING </h3>
              </div>
                
              <div class="post-prev-text no-border pt-20">
                <p class="text-justify">At {{config('app.short_company_name')}} we understand that in order to ensure the financial security of future generations, estate planning is essential. The creation of a will, the establishment of trusts, the designation of beneficiaries, and the implementation of methods to minimise estate taxes are all fundamental components of proper estate planning. Clients have the ability to protect their wealth and ensure a seamless transfer of assets to their successors in accordance with their preferences if they take proactive measures to handle these problems.
                </p>
                <p class="text-justify">We work alongside Estate Planning professionals to create detailed, bespoke strategies that align with our clients wishes, ensuring a smooth transferal of assets whilst minimising estate taxation. 
                </p>
              </div>
            </div>
        
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            
            <!-- WORK NAVIGATION -->
            <div class="work-navigation clearfix">
              <a href="{{url('service/tax-efficient-investment')}}" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
              <a href="{{url('our-services')}}" class="work-all"><span>Show All</span></a>
              <a href="{{url('service/retirement-planning')}}" class="work-next"><span>Next&nbsp;<span class="icon icon-arrows-right"></span></span></a>
            </div>
            
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
                    
            <!-- RELATED POSTS -->
            <h4 class="blog-page-title mt-50 mb-25">OTHER SERVICES</h4>
            
            <div class="row related-posts">
            
              <!-- Post Item 1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/trust-service')}}"><img src="{{asset('assets/images/trust.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/trust-service')}}">Trust Services
                </a></h3>
                </div>

              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/capital-growth-service')}}"><img src="{{asset('assets/images/growth.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/capital-growth-service')}}">Capital Growth Services</a></h3>
                </div>

              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/hedge-fund')}}"><img src="{{asset('assets/images/fund.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/hedge-fund')}}">Hedge Fund Services  </a></h3>
                </div>
              </div>
              
            </div>
            
          </div>

          <!-- SIDEBAR -->
          <div class="col-sm-4 col-md-3 col-md-offset-1">
            
            
            <!-- WIDGET -->
            <div class="widget">
              
              <h5 class="widget-title">Services</h5>
              
              <div class="widget-body">
                <ul class="clearlist widget-menu">
                  <li><a href="{{url('service/tax-efficient-investment')}}">Tax-efficient Investment</a></li>
                  <li><a href="{{url('service/estate-planning')}}" class="active">Estate Planning </a></li>
                  <li><a href="{{url('service/retirement-planning')}}">Retirement Planning </a></li>
                  <li><a href="{{url('service/capital-growth-service')}}">Capital Growth Services</a></li>
                  <li> <a href="{{url('service/hedge-fund')}}">Hedge Fund Services </a> </li>
                  <li> <a href="{{url('service/trust-service')}}">Trust Services </a> </li>
                  <li> <a href="{{url('service/merger-acquisition')}}">Mergers & Acquisitions </a> </li>
                  <li> <a href="{{url('service/discretionary-management-services')}}">Discretionary Management Services </a> </li>
                </ul>
              </div>
            </div>
          </div>
          
        </div>
</div>



@endsection