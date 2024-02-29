@extends('layouts.main')
@section('title', 'Home | ' . config('app.full_company_name'))


@section('content')

<div id="wrap" class="boxed ">
    <div class="grey-bg"> <!-- Grey BG  -->	

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/work-proc-bg.jpg')}}')">
  <div class="relative container align-left">
    <div class="row">
       
      <div class="col-md-8">
        <h1 class="page-title2">ABOUT US</h1>
     
      </div>
       
      <div class="col-md-4">
        <div class="breadcrumbs">
          <a href="index.html">Home</a> > <span class="bread-current">ABOUT US</span>
        </div>
      </div>
      
    </div>
  </div>
</div>

 
        <!-- ABOUT US DESCRIPTION -->
  <div class="page-section fes4-cont">
      <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="fes4-box wow fadeIn">
                      <h2 class="section-title" style="font-size:50px">ABOUT <span class="bold">US</span></h2>
                    </div>
                </div>            
                <div class="col-xs-12 col-sm-8 col-md-8">
                  <div class="fes4-box wow fadeIn" data-wow-delay="200ms">
                        <p class="title-fs-35">
                          Since we first opened our doors in 2019, {{config('app.short_company_name')}} has steadily developed a reputation for being the go-to resource for investors who are looking for information before it is released to the public. {{config('app.short_company_name')}} has over 120 brokers that serve clients who are located in 43 countries and 5 continents. The company provides a combination of excellent returns and sustainable growth for its clients.
                        </p>
                        <p class="title-fs-35">
                          There are those who have been where you are, so you don't need to face this challenge alone. Join us now and allow us to bring you to a better future by guiding you through the process.
                        </p>
                  </div>
          </div>
        </div> 
      </div>
  </div>

  <div class="page-section p-60-cont">
    <div class="container">
      <div class="col-md-12">
        <div>
          <div class="title-fs-45 uppercase keft-50">
           Why

              <span class="bold uppercase">{{config('app.short_company_name')}}?</span>
          </div>
          <div class="line-3-100"></div>
          <div class="fes2-text-cont">
            When considering the offering of wealth management services, it is of the utmost importance to choose a company that possesses an excellent track record, a comprehensive variety of offerings, and an approach that is centred on the customer. As a major financial institution, {{config('app.short_company_name')}} provides a compelling proposal for individuals who are looking for services related to wealth management.
          </div>
          <p class="mt-10 bold">Some of the reasons why a client ought to take into consideration Guolian Securities Co. Ltd. are as follows: </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <ul class="icon-list">
            <li><i class="fa fa-angle-right"></i><span class="bold"> Reputation and Expertise : </span></li>{{config('app.short_company_name')}} is renowned for its excellent reputation and substantial competence in the field of finance which it has earned over the years. The capacity of the firm to efficiently manage their wealth is something that clients can have faith in because it has a track record of offering high-quality services and a team of specialists with years of experience.
            <li class="mt-10"><i class="fa fa-angle-right"></i><span class="bold">Diverse Range Of Services : </span> </li>The wealth management services offered by Guolian Securities Co. Ltd. are extensive and varied, and they are tailored to meet the specific requirements and objectives of each individual customer. We provide a full suite of solutions to assist clients in accomplishing their financial goals. These solutions include investment advice services, estate planning, and risk management.
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="icon-list">
            <li><i class="fa fa-angle-right"></i><span class="bold"> Customised Approach :  </span></li>With the understanding that every customer has a unique set of financial circumstances and goals, {{config('app.short_company_name')}}  takes a personalised approach to the management of their clients' money. By taking the time to learn about the preferences, risk tolerance, and goals of the clients, the company is able to create strategies that are in line with the specific requirements of each unique client.

            <li class="mt-10"><i class="fa fa-angle-right"></i><span class="bold">Research and Analysis :  </span> </li>The wealth management strategies that {{config('app.short_company_name')}} employs are informed by the company's extensive research capabilities and in-depth market analysis. With access to important insights and suggestions that are powered by data, clients are able to make informed decisions about their investments, which is a benefit to the clients.
          </ul>
        </div>

      </div>
      <div class="col-md-12">
        <div>
          <div class="fes2-text-cont">
            In conclusion, {{config('app.short_company_name')}} stands out as an appealing option for those seeking wealth management services due to its solid reputation, extensive offers, personalised approach, research-driven tactics, and unwavering commitment to customer satisfaction.
          </div>
          
        </div>
      </div>
    </div>
  </div>


  	<!-- OBJECTIVES -->
        <div class="page-section grey-light-bg p-60-cont">
          <div class="container">
            <div class="col-md-12">
              <div>
                <div class="title-fs-45">
                  OUR 
                    <span class="bold uppercase"> Objectives:</span>
                </div>
                <div class="line-3-100"></div>
                <div class="fes2-text-cont">The objectives of Guolian Securities Co. Ltd are to provide its clients with comprehensive brokerage services and wealth management solutions. Guolian Securities Co. Ltd., a major securities firm, intends to fulfil the following objectives:</div>

            </div>
            </div>
          </div>
        </div>
				<div class="page-section">
					<div class="container-fluid">
						<div class="row">
            
							<div class="col-md-6 wow fadeInLeft equal-height1">
								<div class="fes2-main-text-cont">
									<div class="title-fs-45 uppercase">
										Client <br>
										<span class="bold uppercase">Satisfaction</span>
									</div>
									<div class="line-3-70"></div>
									<div class="fes2-text-cont">{{config('app.short_company_name')}} seeks to suit its clients' diversified demands by providing a broad range of financial products and services. The organisation attempts to deliver personalised solutions that are consistent with each client's financial goals and risk tolerance.</div>
								</div>
							</div>
              
							<div class="col-md-6">
								<div class="row">
									<div class="fes2-img equal-height"></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>
				<div class="page-section">
					<div class="container-fluid">
						<div class="row">
							
							<div class="col-md-6 left-50 wow fadeInRight equal-height1">
									<div class="fes2-main-text-cont">
										<div class="title-fs-45 uppercase">
											Risk <br>
											<span class="bold uppercase">Management</span>
										</div>
										<div class="line-3-100"></div>
										<div class="fes2-text-cont">{{config('app.short_company_name')}} lays a strong emphasis on risk management. The corporation has built a strong risk management framework with clear objectives, principles, and organisational structures. Guolian Securities aspires to defend its clients' interests while also maintaining operational stability by successfully managing risks.</div>
									</div>
							</div>
              
              <div class="col-md-6 right-50">
								<div class="row">
									<div class="fes3-img equal-height" ></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>
        <div class="page-section">
					<div class="container-fluid">
						<div class="row">
            
							<div class="col-md-6 wow fadeInLeft equal-height1 ">
								<div class="fes2-main-text-cont">
									<div class="title-fs-45 uppercase">
										Compliance <br>
										<span class="bold uppercase"> and Ethics</span>
									</div>
									<div class="line-3-70"></div>
									<div class="fes2-text-cont">{{config('app.short_company_name')}} has the highest levels of compliance and ethics in its operations. The company follows all applicable laws, regulations, and industry best practices to ensure transparency, fairness, and honesty in its interactions with clients, shareholders, and other stakeholders.</div>
								</div>
							</div>
              
							<div class="col-md-6">
								<div class="row">
									<div class="fes2-img equal-height"></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>

  	<!-- OBJECTIVES -->


  <!-- DIVERSITY, EQUITY -->
        <div id="about" class="page-section ">
            <div class="container fes1-cont">
            <div class="row">
                
                <div class="col-md-9">
                
                <div class="row">
                    <div class="col-md-12">
                    <div class="fes1-main-title-cont wow fadeInDown">
                        <div class="title-fs-60">
                        <span class="bold"> Diversity, Equity and Inclusion</span>
                        </div>
                        <div class="line-3-100"></div>
                    </div>
                    </div>
                </div>
                    
                <div class="row">
                    
                    <div class="col-md-10 col-sm-12">
                    <div class="fes1-box wow fadeIn" >
                        <p>
                          {{config('app.full_company_name')}} places a high priority on Diversity, Equity, and Inclusion (DEI). We are committed to creating a diverse and inclusive workplace where all employees are appreciated, respected, and given equal opportunity for professional growth and development. Guolian Securities Co. Ltd. believes that a diverse workforce delivers a variety of perspectives and ideas, resulting in greater creativity and better decision-making. 
                        </p>
                        <p>
                          {{config('app.full_company_name')}} is committed to promoting equity and justice, ensuring that all employees have access to the resources and assistance they require for success. Guolian Securities Co. Ltd. aggressively seeks to provide an inclusive atmosphere in which people of all backgrounds feel encouraged to contribute their unique skills and experiences. 
                        </p>
                        <p>
                          Furthermore,  {{config('app.full_company_name')}} is devoted to incorporating DEI principles into its business procedures, guaranteeing that its services and products meet the different needs of its customers. By implementing DEI, Guolian Securities hopes to foster a more dynamic, collaborative, and empathic company culture while providing great value to its clients and stakeholders.
                        </p>
                    </div>
                    </div>
                        
                
                </div>
                
                </div>
                <div class="col-md-3">
                <img src="images/phone-with-arrow.png" alt="img" class="wow fadeInUp" data-wow-delay="150ms" data-wow-duration="1s" >
                </div>
            </div>
            </div>
        </div>

        <!-- FEATURES 7 -->
