@extends('layouts.app')

@section('content')
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/account-header.png') }}" alt="{{config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>My Account</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">My Account</li>
            </ol>
        </nav>
    </div>
</section>
<section class="Account-section pt-120 pb-120">
    <div class="container">
        <div class="profile-user">
            <div class="user-image">
                <img src="{{ asset('assets/img/home/user.png') }}" alt="{{config('app.name') }}" />
            </div>
            <div class="user-text">
                <h2>{{ Auth::check() ? Auth::user()->name : '' }}</h2>
            </div>
        </div>
        <form class="account-form" method="POST" action="{{ route('update-account-info') }}">
            @csrf
            <h2 class="sec-title">Account Information</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" placeholder="User name" class="form-control" name="user_name" value="{{ Auth::check() ? Auth::user()->name : '' }}" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Email</label>
                        <input type="text" placeholder="LoremIpsim@gmail.com" class="form-control" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}"/>
                    </div>
                  </div>
            </div>

            <h2 class="sec-title">Billing Information</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-4">
                        <label class="form-label">First Name</label>
                        <input type="text" placeholder="First Name" class="form-control" name="billing_first_name" value="{{ Auth::check() ? Auth::user()->billingInformation->first_name : '' }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                      <label class="form-label">Last Name</label>
                      <input type="text" placeholder="Last Name" class="form-control" name="billing_last_name" value="{{ Auth::check() ? Auth::user()->billingInformation->last_name : '' }}"/>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                      <label class="form-label">Country/Region</label>
                      <input type="text" placeholder="Country Name" class="form-control" name="country" value="{{ Auth::check() ? Auth::user()->billingInformation->country : '' }}"/>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                      <label class="form-label">Address1</label>
                      <textarea class="form-control" rows="5" name="address1" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pharetra congue ante">
                        {{ Auth::check() ? Auth::user()->billingInformation->address1 : '' }}
                      </textarea>
                  </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-4">
                        <label class="form-label">Address2(optional)</label>
                        <textarea class="form-control" name="address1" rows="5" placeholder="">
                            {{ trim(Auth::check() ? Auth::user()->billingInformation->address2 : '') }}
                        </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                   <div class="form-group mb-4">
                      <label class="form-label">Zip Code</label>
                      <input type="text" placeholder="0123456" class="form-control" name="zip_code" value="{{ Auth::check() ? Auth::user()->billingInformation->zip_code : '' }}"/>
                   </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-4">
                     <label class="form-label">City</label>
                     <input type="text" placeholder="Lorem ispum" class="form-control" name="city" value="{{ Auth::check() ? Auth::user()->billingInformation->city : '' }}"/>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group mb-4">
                    <label class="form-label">State</label>
                    <input type="text" placeholder="Lorem ispum" class="form-control" name="state" value="{{ Auth::check() ? Auth::user()->billingInformation->state : '' }}" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                    <label class="form-label">Phone Number</label>
                    <input type="text" placeholder="0123456789" class="form-control" name="phone_number" value="{{ Auth::check() ? Auth::user()->billingInformation->phone_number : '' }}" />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-4">
                       <button type="submit" value="submit" class="btn btn-primary">submit</button>
                  </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
