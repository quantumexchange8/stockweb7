@extends('layouts.master')
@section('title', 'About Us | ' . config('app.full_company_name'))


@section('content')


        <!-- PAGE TITLE -->
        <div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
          <div class="relative container align-left">
            <div class="row">
              
              <div class="col-md-8">
                <h1 class="page-title2">ABOUT US</h1>
            
              </div>
              
              <div class="col-md-4">
                <div class="breadcrumbs white-text">
                  <a href="{{ url('/') }}">Home</a>    <i class="icon icon-arrows-right"></i>
                <span class="bread-current">ABOUT US</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    
        <!-- ABOUT US DESCRIPTION -->
        <div class="page-section fes4-cont">
            <div class="container">
              <div class="row">
                      <div class="col-xs-12 col-sm-4 col-md-4 wow bounceInLeft">
                          <div class="fes4-box wow fadeIn">
                            <h2 class="section-title" style="font-size:50px">ABOUT <span class="bold">US</span></h2>
                          </div>
                      </div>            
                      <div class="col-xs-12 col-sm-8 col-md-8">
                        <div class="fes4-box wow fadeInRight" data-wow-delay="200ms">
                              <p class="title-fs-35 ">
                                Since we first opened our doors in 2020, {{config('app.full_company_name')}} has steadily developed a reputation for being the go-to resource for investors who are looking for information before it is released to the public. The company provides a combination of excellent returns and sustainable growth for its clients.
                              </p>
                              <p class="title-fs-35 ">
                                There are those who have been where you are, so you don't need to face this challenge alone. Join us now and allow us to bring you to a better future by guiding you through the process.
                              </p>
                        </div>
                </div>
              </div> 
            </div>
        </div>
        <!-- WHY CHOOSE US -->
        <div class="page-section p-60-cont">
          <div class="container">
            <div class="col-md-12">
              <div>
                <div class="title-fs-45 uppercase keft-50 wow bounceInDown">
                WHY
                    <span class="bold uppercase">{{ config('app.full_company_name') }}?</span>
                </div>
                <div class="line-3-100"></div>
                  <p>When considering the offering of wealth management services, it is of the utmost importance to choose a company that possesses an excellent track record, a comprehensive variety of offerings, and an approach that is centred on the client. As a major financial institution, {{ config('app.full_company_name') }} provides a compelling proposal for individuals who are looking for services related to wealth management.</p>
                  
                <p class="mt-10 bold">Some of the reasons why a client ought to take into consideration Guolian Securities Co. Ltd. are as follows: </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <ul class="icon-list">
                  <li><i class="fa fa-angle-right"></i><span class="bold"> Reputation and Expertise : </span></li><p >{{ config('app.full_company_name') }} is renowned for its excellent reputation and substantial competence in the field of finance which it has earned over the years. The capacity of the firm to efficiently manage their wealth is something that clients can have faith in because it has a track record of offering high-quality services and a team of specialists with years of experience.</p>
                  <li class="mt-10"><i class="fa fa-angle-right"></i><span class="bold">Diverse Range Of Services : </span> </li><p >The wealth management services offered by Guolian Securities Co. Ltd. are extensive and varied, and they are tailored to meet the specific requirements and objectives of each individual client. We provide a full suite of solutions to assist clients in accomplishing their financial goals. These solutions include investment advice services, estate planning, and risk management.</p> 
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="icon-list">
                  <li><i class="fa fa-angle-right"></i><span class="bold"> Customised Approach :  </span></li> <p >With the understanding that every client has a unique set of financial circumstances and goals, {{ config('app.full_company_name') }}  takes a personalised approach to the management of their clients' money. By taking the time to learn about the preferences, risk tolerance, and goals of the clients, the company is able to create strategies that are in line with the specific requirements of each unique client.</p>  

                  <li class="mt-10"><i class="fa fa-angle-right"></i><span class="bold">Research and Analysis :  </span> </li><p > The wealth management strategies that {{ config('app.full_company_name') }} employs are informed by the company's extensive research capabilities and in-depth market analysis. With access to important insights and suggestions that are powered by data, clients are able to make informed decisions about their investments, which is a benefit to the clients.</p>
                </ul>
              </div>

            </div>
            <div class="col-md-12">
              <div>
                <div class="fes2-text-cont ">
                  In conclusion, {{ config('app.full_company_name') }} stands out as an appealing option for those seeking wealth management services due to its solid reputation, extensive offers, personalised approach, research-driven tactics, and unwavering commitment to client satisfaction.
                </div>
                
              </div>
            </div>
          </div>
        </div>

  	    <!-- OBJECTIVES -->
        <div class="page-section grey-light-bg p-60-cont">
          <div class="container wow fadeInRight">
            <div class="col-md-12">
              <div>
                <div class="title-fs-45">
                  OUR 
                    <span class="bold uppercase"> Objectives:</span>
                </div>
                <div class="line-3-100"></div>
                <div class="fes2-text-cont ">The objectives of {{config('app.full_company_name')}} are to provide its clients with comprehensive brokerage services and wealth management solutions. {{ config('app.full_company_name') }}, a major securities firm, intends to fulfil the following objectives:</div>

            </div>
            </div>
          </div>
        </div>
				<div class="page-section">
					<div class="container">
						<div class="row">
            
							<div class="col-md-6 wow fadeInLeft equal-height1 fes2-main-text-cont">
									<div class="title-fs-45">
										Client <br>
										<span class="bold">Satisfaction</span>
									</div>
									<div class="line-3-70"></div>
									<div class="fes2-text-cont ">{{ config('app.full_company_name') }} seeks to suit its clients' diversified demands by providing a broad range of financial products and services. The organisation attempts to deliver personalised solutions that are consistent with each client's financial goals and risk tolerance.</div>
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
					<div class="container">
						<div class="row">
							
							<div class="col-md-6 left-50 wow fadeInRight equal-height1 fes2-main-text-cont">
									
										<div class="title-fs-45">
											Risk <br>
											<span class="bold">Management</span>
										</div>
										<div class="line-3-100"></div>
										<div class="fes2-text-cont">{{ config('app.full_company_name') }} lays a strong emphasis on risk management. The corporation has built a strong risk management framework with clear objectives, principles, and organisational structures. Guolian Securities aspires to defend its clients' interests while also maintaining operational stability by successfully managing risks.</div>
									
							</div>
              
              <div class="col-md-6 right-50">
								<div class="row">
									<div class="fes3-img equal-height" style="max-width: 500px; float:right;" ></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>
        <div class="page-section">
					<div class="container">
						<div class="row">
            
							<div class="col-md-6 wow fadeInLeft equal-height1 fes2-main-text-cont">
								
									<div class="title-fs-45">
										Compliance <br>
										<span class="bold"> and Ethics</span>
									</div>
									<div class="line-3-70"></div>
									<div class="fes2-text-cont">{{ config('app.full_company_name') }} has the highest levels of compliance and ethics in its operations. The company follows all applicable laws, regulations, and industry best practices to ensure transparency, fairness, and honesty in its interactions with clients, shareholders, and other stakeholders.</div>
								
							</div>
              
							<div class="col-md-6">
								<div class="row">
									<div class="fes4-img equal-height"></div>
								</div>
							</div>
              
						</div>
					</div>
				</div>

    
        <!-- DIVERSITY, EQUITY -->
          <div id="about" class="page-section">
            <div class="container fes1-cont">
              <div class="row">
                <div class="col-md-12">
                
                  <div class="row">
                    <div class="col-md-12">
                      <div class="fes1-main-title-cont wow fadeInDown">
                        <div class="title-fs-45 uppercase">
                          Diversity, Equity<br>
                          <span class="bold">& Inclusion</span>
                        </div>
                        <div class="line-3-100"></div>
                      </div>
                    </div>
                  </div>
                      
                  <div class="row">
                      
                    <div class="col-md-12 col-sm-12">
                      <div class="fes1-box wow fadeIn" >
                
                        <p >
                          {{config('app.full_company_name')}} places a high priority on Diversity, Equity, and Inclusion (DEI). We are committed to creating a diverse and inclusive workplace where all employees are appreciated, respected, and given equal opportunity for professional growth and development.  {{ config('app.full_company_name') }} believes that a diverse workforce delivers a variety of perspectives and ideas, resulting in greater creativity and better decision-making. 
                        </p>
                        <p >
                          {{ config('app.full_company_name') }} is committed to promoting equity and justice, ensuring that all employees have access to the resources and assistance they require for success.  {{ config('app.full_company_name') }} aggressively seeks to provide an inclusive atmosphere in which people of all backgrounds feel encouraged to contribute their unique skills and experiences. 
                        </p>
                        <p >
                          Furthermore,  {{ config('app.full_company_name') }} is devoted to incorporating DEI principles into its business procedures, guaranteeing that its services and products meet the different needs of its clients. By implementing DEI,  {{ config('app.full_company_name') }} hopes to foster a more dynamic, collaborative, and empathic company culture while providing great value to its clients and stakeholders.
                        </p>
                      </div>
                    </div>
            
                        
                  </div>                   
                      
                </div>
              
               
                
            
              </div>
            </div>
          </div>

          <div class="page-section">
            <div class="container"  style="padding-bottom:30px;">
              <div class="row">
                
                <div class="col-md-6 left-50 wow fadeInRight equal-height1">
                    
                      <div class="title-fs-45">
                        Environmental &  <br>
                        <span class="bold">Social Governance</span>
                      </div>
                      <div class="line-3-100"></div>
                      <div class="fes2-text-cont">
                        <p>With a holistic approach to development, infrastructure, and environmental demands, {{ config('app.full_company_name') }}'s work helps increase mobility, enhance communities, build resilience, and contribute to economic vitality. </p>
                        <p> These are all things that are accomplished through the organization's work. Throughout all of our markets, services, and activities, we incorporate sustainability and operate as stewards of the firm, ensuring that {{ config('app.full_company_name') }} is always in a better position for the generations that will come after us.</p>
                        <p>{{ config('app.full_company_name') }} is profoundly rooted in the Environmental, Social, and Governance (ESG) framework, which is thoroughly embedded in the fabric of the company thanks to its Generational Company philosophy and our historic Core Values.</p>
                      </div>
                    
                </div>
                
                <div class="col-md-6 right-50">
                  <div class="row">
                    <div class="fes8-img equal-height" style="max-width: 500px; float:left; " ></div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

       






        <!-- BACK TO TOP -->
<p id="back-top">
  <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
</p>

 
@endsection