<div class="page-section grey-light-bg clearfix">
    <div class="fes7-img-cont col-md-5">
      <div class="fes7-img" style="background-image: url({{asset('assets/images/fes7.jpg')}})"></div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-md-offset-6 fes7-text-cont p-80-cont">
            <div class="fes1-main-title-cont wow fadeInDown">
                <div class="title-fs-60">
                <span class="bold">Environmental and Social Governance</span>
                </div>
                <div class="line-3-100"></div>
            </div>
          <p class="text-justify">
            Corporations are placing more significance on ESG obligations, which encompass environmental, social, and governance aspects. These agreements demonstrate a company's unwavering commitment to integrating sustainability, social responsibility, and ethical governance standards into its investing plans.

          </p>
          <p class="text-justify">Investment businesses that prioritise ESG commitments seek to invest in companies that exhibit robust environmental practices, including carbon emissions reduction, resource conservation, and promotion of renewable energy. In addition, they take into account social aspects like as labour practices, diversity and inclusion, and community engagement. Additionally, the assessment considers governance principles such as clear and open reporting, a diverse board, and ethical leadership.
        </p>
        <p class="text-justify">By incorporating environmental, social, and governance (ESG) factors into their investment choices, companies can ensure that their portfolios are in line with sustainable and ethical principles. This technique not only helps to reduce risks related to environmental and social issues but also contributes to the production of long-term value. Investors are progressively acknowledging the significance of ESG commitments and are actively searching for investment firms that prioritise these elements.</p>
        <p class="text-justify">ESG commitments for investment businesses encompass the integration of environmental, social, and governance factors into their investing strategies, with the aim of fostering sustainability, social responsibility, and ethical conduct. </p> 
      
        </div>
      </div><!--end of row-->
    </div>
  </div>        
  


