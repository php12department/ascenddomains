@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/about-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>About Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->

    <!-- Aboutus section start  -->
    <section class="Aboutus-section pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="About-Image">
                        <img src="{{ asset('assets/img/home/abt-left.png') }}" alt="{{ config('app.name') }}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="About-text ms-lg-5">
                        <h4>Welcome to Ascend Domains</h4>
                        <p>At Ascend Domains, we believe in the power of briefly describe the core purpose of your website
                            or platform. Our journey began with a simple idea: to mention the inspiration or motivation
                            behind starting the website. Since then, we've been on a mission to briefly describe the main
                            goal or objective of your website, e.g., "empower individuals," "spark creativity," "foster
                            collaboration," etc. </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Aboutus section end  -->

    <!-- Best Service section start -->
    <section class="Best-service pb-lg-5">
        <div class="container">
            <div class="section-header mb-lg-4 mb-2">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Best Service<br>
                            For Customers.</h2>
                    </div>
                    <div class="col-lg-6">
                        <p>Ascend Domains is to simplify the process of acquiring and managing domain names while delivering
                            exceptional value and customer service. We strive to be the go-to destination for individuals
                            and businesses seeking to establish their online presence.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/home/services-icon.png') }}" class="mb-3" />
                        <h4>Domain Management</h4>

                        <p>Effortlessly manage your domain portfolio, including DNS settings, WHO is information, and
                            renewals, all from one centralized dashboard.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/home/services-icon.png') }}" class="mb-3" />
                        <h4>Customer Support</h4>
                        <p>Our dedicated support team is available around the clock to assist you with any inquiries or
                            issues you may have, ensuring a smooth and hassle-free experience.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/home/services-icon.png') }}" class="mb-3" />
                        <h4>Premium Features</h4>
                        <p>Unlock premium features such as domain privacy protection, SSL certificates, and professional
                            email services to enhance your online presence and security.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/home/services-icon.png') }}" class="mb-3" />
                        <h4>Domain Registration</h4>
                        <p>Secure your unique online identity with ease through our intuitive domain registration process.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/home/services-icon.png') }}" class="mb-3" />
                        <h4>Reliability</h4>
                        <p>With our robust infrastructure and industry-leading security measures, you can trust that your
                            domains are in safe hands.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-box">
                        <img src="{{ asset('assets/img/home/services-icon.png') }}" class="mb-3" />
                        <h4>Affordability</h4>
                        <p>We offer competitive pricing and transparent pricing structures, ensuring that you get the best
                            value for your investment.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Best Service section end -->

    <!-- Vivamus elementum section start -->
    <section class="Vivamus-elementum position-relative pb-120">
        <div class="container">
            <div class="section-header mb-lg-4 mb-2">
                <h2>At Ascend Domains, we take pride in our commitment to excellence and our dedication to helping our
                    clients succeed in the digital landscape. </h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="Ourwork-sec">
                        <h4>Our Work <svg class="ms-3" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.1129 4.92857L17.1229 10H20L20 0H10V2.87714L15.0714 2.88714L0 17.9586L2.04143 20L17.1129 4.92857Z"
                                    fill="#051424" />
                            </svg>
                        </h4>
                        <p>Ascend Domains' assistance, Client A was able to secure their desired domain name and establish a
                            strong online presence for their business. </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="elementum-image">
                        <img src="{{ asset('assets/img/home/ele-imag.png') }}" />
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Vivamus elementum section end -->
@endsection
