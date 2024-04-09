@extends('layouts.master')
@section('title', 'ESG Statement  | ' . config('app.full_company_name'))

@section('content')


<!--PAGE HEADER-->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
    <div class="relative container align-left">
      <div class="row">
        <div class="col-md-8">
          <h1 class="page-title2 uppercase">ESG STATEMENT</h1>
        </div>
        <div class="col-md-4">
          <div class="breadcrumbs white-text">
            <a href="{{ url('/') }}">Home</a>    <i class="icon icon-arrows-right"></i>
           <span class="bread-current">ABOUT US</span> / <span class="bread-current uppercase">ESG Statement</span>
          </div>
        </div>
      </div>
    </div>
</div>

<!--TITLE AND INTRO-->
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-100 wow fadeInLeft">
                
                    <div class="title-fs-45 uppercase">
                      <span class="bold">ESG STATEMENT</span> 
                    </div>
                    <div class="line-3-100"></div>
                    <p >
                        Corporations are placing more significance on ESG obligations, which encompass environmental, social, and governance aspects. These agreements demonstrate a company's unwavering commitment to integrating sustainability, social responsibility, and ethical governance standards into its investing plans.
                      </p>
                      <p >Investment businesses that prioritise ESG commitments seek to invest in companies that exhibit robust environmental practices, including carbon emissions reduction, resource conservation, and promotion of renewable energy. In addition, they take into account social aspects such as labour practices, diversity and inclusion, and community engagement. Additionally, the assessment considers governance principles such as clear and open reporting, a diverse board, and ethical leadership.
                      </p>
                      <p >By incorporating environmental, social, and governance (ESG) factors into their investment choices, companies can ensure that their portfolios are in line with sustainable and ethical principles. This technique not only helps to reduce risks related to environmental and social issues but also contributes to the production of long-term value. Investors are progressively acknowledging the significance of ESG commitments and are actively searching for investment firms that prioritise these elements.</p>
                      <p >ESG commitments for investment businesses encompass the integration of environmental, social, and governance factors into their investing strategies, with the aim of fostering sustainability, social responsibility, and ethical conduct. </p>           
                </div>
        </div>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-50">
                    <div class="fes2-main-text-cont">
                        <div class="title-fs-45">
                            Environment</span> 
                        </div>
                        <div class="line-3-100"></div>
                        <p>Taking on the role of stewards for future generations, {{ config('app.full_company_name') }} will:</p>
                        <p>
                          <ul class="icon-list">
                              <li><i class="fa fa-angle-double-right"></i>Reduce the impact of our operations in order to combat climate change, pollution, and other negative environmental impacts.
                              </li>
                              <li><i class="fa fa-angle-double-right"></i>Include ecologically responsible and sustainable techniques in each and every one of the services that we offer to our customers.</li>
                          </ul>
                        </p>
                    </div>
            </div>
                <div class="col-md-6 right-50 wow fadeInLeft">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/environment.jpg')}}" alt="img">
                    </div>
                </div>
        </div>
    </div>
</div> 
<hr class="mt-0 mb-0">	

<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6  ">
                    <div class="fes2-main-text-cont">
                        <div class="title-fs-45">
                            Social
                        </div>
                        <div class="line-3-100"></div>
                        <ul class="icon-list">
                            <li><i class="fa fa-angle-double-right"></i>Maintain a culture of integrity that holds {{ config('app.full_company_name') }} and its employees accountable to the highest ethical standards, and continue to bring this culture into existence.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Develop a workplace that is varied and welcoming, one that encourages all members of the team to be themselves in their fullest, most genuine form.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>It is important to engage with groups who are underrepresented and to provide equal chances in the areas of recruitment, the workplace, and advancement.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Make use of a variety of viewpoints in order to come up with ideas that will give advantages to our communities in an equitable manner.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Employees should be given the opportunity to pursue occupations that are lucrative while also having their wellness, health, and safety prioritised.</li>
                        </ul>
                        <p>By participating in philanthropic events and volunteering, we may show our support for our communities.</p>
                    </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/social.jpg')}}" alt="img">
                    </div>
            </div>
        </div>
    </div>
</div>        
<hr class="mt-0 mb-0">	
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-50">
                    <div class="fes2-main-text-cont">
                        <div class="title-fs-45">
                            Governance
                        </div>
                        <div class="line-3-100"></div>
                        <ul class="icon-list">
                            <li><i class="fa fa-angle-double-right"></i>Establish a committee that is accountable to the Board in order to establish and keep {{ config('app.full_company_name') }} accountable for its lofty environmental, social, and governance obligations
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Maintain an industry-leading compliance programme that not only contributes to the future development of {{ config('app.full_company_name') }}'s ethical culture but also gives employees the ability to discuss and report ethical concerns.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Establish ambitious environmental, social, and governance (ESG) performance standards and targets for our operations and the projects we are working on for our clients.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Use recognised third-party frameworks to disclose our environmental, social, and governance (ESG) performance in public in order to promote accountability and transparency.
                            </li>
                        </ul>
                    </div>
            </div>
                <div class="col-md-6 right-50 wow fadeInLeft">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/governance.jpg')}}" alt="img">
                    </div>
                </div>
        </div>
    </div>
</div> 

@endsection