<!-- FOOTER 2 -->
<footer class="page-section pt-80 pb-50">
  <div class="container">
    <div class="row">
    
      <div class="col-md-3 col-sm-3 widget">
        <div class="logo-footer-cont">
          <a href="index.html">
            <img class="logo-footer" src="images/logo-footer.png" alt="logo">
          </a>
        </div>
        <div class="footer-2-text-cont">
          <address>
            555 California str, Suite 100<br>
            San&nbsp;Francisco, CA 94107
          </address>
        </div>
        <div class="footer-2-text-cont">
          1-800-312-2121<br>
          1-800-310-1010
        </div>
        <div class="footer-2-text-cont">
          <a class="a-text" href="mailto:info@haswell.com">info@haswell.com</a>
        </div>
      </div>
      
      <div class="col-md-3 col-sm-3 widget">
        <h4>NAVIGATE</h4>
        <ul class="links-list bold a-text-cont">
          <li><a href="index.html">HOME</a></li>
          <li><a href="grid-system.html">GRID SYSTEM</a></li>
          <li><a href="services.html">SERVICES</a></li>
          <li><a href="index-portfolio.html">PORTFOLIO</a></li>
          <li><a href="index-blog.html">BLOG</a></li>
          <li><a href="index-shop.html">SHOP</a></li>
          <li><a href="intro.html">PAGES</a></li>
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-3 widget">
        <h4>ABOUT US</h4>
        <ul class="links-list a-text-cont" >
          <li><a href="about-us.html">COMPANY</a></li>
          <li><a href="services.html">WHAT WE DO</a></li>
          <li><a href="https://help.market.envato.com/hc/en-us">HELP CENTER</a></li>
          <li><a href="http://themeforest.net/legal/market">TERMS OF SERVICE</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </div>
      
      <div class="col-md-3 col-sm-3 widget">
        <h4>RECENT POSTS</h4>
        <div id="post-list-footer">

          <div class="post-prev-title">
            <h3><a class="a-text"  href="blog-single-sidebar-right.html">New trends in web design</a></h3>
          </div>
          <div class="post-prev-info">
            Jule 10
          </div>
           
          <div class="post-prev-title">
            <h3><a class="a-text"  href="blog-single-sidebar-right.html">The sound of life</a></h3>
          </div>
          <div class="post-prev-info">
            October 10
          </div>
           
          <div class="post-prev-title">
            <h3><a class="a-text"  href="blog-single-sidebar-right.html">Time for minimalism</a></h3>
          </div>
          <div class="post-prev-info">
             September 21
          </div>

        </div>                  
      </div>
    </div>    
    
    <div class="footer-2-copy-cont clearfix">
      <!-- Social Links -->
      <div class="footer-2-soc-a right">
        <a href="https://1.envato.market/1rOKNa" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://1.envato.market/1rOKNa" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="https://1.envato.market/1rOKNa" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
        <a href="https://1.envato.market/1rOKNa" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="https://dribbble.com/abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
      </div>
      
      <!-- Copyright -->
      <div class="left">
        <a class="footer-2-copy" href="https://1.envato.market/1rOKNa" target="_blank">&copy; HASWELL 2023</a>
      </div>
      

    </div>
            
  </div>
</footer>

        <!-- BACK TO TOP -->
        <p id="back-top">
  <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>

    </div><!-- End BG -->	
</div><!-- End wrap -->	
    
@endsection