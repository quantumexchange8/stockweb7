@extends('layouts.master')
@section('title', 'Services | ' . config('app.full_company_name'))

@section('content')

     <!-- PAGE TITLE LARGE IMG -->
    <div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
        <div class="relative container align-left">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="page-title2">OUR SERVICES</h1>
                </div>
                <div class="col-md-4">
                    <div class="breadcrumbs white-text">
                    <a href="{{url('/')}}">Home</a><i class="icon icon-arrows-right"></i><span class="bread-current">OUR SERVICES</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


	<div class="page-section fes4-cont">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        
                    <div class="row">
                    <div class="col-md-12">
                        <div class="fes1-main-title-cont wow fadeInDown">
                        <div class="title-fs-60">
                            WHAT WE <span class="bold">OFFER?</span>
                        </div>
                        <div class="line-3-150"></div>
                        <div class="title-fs-23 mt-20 text-justify">
                            At {{config('app.short_company_name')}}, we take pride in offering a range of special services designed to meet the specific and unique needs of our clients. With our extensive expertise and commitment to excellence, we strive to provide comprehensive investment solutions that foster financial growth and security. Some of our specialised services include:
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
          
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-bank"></div>
                          </div>
                          <h3><span class="bold">TAX-EFFICIENT INVESTMENTS</span></h3>
               
                      </div>
                      <div class="mt-20 text-justify">
                        Minimising tax liabilities is essential for optimising returns on investment. Our team employs tax-effici..
                      </div>
                      <a href="{{url('service/tax-efficient-investment')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="icon_house_alt"></div>
                          </div>
                          <h3><span class="bold">ESTATE PLANNING </span></h3>
                      </div>
                      <div class="mt-20 text-justify">
                        At {{config('app.short_company_name')}} we understand that in order to ensure the financial security of future generations, estate..
                      </div>
                      <a href="{{url('service/estate-planning')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-wheelchair"></div>
                          </div>
                          <h3><span class="bold">RETIREMENT PLANNING</span></h3>
                      </div>
                      <div  class="mt-20 text-justify">
                        One of the most important aspects of successful wealth management at {{config('app.short_company_name')}} is the ability to..
                      </div>
                      <a href="{{url('service/retirement-planning')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-line-chart"></div>
                          </div>
                          <h3><span class="bold">CAPITAL GROWTH SERVICES</span></h3>
                      </div>
                      <div  class="mt-20 text-justify">
                        {{config('app.short_company_name')}} provides a wide range of Capital Growth services to help our clients reach their financial..
                      </div>
                      <a href="{{url('service/capital-growth-service')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms" >
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-money"></div>
                          </div>
                          <h3><span class="bold">HEDGE FUND SERVICES</span></h3>
                      </div>
                      <div class="mt-20 text-justify">
                        At {{config('app.short_company_name')}}, we provide a wide range of hedge fund services to fulfil our clients' diversified investment.. 
                      </div>
                      <a href="{{url('service/hedge-fund')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="1000ms">
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-users"></div>
                          </div>
                          <h3><span class="bold">TRUST SERVICES</span></h3>
                      </div>
                      <div class="mt-20 text-justify">
                        {{config('app.short_company_name')}} provides a wide range of trust services to fulfil the different demands of our clients. Our trust..
                      </div>
                      <a href="{{url('service/trust-service')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>              
            
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="600ms">
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-globe"></div>
                          </div>
                          <h3><span class="bold uppercase">Mergers & Acquisitions </span></h3>
                      </div>
                      <div  class="mt-20 text-justify">
                        In a large number of cases, a merger or acquisition can be crucial to the long-term success of a company. A company’s  ..
                      </div>
                      <a href="{{url('service/merger-acquisition')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn" data-wow-delay="800ms" >
                      <div class="fes4-title-cont" >
                          <div class="fes4-box-icon">
                              <div class="fa fa-slideshare"></div>
                          </div>
                          <h3><span class="bold">DISCRETIONARY MANAGEMENT SERVICES</span></h3>
                      </div>
                      <div class="text-justify">
                        {{config('app.short_company_name')}} is a financial services company that provides a variety of services, including discretionary.. 
                      </div>
                      <a href="{{url('service/discretionary-management-services')}}"><button type="button" class="btn btn-default btn-sm mt-5">Read More</button></a>
                    </div>
                </div>
                    
            
            </div>


        </div>
    </div>


@endsection