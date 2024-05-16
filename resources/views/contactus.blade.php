@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/contact-header.png') }}" alt="{{config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->

    <section class="Login-section pt-120 pb-120">
        <div class="container">
            <div class="section-header text-center">
                <h2>Drop us a line!</h2>
            </div>
            <div class="login-inner-box-sec">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="login-form" id="contactus-form" action="{{ route('submitContactForm') }}" method="POST">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" />
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" />
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="phone_number">Phone Number</label>
                        <input type="tel" id="phone_number" name="phone_number" placeholder="Enter your phone number" class="form-control" />
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="message">Message</label>
                        <textarea id="message" name="message" rows="6" class="form-control" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group mb-4">
                        <button type="Submit" value="" class="btn"> Submit <svg class="ms-2" width="27"
                                height="18" viewBox="0 0 27 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
