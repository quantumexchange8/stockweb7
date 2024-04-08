@extends('layouts.master')
@section('title', 'Modern Slavery | ' . config('app.full_company_name'))


@section('content')

<div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->	

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
  <div class="relative container align-left">
    <div class="row">
       
      <div class="col-md-8">
        <h1 class="page-title2">MODERN SLAVERY</h1>
     
      </div>
       
      <div class="col-md-4">
        <div class="breadcrumbs white-text">
          <a href="{{ url('/') }}">Home</a>    <i class="icon icon-arrows-right"></i>
         <span class="bread-current">ABOUT US</span> / <span class="bread-current"> MODERN SLAVERY</span>
        </div>
      </div>
      
    </div>
  </div>
</div>

<div class="page-section pt-110-b-30-cont">
    <div class="container">
        <div class="title-fs-45 uppercase keft-50 mb-50">MODERN <span class="bold uppercase">SLAVERY</span>   <div class="line-3-100"></div>
        </div>
      <p class="bold mb-50">Through adherence to this disclaimer, {{ config('app.full_company_name') }} hopes to communicate our steadfast commitment to moral behaviour and our duty to help end modern slavery.</p>
      <div class="row">
        
        <div class="col-md-12 wow fadeIn pb-30" >
          <div class="row">
          
            <div class="col-md-4 blog2-post-title-cont">
          
              <div class="post-prev-title">
                <h3>DISCLAIMER </h3>
                <div class="post-prev-info">
                  <a href="#">on Modern Slavery for {{config('app.full_company_name')}}</a>
                </div>
              </div>
            </div>
              
            <div class="col-md-8">
              <div class="blog2-post-prev-text ">                     
                Human rights advocacy and the highest ethical standards are priorities for {{ config('app.full_company_name') }}, and they permeate every facet of our business. As part of this commitment, we understand that modern slavery is a global problem and that effective solutions are required. As a result, we have created the disclaimer that follows to clarify our position on contemporary slavery:          
              </div>
            </div>
            
          </div>
        </div>
        
        <!-- Post Item 2 -->
        <div class="col-md-12 wow fadeIn pb-30" >
          <div class="row">
          
            <div class="col-md-4 blog2-post-title-cont">
            
              <div class="post-prev-title">
                <h3>DEDICATED TO</h3>
                <div class="post-prev-info">
                  <a href="#">Prohibiting Slavery Practices</a>
                </div>
              </div>
            </div>
              
            <div class="col-md-8">
              <div class="blog2-post-prev-text ">                     
                {{ config('app.full_company_name') }} is committed to operating in a way that aligns with our core beliefs and values. We vehemently condemn modern slavery in all of its manifestations, including child labour, forced labour, and human trafficking.
              </div>
            </div>
            
          </div>
        </div>

        <!-- Post Item 3 -->
        <div class="col-md-12 wow fadeIn pb-30" >
          <div class="row">
          
            <div class="col-md-4 blog2-post-title-cont">
        
              <div class="post-prev-title">
                <h3><a href="blog-single-sidebar-right.html">TAKING CARE</a></h3>
                <div class="post-prev-info">
                     in the Supply Chain
                </div>
              </div>
            </div>
              
            <div class="col-md-8">
              <div class="blog2-post-prev-text ">                     
                We understand how critical it is to carefully examine our supply chain in order to spot and reduce any potential for modern slavery. We demand ethical business practices and a shared commitment to ending slavery from our suppliers and business partners.
              </div>
            </div>
            
          </div>
        </div>

        <div class="col-md-12 wow fadeIn pb-30" >
            <div class="row">
            
              <div class="col-md-4 blog2-post-title-cont">
          
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">RULES</a></h3>
                  <div class="post-prev-info">
                   & Guidelines
                  </div>
                </div>
              </div>
                
              <div class="col-md-8">
                <div class="blog2-post-prev-text ">                     
                    Strong standards and processes have been put in place by {{ config('app.full_company_name') }} to stop any participation with modern slavery. These consist of policies for ethical sourcing, training programmes for staff members, and channels for reporting any issues pertaining to modern slavery.

                </div>
              </div>
              
            </div>
        </div>
        <div class="col-md-12 wow fadeIn pb-30" >
            <div class="row">
            
              <div class="col-md-4 blog2-post-title-cont">
          
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">OPENNESS</a></h3>
                  <div class="post-prev-info">
                    and Responsibility
                  </div>
                </div>
              </div>
                
              <div class="col-md-8">
                <div class="blog2-post-prev-text ">                     
                    Our commitment to upholding accountability and transparency in our fight against modern slavery is unwavering. To make sure that our actions are in line with our commitment to human rights, we evaluate and analyse them on a regular basis.

                </div>
              </div>
              
            </div>
        </div>
        <div class="col-md-12 wow fadeIn pb-30" >
            <div class="row">
            
              <div class="col-md-4 blog2-post-title-cont">
          
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">WORKING TOGETHER </a></h3>
                  <div class="post-prev-info">
                    and advocating
                  </div>
                </div>
              </div>
                
              <div class="col-md-8">
                <div class="blog2-post-prev-text ">                     
                  {{ config('app.full_company_name') }} actively backs coalition projects and advocacy campaigns to fight contemporary slavery. In order to promote progress in this important field, we aim to interact with industry colleagues, relevant organisations, and stakeholders.
                </div>
              </div>
              
            </div>
        </div>
        <div class="col-md-12 wow fadeIn pb-30" >
            <div class="row">
            
              <div class="col-md-4 blog2-post-title-cont">
          
                <div class="post-prev-title">
                  <h3><a href="blog-single-sidebar-right.html">CONSTANT </a></h3>
                  <div class="post-prev-info">
                    ENHANCEMENT
                  </div>
                </div>
              </div>
                
              <div class="col-md-8">
                <div class="blog2-post-prev-text ">                     
                    We are dedicated to enhancing our strategy for combating modern slavery on a constant basis. This entails keeping up with new best practices and adjusting our tactics to deal with this complicated problem in an efficient manner.
                </div>
              </div>
              
            </div>
        </div>
          

      </div>
      
    </div>
  </div>
        <!-- BACK TO TOP -->
        <p id="back-top">
  <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>

    </div><!-- End BG -->	
</div><!-- End wrap -->	
    
@endsection