@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/login-header.png')}}" alt="" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Reset Password</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
            </ol>
          </nav>
    </div>
</section>
<section class="Login-section pt-120 pb-120">
    <div class="container">
         <div class="login-inner-box-sec">
            <div class="row">
                <div class="col-lg-12">
                  <div class="login-column">
                       <div class="sec-title">
                             <h2>{{ __('Reset Password') }}</h2>
                       </div>
                      <form class="login-form"  method="POST"  action="{{ route('password.update') }}">
                      @csrf
                            <input type="hidden" name="token" value="{{ $token }}">    
                                                   <div class="form-group mb-4">
                               <label class="form-label" for="email" >{{ __('Email Address') }}</label>
                               <input type="email" placeholder="Please enter email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
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
                          <div class="form-group mb-4">
                            <button type="submit" value="" class="btn"> Reset <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
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


@endsection
