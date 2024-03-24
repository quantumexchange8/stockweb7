@extends('layouts.master')
@section('title', 'Contact Us | ' . config('app.full_company_name'))


@section('content')

<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
  <div class="relative container align-left">
    <div class="row">
       
      <div class="col-md-8">
        <h1 class="page-title2">CONTACT</h1>
     
      </div>
       
      <div class="col-md-4">
        <div class="breadcrumbs white-text">
          <a href="{{url('/')}}">Home</a> <i class="icon icon-arrows-right"></i><span class="bread-current">CONTACT</span>
        </div>
      </div>
      
    </div>
  </div>
</div>


    <!-- CONTACT INFO SECTION 1 -->
<div id="contact-link" class="page-section p-110-cont">
      <div class="container">
        <div class="row">
        
          <div class="col-md-4 col-sm-6">
            <div class="cis-cont">
              <div class="cis-icon">
                <div class="icon icon-basic-map"></div>
              </div>
              <div class="cis-text">
                <h3><span class="bold">ADDRESS</span></h3>
                <p>Unit 2103-4, 21st Floor, 
Li Po Chun Chambers, 
189 Des Voeux Road Central, 
Sheung Wan, Hong Kong</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cis-cont">
              <div class="cis-icon">
                <div class="icon icon-basic-mail"></div>
              </div>
              <div class="cis-text">
                <h3><span class="bold">EMAIL</span></h3>
                <p><a href="mailto:info@guolianinternational.com">info@guolianinternational.com</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="cis-cont">
              <div class="cis-icon">
                <div class="icon icon-basic-smartphone"></div>
              </div>
              <div class="cis-text">
                <h3><span class="bold">CALL US</span></h3>
                <p></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>        
</div>

<div class="page-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6" >
            <img src="{{asset('assets/images/contactus.jpg')}}" style="background-position:center">
        </div>
        <div class="col-md-6 col-sm-12  grey-light-bg">
          <div class="contact-form-cont">
            <!-- TITLE -->
            <div class="mb-40">
              <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
            </div>
                          
            <!-- CONTACT FORM -->
            <div>
              <form id="contact-form" action="#" method="POST">
              
                <div class="row">
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your name *</label> -->
                    <input type="text" value="" data-msg-required="Please enter your name"  class="controled" name="name" id="name" placeholder="NAME" required>
                  </div>
                </div>
                
                <div class="row">    
                  <div class="col-md-12 mb-30">
                    <!-- <label>Your email address *</label> -->
                    <input type="email" value="" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="EMAIL" required>
                    </div>
                </div>
            
                <div class="row">
                  <div class="col-md-12 mb-40">
                    <!-- <label>Message *</label> -->
                    <textarea maxlength="5000" data-msg-required="Please enter your message" rows="3" class="controled" name="message" id="message" placeholder="MESSAGE" required></textarea>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-12 text-center-xxs">
                    <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                  </div>
                </div>
              </form>	
              <div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
                Thanks, your message has been sent to us.
              </div>
            
              <div class="alert alert-danger hidden animated shake" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endsection