<!-- FOOTER 2 -->
<footer id="footer2" class="page-section pt-80 pb-50 grey-light-bg">
  <div class="container">
    <div class="row">
    
      <div class="col-md-3 col-sm-3 widget">
        <div class="logo-footer-cont">
          <a href="index.html">
            <img class="logo-footer" src="{{asset('assets/images/logo.png')}}" alt="logo">
          </a>
        </div>
        <div class="footer-2-text-cont">
          <address>
           Unit 2103-4, 21st Floor, <br>
Li Po Chun Chambers, <br>
189 Des Voeux Road Central, <br>
Sheung Wan, Hong Kong
          </address>
        </div>
        <div class="footer-2-text-cont">
          <a class="a-text" href="mailto:info@guolianinternational.com">info@guolianinternational.com</a>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-3 widget">
        <h4>OVERVIEW</h4>
        <ul class="links-list bold a-text-cont">
          <li><a href="{{url('/')}}">HOME</a></li>
          <li><a href="{{url('about-us')}}">ABOUT US</a></li>
          <li><a href="{{url('our-method')}}">OUR METHOD</a></li>
          <li><a href="{{url('contact-us')}}">CONTACT US</a></li>
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-3 widget">
        <h4>SERVICES</h4>
        <ul class="links-list a-text-cont" >
          <li><a href="{{url('service/tax-efficient-investment')}}">TAX EFFICIENT INVESTMENT</a></li>
          <li><a href="{{url('service/estate-planning')}}">ESTATE PLANNING</a></li>
          <li><a href="{{url('service/retirement-planning')}}">RETIREMENT PLANNING</a></li>
          <li><a href="{{url('service/capital-growth-service')}}">CAPITAL GROWTH SERVICE</a></li>
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-3 widget">
        <h4>SERVICES</h4>
          <ul class="links-list a-text-cont" >
            <li><a href="{{url('service/hedge-fund')}}">HEDGE FUNDS</a></li>
            <li><a href="{{url('service/trust-service')}}">TRUST SERVICES</a></li>
            <li><a href="{{url('service/merger-acquisition')}}">MERGERS & ACQUISITION</a></li>
            <li><a href="{{url('service/discretionary-management-services')}}">DISCRETIONARY MANAGEMENT SERVICES</a></li>
          </ul>                  
      </div>
    </div> 
    <div class="row">
      <div class="col-md-12">
        <div class="footer-text-box">	
          <p class="text-footer text-justify">
            We appreciate your interest in {{ config('app.full_company_name')}} at Unit 2103-4, 21st Floor, 
Li Po Chun Chambers, 
189 Des Voeux Road Central, 
Sheung Wan, Hong Kong. Your use of this website, including the content, materials, and information available on or through this website (together, the “Materials”), is governed by these Terms and Conditions (these “T&C’s”). By using this website, you acknowledge that you have read and agree to these T&C’s. The content of this page is for informational purposes, and it is not intended as advice or any recommendations on any type of securities or financial products.
          </p>
          <p class="text-footer text-justify">
            <span style="color: red; font-weight: bold;">Risk warning:</span> Trading of securities and financial products carries with it a level of risk. Leverage can work both to your advantage and disadvantage. You should never invest money that you cannot afford to lose. Before trading in any complex financial products, please ensure that you understand the risks involved and are also fully aware, and familiar with the T&C’s set forth. Any indication of past performance, or emulated past performance, included in advertisements published by {{config('app.full_company_name') }}, is not a reliable indicator of future results. The client carries the sole responsibility for all the businesses or investments that are carried out.
          </p>
        </div>
      </div>
    </div>
    
    <div class="footer-2-copy-cont clearfix">
      <!-- Copyright -->
      <div class="left">
        <a class="footer-2-copy" href="#" target="_blank">{{ config('app.full_company_name') }}  &copy; 2020 - {{ now()->year }}</a>
      </div>
    </div>   
     
  </div>
</footer>

 