@extends('layouts.master')
@section('title', 'Philanthropy  | ' . config('app.full_company_name'))

@section('content')

<!-- PAGE TITLE LARGE IMG -->
<div class="page-title-cont page-title-large page-title-img grey-dark-bg pt-250" style="background-image: url('{{asset('assets/images/revo-slider/citybg.jpg')}}')">
    <div class="relative container align-left">
      <div class="row">
        <div class="col-md-8">
          <h1 class="page-title2 uppercase">Philanthropy</h1>
        </div>
        <div class="col-md-4">
          <div class="breadcrumbs white-text">
            <a href="{{ url('/') }}">Home</a>    <i class="icon icon-arrows-right"></i>
           <span class="bread-current">ABOUT US</span> / <span class="bread-current uppercase">Philanthropy</span>
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
                      <span class="bold"> Philanthropy</span> 
                    </div>
                    <div class="line-3-100"></div>
                    <div >{{ config('app.full_company_name') }} is dedicated to make a meaningful contribution to society through its philanthropic initiatives. The company is actively involved in philanthropic public welfare activities, displaying its commitment to give back to the community.</div>
                    <div class="mt-30">
                        <div class="fes2-text-cont">Here are some important highlights of {{config('app.full_company_name')}} Philanthropic efforts:</div>
 
                    </div>
                </div>
        </div>
    </div>
</div>
<!--CONTENT-->
<div class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-50">
                    <div class="fes2-main-text-cont">
                        <div class="title-fs-45">
                            Financial <span class="bold">Assistance</span> 
                        </div>
                        <div class="line-3-100"></div>
                        <div >{{ config('app.full_company_name') }} offers financial support to numerous philanthropic organisations and activities. By providing financial assistance, the corporation contributes to the growth and sustainability of these organisations, allowing them to continue out their critical work. </div>
                    </div>
            </div>
                <div class="col-md-6 right-50 wow fadeInLeft">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/fa.jpg')}}" alt="img">
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
                            Public Welfare
                            <span class="bold"> Activities</span>
                        </div>
                        <div class="line-3-100"></div>
                        <div >The corporation actively supports education, poverty alleviation, healthcare, and environmental conservation. {{ config('app.full_company_name') }} recognises the importance of these sectors in creating a better society and tries to make a significant contribution. </div>
                    </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/public-welfare.jpg')}}" alt="img">
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
                            Corporate Social <span class="bold"> Responsibility</span> 
                        </div>
                        <div class="line-3-100"></div>
                        <div >{{ config('app.full_company_name') }} prioritises corporate social responsibility by promoting sustainable practices and activities. The company aspires to reduce its environmental effect, promote ethical business practices, and support social causes that shares its ideals. 
                        
                        </div><br>
                        <div>{{ config('app.full_company_name') }} charitable efforts highlight its commitment to corporate social responsibility and its desire to make a positive difference in the lives of individuals and communities.</div>
                    </div>
            </div>
                <div class="col-md-6 right-50 wow fadeInLeft">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/csr.jpg')}}" alt="img">
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
                            Employee
                            <span class="bold"> Engagement</span>
                        </div>
                        <div class="line-3-100"></div>
                        <div > {{ config('app.full_company_name') }} encourages employees to engage in philanthropic initiatives. The company organises volunteer programmes and projects that allow employees to donate their time and expertise to a variety of philanthropic causes. This not only benefits society but also instils a sense of purpose and fulfilment in personnel. </div>
                    </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                 <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/engagement.jpg')}}" alt="img">
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
                            Partnerships & <span class="bold">Collaborations</span> 
                        </div>
                        <div class="line-3-100"></div>
                        <div >{{ config('app.full_company_name') }} works with other organisations in the financial sector and beyond to enhance the effect of its charitable initiatives. By collaborating with like-minded organisations, the firm may combine its resources, skills, and networks to more effectively address social concerns.
                        </div>
                    </div>
            </div>

                <div class="col-md-6 right-50 wow fadeInLeft">
                    <div class="ads-img-cont" >
                        <img src="{{asset('assets/images/partnerships.jpg')}}" alt="img">
                    </div>
                </div>
        </div>
    </div>
</div> 

@endsection