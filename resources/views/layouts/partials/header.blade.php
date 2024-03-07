<!-- HEADER -->

<header id="nav" class="header header-1 no-transparent mobile-no-transparent">
    <div class="header-wrapper">
      <div class="container-m-30 clearfix">
        <div class="logo-row">
        
          <!-- LOGO --> 
          <div class="logo-container-2">
            <div class="logo-2">
              <a href="{{url('/')}}" class="clearfix">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo-img" alt="Logo">
              </a>
            </div>
          </div>
          <!-- BUTTON --> 
          <div class="menu-btn-respons-container">
              <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                  <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
          </div>
        </div>
      </div>

      <!-- MAIN MENU CONTAINER -->
      <div class="main-menu-container">
          
            <div class="container-m-30 clearfix">	
            
                  <!-- MAIN MENU -->
                  <div id="main-menu">
                    <div class="navbar navbar-default" role="navigation">

                      <!-- MAIN MENU LIST -->
                      <nav class="collapse collapsing navbar-collapse right-1024">
                        <ul class="nav navbar-nav">

                          <!-- HOME -->
                          <li class="{{ request()->is('/') ? 'current' : '' }}">
                            <a href="{{ url('/') }}"><div class="main-menu-title">HOME</div></a>
                          </li>
                          
                          <!-- ABOUT US -->
                          <li class="parent {{ request()->is('about-us*') ? 'current' : '' }}">
                            <a href="#"><div class="main-menu-title">COMPANY OVERVIEW</div></a>
                            <ul class="sub">
                              <li><a href="{{url('about-us')}}">About Us</a></li>
                              <li><a href="{{url('about-us/philantrophy')}}">Philantrophy</a></li>
                              <li><a href="{{url('about-us/esg-statement')}}">ESG Statement</a></li>
                              <li><a href="{{url('about-us/modern-slavery')}}">Modern Slavery</a></li>
                            </ul>
                          </li>
       
                          <li class="parent {{ request()->is('service/*') ? 'current' : '' }}">
                            <a href="{{url('our-services')}}"><div class="main-menu-title">OUR SERVICES</div></a>
                            <ul class="sub">
                              <li><a href="{{url('service/tax-efficient-investment')}}">Tax-efficient Investments</a></li>
                              <li><a href="{{url('service/estate-planning')}}">Estate Planning</a></li>
                              <li><a href="{{url('service/retirement-planning')}}">Retirement Planning</a></li>
                              <li><a href="{{url('service/capital-growth-service')}}">Capital Growth Services</a></li>
                              <li><a href="{{url('service/hedge-fund')}}">Hedge Funds</a></li>
                              <li><a href="{{url('service/trust-service')}}">Trust Service</a></li>
                              <li><a href="{{url('service/merger-acquisition')}}">Mergers & Acquisitions</a></li>
                              <li><a href="{{url('service/discretionary-management-services')}}">Discretionary Management Services </a></li>
                            </ul>
                          </li>

                          <li id="menu-contact-info-big" class="megamenu {{ request()->is('our-method') ? 'current' : '' }}">
                            <a href="{{url('our-method')}}"><div class="main-menu-title">OUR METHOD</div></a>
                          </li>
                        
                          <!-- MENU ITEM -->
                          <li id="menu-contact-info-big" class="megamenu {{ request()->is('contact-us') ? 'current' : '' }}">
                            <a href="{{url('contact-us')}}"><div class="main-menu-title">CONTACT</div></a>
                          </li>
                        </ul>
            
                      </nav>

                    </div>
                  </div>
                  <!-- END main-menu -->
                  
            </div>
            <!-- END container-m-30 -->
          
      </div>
 
      <ul class="cd-header-buttons">
          <li><a href="{{url('login')}}"><span style="font-size: 34px; padding-top:10px;"><i class="vc_btn3-icon fa fa-user"></i></span></a></li>
      </ul> <!-- cd-header-buttons -->
      
      
    </div>
    <!-- END header-wrapper -->
    
  </header>
