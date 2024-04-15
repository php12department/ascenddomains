@extends('layouts.app')

@section('content')

<!-- Page header section start -->
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/login-header.png')}}" alt="" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Login</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
          </nav>
    </div>
</section>
<!-- Page header section end -->

<!-- Login section start -->
<section class="Login-section pt-120 pb-120">
    <div class="container">
         <div class="section-header text-center">
             <h2>Login</h2>
         </div>
         <div class="login-inner-box-sec">
            <div class="row">
                <div class="col-lg-6">
                     <div class="login-column">
                          <div class="sec-title">
                                <h2>New Customers</h2>
                          </div>
                          <div class="continue-btn">
                            <a href="#" class="btn">
                              Continue <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                 <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                 <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                 </svg>
                             </a>
                          </div>
                     </div>
                </div>
                <div class="col-lg-6">
                  <div class="login-column">
                       <div class="sec-title">
                             <h2>Returning Customer</h2>
                       </div>
                      <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                           <div class="form-group mb-4">
                                <h4>Already have an account?<a href="{{ route('register')}}">Sign in here</a></h4>
                           </div>
                           <div class="form-group mb-4">
                               <label class="form-label">Email</label>
                               <input type="email" placeholder="" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group mb-4">
                             <label class="form-label">Password</label>
                             <input type="password" placeholder="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                          <div class="forgot-password mb-3">
                              <a href="{{ route('password.update')}}">Forgot your password?</a>
                          </div>
                          <div class="form-group mb-4">
                            <button type="submit" value="" class="btn"> Sing in <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                              <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                              </svg></button>
                          </div>
                         
                      </form>
                  </div>
             </div>
            </div>
         </div>
    </div>
</section>
<!-- Premium Domain section end -->
@endsection
