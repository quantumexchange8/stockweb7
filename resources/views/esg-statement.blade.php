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

<div class="page-section">
    <div class="container bs-docs-container p-140-cont">
        <div class="row">
            <div class="col-md-11 col-md-offset-0">
                <div id="tabs" class="mb-45 bs-docs-section text-center">
                    <div class="heading-underline h3-line">
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <ul id="myTab" class="nav nav-tabs bootstrap-tabs">
                                    <li  class="active"><a href="#overview" class="a-inv" data-toggle="tab">Overview</a></li>
                                    <li><a href="#environment" class="a-inv" data-toggle="tab">Environment</a></li>
                                    <li><a href="#social" class="a-inv" data-toggle="tab">Social</a></li>
                                    <li><a href="#governance" class="a-inv" data-toggle="tab">Governance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="myTabContent" class="tab-content col-md-offset-1">
                    <div class="tab-pane fade text-color-darkgrey" id="environment">
                      <p>Taking on the role of stewards for future generations, {{ config('app.full_company_name') }} will:</p>
                      <p>
                        <ul class="icon-list">
                            <li><i class="fa fa-angle-double-right"></i>Reduce the impact of our operations in order to combat climate change, pollution, and other negative environmental impacts.
                            </li>
                            <li><i class="fa fa-angle-double-right"></i>Include ecologically responsible and sustainable techniques in each and every one of the services that we offer to our customers.</li>
                        </ul>
                      </p>
                    </div>
                    <div class="tab-pane fade text-color-darkgrey" id="social">
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
                    <div class="tab-pane fade text-color-darkgrey" id="governance">
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
                    <div class="tab-pane fade in active text-color-darkgrey" id="overview">
                        <p>With a holistic approach to development, infrastructure, and environmental demands, {{ config('app.full_company_name') }}'s work helps increase mobility, enhance communities, build resilience, and contribute to economic vitality. </p>
                        <p> These are all things that are accomplished through the organization's work. Throughout all of our markets, services, and activities, we incorporate sustainability and operate as stewards of the firm, ensuring that {{ config('app.full_company_name') }} is always in a better position for the generations that will come after us.</p>
                        <p>{{ config('app.full_company_name') }} is profoundly rooted in the Environmental, Social, and Governance (ESG) framework, which is thoroughly embedded in the fabric of the company thanks to its Generational Company philosophy and our historic Core Values.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection