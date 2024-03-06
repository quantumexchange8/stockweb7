@extends('layouts.master')
@section('title', 'Login | ' . config('app.full_company_name'))


@section('content')
<div class="container p-160-cont pt-sm-60">

    <!-- LOGIN / REGISTER CONTAINER -->
    <div class="row">
      
      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 tabs-6">

        <!-- NAV TABS -->
        <div class="">
          <ul class="nav nav-tabs bootstrap-tabs mb-0">
            
            <li class="active">
              <a href="#login-link" data-toggle="tab">Login</a>
            </li>
            
            <li>
              <a href="#reg-link" data-toggle="tab">Registration</a>
            </li>
            
          </ul>
        </div>
        
        <!-- TAB PANELS --> 
        <div class="tab-content tab6-cont">
          
          <div class="tab-pane fade in active" id="login-link">
            
              <!-- LOGIN FORM -->                            
              <form id="login-form">
                
                <!-- INPUTS -->
                <div class="row mt-30">
                  
                  <!-- USERNAME -->
                  <div class="col-md-12 mb-15">
                    <input type="text" name="username" id="username" class="controled" placeholder="USERNAME" required>
                  </div>
                  
                  <!-- PASSWORD -->
                  <div class="col-md-12 mb-15 mb-sm-15">
                    <input type="password" name="password" id="password" class="controled" placeholder="PASSWORD" required>
                  </div>
                      
                </div>
                
                <!-- BUTTONS -->
                <div class="row">
                  <div class="col-md-6 text-sm-center mb-20 mb-sm-10">
                    <a class="pt-10" href="#"><small>Forgot password?</small></a>
                  </div>
                  
                  <div class="col-md-6 mb-50 text-sm-center text-right">
                    <input id="remember-me" name="rememberme" type="checkbox" style="vertical-align:middle; margin:0" value="true">
                    <label class="font-norm" for="remember-me"><small>Remember me</small></label>
                  </div>

                  <div class="col-md-12">
                    <input type="submit" value="LOGIN" class="button rounded medium gray font-open-sans btn-block">
                  </div>
                </div>
                
              </form>
        
              <!-- END LOGIN FORM -->
            
          </div>
          
          <div class="tab-pane fade" id="reg-link">
            
            <!-- REGISTRY FORM -->   
            <form id="reg-form">
                <div class="row mt-30">
                  
                  <!-- EMAIL -->
                  <div class="col-md-12 mb-15">
                    <input type="text" name="Email" id="Email" class="controled" placeholder="EMAIL" required>
                  </div>
                  
                  <!-- USERNAME -->
                  <div class="col-md-12 mb-15">
                    <input type="text" name="username" id="username-reg" class="controled" placeholder="USERNAME" required>
                  </div>
                  
                  <!-- PASSWORD -->
                  <div class="col-md-12 mb-15">
                    <input type="password" name="password" id="password-reg" class="controled" placeholder="PASSWORD" required>
                  </div>
                  
                  <!-- RE-ENTER PASSWORD -->
                  <div class="col-md-12 mb-50 mb-sm-30">
                    <input type="password" name="re-password" id="re-password-reg" class="controled" placeholder="RE-ENTER PASSWORD" required>
                  </div>
                  
                  <!-- SEND BUTTON -->
                  <div class="col-md-12">
                    <input type="submit" value="REGISTER" class="button rounded medium gray font-open-sans btn-block mb-15">
                  </div>
                      
                </div>
               
            </form>
            <!-- END REGISTRY FORM -->
            
          </div>
          
        </div>   
    
      </div>   
  
    </div>
 
  </div>
      
@endsection