@extends('layouts.app')

@section('content')
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/signup-header.png')}}" alt="" />   
    </div>
    <div class="ps-breadcrumb">
        <h2>Create an Account</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create an Account</li>
            </ol>
          </nav>
    </div>
</section>
<section class="Login-section pt-120 pb-120">
    <div class="container">
         <div class="section-header text-center">
             <h2>Create an Account</h2>
         </div>
         <div class="login-inner-box-sec">
          <form class="login-form" id="" action="{{ route('register') }}" method="POST">
          @csrf
            <div class="row">
                <div class="col-lg-6">
                     <div class="login-column">
                          <div class="sec-title">
                              <h2>Account Information</h2>
                          </div>
                          <div class="form-group mb-4">
                              <label for="name" class="form-label">{{ __('Name') }}</label>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group mb-4">
                                <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group mb-4">
                              <label class="form-label" for="password">{{ __('Password') }}</label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group mb-4">
                              <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                     </div>
                </div>
                <div class="col-lg-6">
                  <div class="login-column">
                      <div class="sec-title">
                        <h2>Billing Information</h2>
                      </div>
                      <div class="form-group mb-4">
                          <label class="form-label">First Name</label>
                          <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                            <label class="form-label">Last Name</label>
                          <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-label">Country/Region</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-label">Address1</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-label">Address2(optional)</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-label">Zip Code</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-label">City</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <label class="form-label">State</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div> 
                      <div class="form-group mb-4">
                        <label class="form-label">Phone Number</label>
                        <input type="text" placeholder="" class="form-control" />
                      </div>
                      <div class="form-group mb-4">
                        <button type="submit" value="" class="btn">{{ __('Register') }} <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                          <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17" stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                          </svg></button>
                      </div>
                  </div>
             </div>
            </div>
          </form>
         </div>
    </div>
</section>
@endsection
