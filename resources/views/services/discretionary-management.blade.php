@extends('layouts.master')
@section('title', 'Discretionary Management | ' . config('app.full_company_name'))

@section('content')

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-small grey-light-bg" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-7">
          <h1 class="page-title">Discretionary Management Services </h1>
        </div>
        
        <div class="col-md-5">
          <div class="breadcrumbs">
            <a href="{{url('/')}}">Home</a><i class="icon icon-arrows-right"></i><a href="{{url('our-services')}}">OUR SERVICES</a><span class="slash-divider">/</span><span class="bread-current">Discretionary Management Services </span>
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
                <a href="#"><img src="{{asset('assets/images/discretionary.jpg')}}" alt="img"></a>
              </div>
                
              <div class="post-prev-title">
                <h3 >Discretionary Management Services </h3>
              </div>
                
              <div class="post-prev-text no-border pt-20">
                <p > {{ config('app.full_company_name') }} is a financial services company that provides a variety of services, including discretionary management. Discretionary Management is a service in which a professional portfolio manager makes investing decisions on the client's behalf.
                </p>
                <p > {{ config('app.full_company_name') }} allow clients to entrust their investment portfolios to experienced experts who will actively manage and make investment decisions based on their knowledge and market analysis. This service is intended to give clients with personalised investment plans based on their financial objectives, risk tolerance, and investing preferences.
                </p>
                <p >Clients who use Discretionary Management services benefit from the investment specialists' expertise and knowledge at {{ config('app.full_company_name') }} These specialists actively watch market trends, analyse financial data, and make intelligent investment decisions in order to maximise the success of the client's portfolios.</p>
                <p >{{ config('app.full_company_name') }} aspires to provide clients with comprehensive and dependable Discretionary Management services that assist them realise their investment goals. Whether it's managing a broad portfolio, maximising profits, or minimising risks, the company's professionals are committed to providing personalised investing solutions.
                </p>
               </div>

       
            </div>
        
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            
            <!-- WORK NAVIGATION -->
            <div class="work-navigation clearfix">
              <a href="{{url('service/merger-acquisition')}}" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
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
                  <a href="{{url('service/merger-acquisition')}}"><img src="{{asset('assets/images/retirement-plan.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 ><a href="{{url('service/retirement-planning')}}">Retirement Planning
                </a></h3>
                </div>

              </div>
              
              <!-- Post Item 2 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="200ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/tax-efficient-investment')}}"><img src="{{asset('assets/images/growth.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 ><a href="{{url('service/capital-growth-service')}}">Capital Growth Services  </a></h3>
                </div>

              </div>
              
              <!-- Post Item 3 -->
              <div class="col-sm-6 col-md-4 col-lg-4 wow fadeIn pb-50" data-wow-delay="400ms" >
                  
                <div class="post-prev-img">
                  <a href="{{url('service/estate-planning')}}"><img src="{{asset('assets/images/estate.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 ><a href="{{url('service/estate-planning')}}">Estate Planning   </a></h3>
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
                  <li> <a href="{{url('service/hedge-fund')}}">Hedge Fund Services </a> </li>
                  <li> <a href="{{url('service/trust-service')}}">Trust Services </a> </li>
                  <li> <a href="{{url('service/merger-acquisition')}}">Mergers & Acquisitions </a> </li>
                  <li> <a href="{{url('service/discretionary-management-services')}}" class="active">Discretionary Management Services </a> </li>
                </ul>
              </div>
            </div>
   
          </div>
          
        </div>
</div>



@endsection