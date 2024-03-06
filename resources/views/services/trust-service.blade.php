@extends('layouts.master')
@section('title', 'Home | ' . config('app.full_company_name'))

@section('content')

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-small grey-light-bg" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
    <div class="relative container align-left">
      <div class="row">
        
        <div class="col-md-7">
          <h1 class="page-title">Trust Services</h1>
        </div>
        
        <div class="col-md-5">
          <div class="breadcrumbs">
            <a href="{{url('/')}}">Home</a><i class="icon icon-arrows-right"></i><a href="{{url('our-services')}}">OUR SERVICES</a><span class="slash-divider">/</span><span class="bread-current">Trust Services</span>
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
                <h3 class="uppercase">Trust Services</h3>
              </div>
                
              <div class="post-prev-text no-border pt-20">
                <p class="text-justify"> {{config('app.short_company_name')}} provides a wide range of trust services to fulfil the different demands of our clients. Our trust services are intended to provide financial security, asset management, and investment solutions to people, businesses, and institutions. With our knowledge and dedication to quality, we hope to be a valued partner in assisting our clients in reaching their financial objectives.

                </p>
              </div>

              <hr class=" mb-30">
              <div class="post-prev-title">
                <h3>Key Features of our trust services include:</h3>
                <div class="mt-10">
                    <strong>Wealth Preservation : </strong>
                    <p>Our trust services provide solutions for wealth preservation, allowing clients to protect their assets and mitigate potential dangers. We offer personalised guidance and specialised solutions to assist clients in navigating complex financial environments and preserving their money for the long term. </p>
                </div>
                <div class="mt-10">
                    <strong>Trustee Services : </strong>
                    <p>As respected trustees, we operate in our customers' best interests and ensure that trusts are properly administered. Our dedicated team manages all administrative activities, such as record-keeping, reporting, and compliance, alleviating customers of the burden of trust management. </p>
                </div>
                <div class="mt-10">
                    <strong>Charitable Trusts : </strong>
                    <p>We help clients create charitable trusts to support causes they care about. Our trust services allow clients to have a beneficial impact on society while potentially receiving tax benefits.</p>
                </div>
                <hr class=" mb-30">
              </div>

              <div class="post-prev-text no-border">
                <p class="text-justify"> {{config('app.short_company_name')}} prioritises trust, transparency, and client satisfaction when providing trust services. Our experienced personnel are committed to providing great service and tailored solutions to each client's specific demands. Trust us to help you achieve financial success.

                </p>
              </div>
            </div>
        
            <!-- DIVIDER -->
            <hr class="mt-0 mb-0">
            
            <!-- WORK NAVIGATION -->
            <div class="work-navigation clearfix">
              <a href="{{url('service/hedge-fund')}}" class="work-prev"><span><span class="icon icon-arrows-left"></span>&nbsp;Prev</span></a>
              <a href="{{url('our-services')}}" class="work-all"><span>Show All</span></a>
              <a href="{{url('service/merger-acquisition')}}" class="work-next"><span>Next&nbsp;<span class="icon icon-arrows-right"></span></span></a>
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
                  <a href="{{url('service/tax-efficient-investment')}}"><img src="{{asset('assets/images/blog/post-prev-2.jpg')}}" alt="img"></a>
                </div>
                  
                <div class="post-prev-title">
                  <h3 class="uppercase"><a href="{{url('service/tax-efficient-investment')}}">Tax-efficient Investments  </a></h3>
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
                  <li> <a href="{{url('service/trust-service')}}" class="active">Trust Services </a> </li>
                  <li> <a href="{{url('service/merger-acquisition')}}">Mergers & Acquisitions </a> </li>
                  <li> <a href="{{url('service/discretionary-management-services')}}">Discretionary Management Services </a> </li>
                </ul>
              </div>
            </div>
   
          </div>
          
        </div>
</div>



@endsection