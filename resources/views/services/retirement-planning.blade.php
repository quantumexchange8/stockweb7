@extends('layouts.master')
@section('title', 'Home | ' . config('app.full_company_name'))

@section('content')

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-small grey-light-bg" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-7">
          <h1 class="page-title">RETIREMENT PLANNING</h1>
        </div>
        
        <div class="col-md-5">
          <div class="breadcrumbs">
            <a href="{{url('/')}}">Home</a><i class="icon icon-arrows-right"></i><a href="{{url('our-services')}}">OUR SERVICES</a><span class="slash-divider">/</span><span class="bread-current">RETIREMENT PLANNING</span>
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
                <img src="{{asset('assets/images/retirement-plan.jpg')}}" alt="img">
              </div>
                
              <div class="post-prev-title">
                <h3 >RETIREMENT PLANNING</h3>
              </div>
                
              <div class="post-prev-text no-border pt-20">
                <p >One of the most important aspects of successful wealth management at {{ config('app.full_company_name') }} is the ability to effectively plan for retirement. In order to accomplish this, it is necessary for us to establish distinct objectives for retirement, to maximise contributions to retirement accounts, and to devise a withdrawal strategy that is sustainable throughout retirement. 
                </p>
                <p >Our esteemed clients are able to enjoy their retirement years with self-assurance if they meticulously plan for the future. This is because they are aware that they have the financial means to maintain the lifestyle that they wish throughout their retirement years.
                </p>
              </div>
            </div>
        
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            
            <!-- WORK NAVIGATION -->
            <div class="work-navigation clearfix">
              <a href="{{url('service/estate-planning')}}" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
              <a href="{{url('our-services')}}" class="work-all"><span>Show All</span></a>
              <a href="{{url('service/capital-growth-service')}}" class="work-next"><span>Next&nbsp;<span class="icon icon-arrows-right"></span></span></a>
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
                  <h3 ><a href="{{url('service/trust-service')}}">Trust Services
                </a></h3>
                </div>

              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/hedge-fund')}}"><img src="{{asset('assets/images/fund.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 ><a href="{{url('service/hedge-fund')}}">Hedge Fund Services </a></h3>
                </div>

              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/merger-acquisition')}}"><img src="{{asset('assets/images/mergers.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 ><a href="{{url('service/merger-acquisition')}}">Mergers & Acquisitions  </a></h3>
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
                  <li><a href="{{url('service/estate-planning')}}">Estate Planning </a></li>
                  <li><a href="{{url('service/retirement-planning')}}" class="active">Retirement Planning </a></li>
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