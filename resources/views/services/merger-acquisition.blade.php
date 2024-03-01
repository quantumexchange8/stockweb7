@extends('layouts.main')
@section('title', 'Home | ' . config('app.full_company_name'))

@section('content')

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-small grey-light-bg">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-7">
          <h1 class="page-title">Mergers & Acquisitions </h1>
        </div>
        
        <div class="col-md-5">
          <div class="breadcrumbs">
            <a href="{{url('/')}}">Home</a><span class="slash-divider">/</span><a href="{{url('our-services')}}">OUR SERVICES</a><span class="slash-divider">/</span><span class="bread-current">Mergers & Acquisitions </span>
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
                <a href="#"><img src="{{asset('assets/images/blog/post-wide-1.jpg')}}" alt="img"></a>
              </div>
                
              <div class="post-prev-title">
                <h3 class="uppercase">Mergers & Acquisitions</h3>
              </div>
                
              <div class="post-prev-text no-border pt-20">
                <p class="text-justify">In a large number of cases, a merger or acquisition can be crucial to the long-term success of a company. A company’s shareholders may benefit from the sale of a portion or the entirety of the company, while a company’s growth may be accelerated through the acquisition of another company. To assess possible targets for acquisition, merger partners as well as financial and strategic alternatives,  {{config('app.short_company_name')}}  offers both sell-side and buy-side advice services, depending entirely on your personal objectives. 

                </p>
              </div>
              <div class="post-prev-title">
                <h3>We can assist clients with particular M&A scenarios such as : </h3>
                <div class="mt-10">
                    <ul class="icon-list">
                        <li><i class="fa fa-angle-right"></i>Carrying out client transactions involving leverage or management buyouts, including finding investors to provide financing. </li>
                        <li><i class="fa fa-angle-right"></i>Directing financed recapitalisations for shareholders looking for partial cash buyouts. </li>
                        <li><i class="fa fa-angle-right"></i>Expert support on both sell-side and buy-side in the context of privatisations as well as public mergers and acquisitions. </li>
                        <li><i class="fa fa-angle-right"></i>Advising on strategically based joint ventures. </li>
                        <li><i class="fa fa-angle-right"></i>Advising on the reorganisation of shareholders. </li>
                    </ul>
                </div>
          
                <hr class=" mb-30">
              </div>

              <div class="post-prev-text no-border">
                <p class="text-justify">At {{config('app.short_company_name')}}, our special services aim to exceed client expectations by delivering comprehensive, tailored solutions for your investment success. 
                    We are committed to building long-lasting relationships based on trust, transparency and superior client service. 
                </p>
              </div>
            </div>
        
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            
            <!-- WORK NAVIGATION -->
            <div class="work-navigation clearfix">
              <a href="{{url('service/trust-service')}}" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
              <a href="{{url('our-services')}}" class="work-all"><span>Show All</span></a>
              <a href="{{url('service/tax-efficient-investment')}}" class="work-next"><span>Next&nbsp;<span class="icon icon-arrows-right"></span></span></a>
            </div>
            
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
                    
            <!-- RELATED POSTS -->
            <h4 class="blog-page-title mt-50 mb-25">OTHER SERVICES</h4>
            
            <div class="row related-posts">
            
              <!-- Post Item 1 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/retirement-planning')}}"><img src="{{asset('assets/images/blog/post-prev-1.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/retirement-planning')}}">Retirement Planning
                </a></h3>
                </div>

              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/capital-growth-service')}}"><img src="{{asset('assets/images/blog/post-prev-2.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/capital-growth-service')}}">Capital Growth Services  </a></h3>
                </div>

              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/estate-planning')}}"><img src="{{asset('assets/images/blog/post-prev-3.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/estate-planning')}}">Estate Planning   </a></h3>
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
                  <li><a href="{{url('service/retirement-planning')}}">Retirement Planning </a></li>
                  <li><a href="{{url('service/capital-growth-service')}}">Capital Growth Services</a></li>
                  <li> <a href="{{url('service/hedge-fund')}}" >Hedge Fund Services </a> </li>
                  <li> <a href="{{url('service/trust-service')}}">Trust Services </a> </li>
                  <li> <a href="{{url('service/merger-acquisition')}}" class="active">Mergers & Acquisitions </a> </li>
                </ul>
              </div>
            </div>
   
          </div>
          
        </div>
</div>



@endsection