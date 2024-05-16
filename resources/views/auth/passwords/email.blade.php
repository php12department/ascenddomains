@extends('layouts.app')

@section('content')
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/login-header.png')}}" alt="{{config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Forgot Password</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
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
                             <h2>Forgot Password</h2>
                       </div>
                       @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <form class="login-form"  method="POST" action="{{ route('password.email') }}">
                        @csrf
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
