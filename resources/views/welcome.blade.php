{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
</head> --}}

@extends('layouts.app')

@section('content')
<!-- header start -->
{{-- <header class="Header-1">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo/logo.png') }}"
                    alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-expanded="false" href="#">Premium Domain Names</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-expanded="false" href="#">Sell Domains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-expanded="false" href="#">Auctions</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @if (Auth::check())
                                {{ Auth::user()->name }}
                            @else
                                Guest
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            <li><a class="dropdown-item" href="#">Lorem Ispum</a></li>
                            @if (Auth::check())
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                </li>
                            @endif
                        </ul>
                    </li>
                </ul>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                <div class="d-flex right-btn">
                    <a href="#" class="btn btn-primary">
                        <img src="{{ asset('assets/img/home/bag.png') }}" />
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header> --}}
<!-- header end -->

<!-- Banner section start -->
<section class="Banner-section">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/hero_img.png') }}" alt="" />
    </div>
    <div class="banner-caption">
        <form class="" accept="">
            <h2>Choose best domains for<br> your business</h2>
            <div class="form-group position-relative">
                <input type="text" placeholder="Search Domain" class="form-control" />
                <button type="button" class="btn btn-primary">Search</button>
            </div>
        </form>
    </div>
    <div class="Scrolldown">
        <a href="#DomainsId">
            <img src="{{ asset('assets/img/home/scroll-down.png') }}">
        </a>
    </div>
</section>
<!-- Banner section end -->

<!-- Domains section start -->
<section class="Domains-section pt-120 pb-120" id="DomainsId">
    <div class="container">
        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="premium-tab" data-bs-toggle="tab"
                    data-bs-target="#premium-tab-pane" type="button" role="tab"
                    aria-controls="premium-tab-pane" aria-selected="true">Premium Domains</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured-tab-pane"
                    type="button" role="tab" aria-controls="featured-tab-pane" aria-selected="false">Featured
                    Domains</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="top-tab" data-bs-toggle="tab" data-bs-target="#top-tab-pane"
                    type="button" role="tab" aria-controls="top-tab-pane" aria-selected="false">Top
                    Domains</button>
            </li>
        </ul>
        <div class="tab-content mt-lg-5 mt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="premium-tab-pane" role="tabpanel"
                aria-labelledby="premium-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/1.png') }}" alt="" />
                                <p>t49.org</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/2.png') }}" alt="" />
                                <p>t49.org</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    howtotec.com
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/3.png') }}" alt="" />
                                <p>znd.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/4.png') }}" alt="" />
                                <p>prepaidwireless.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/5.png') }}" alt="" />
                                <p>satphones.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/6.png') }}" alt="" />
                                <p>mqc.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/7.png') }}" alt="" />
                                <p>beth.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/8.png') }}" alt="" />
                                <p>pdf.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/9.png') }}" alt="" />
                                <p>mpa.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/10.png') }}" alt="" />
                                <p>options.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/11.png') }}" alt="" />
                                <p>visioncare.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/12.png') }}" alt="" />
                                <p>g626.com</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/13.png') }}" alt="" />
                                <p>nom.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/14.png') }}" alt="" />
                                <p>Pter.com</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/10.png') }}" alt="" />
                                <p>options.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab"
                tabindex="0">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/6.png') }}" alt="" />
                                <p>mqc.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/7.png') }}" alt="" />
                                <p>beth.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/8.png') }}" alt="" />
                                <p>pdf.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/9.png') }}" alt="" />
                                <p>mpa.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/10.png') }}" alt="" />
                                <p>options.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/3.png') }}" alt="" />
                                <p>znd.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/4.png') }}" alt="" />
                                <p>prepaidwireless.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/5.png') }}" alt="" />
                                <p>satphones.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/10.png') }}" alt="" />
                                <p>options.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/11.png') }}" alt="" />
                                <p>visioncare.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/12.png') }}" alt="" />
                                <p>g626.com</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/14.png') }}" alt="" />
                                <p>Pter.com</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="domain-card">
                            <div class="domain-image">
                                <img src="{{ asset('assets/img/domain/10.png') }}" alt="" />
                                <p>options.co.in</p>
                            </div>
                            <div class="buy-btn mt-3">
                                <a href="#" class="btn btn-primary">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="view-more text-center mt-lg-4 mt-3">
            <a href="#" class="btn">
                view more <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white" />
                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </a>
        </div>
    </div>
</section>
<!-- Domains section end -->

<!-- Services section start -->
<section class="Services-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>Services</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="services-card">
                    <div class="icon-svg mb-3">
                        <img src="{{ asset('assets/img/home/auction.svg') }}" />
                    </div>
                    <div class="services-text">
                        <h4>DOMAIN AUCTION</h4>
                        <p>We are giving you the opportunity to get the exact value of your domain at this wonderful
                            platform with the idea of domain auction.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="services-card">
                    <div class="icon-svg mb-3">
                        <img src="{{ asset('assets/img/home/sell.svg') }}" />
                    </div>
                    <div class="services-text">
                        <h4>SELL DOMAINS</h4>
                        <p>We are offering you the place to sell your domain with the best pricing you ever thought off
                            at your doorstep.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="services-card">
                    <div class="icon-svg mb-3">
                        <img src="{{ asset('assets/img/home/buy.svg') }}" />
                    </div>
                    <div class="services-text">
                        <h4>BUY DOMAINS</h4>
                        <p>Buy Domain is always the best part to have it but you should know what to buy, where to buy
                            and what is cost, so we help you.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="services-card">
                    <div class="icon-svg mb-3">
                        <img src="{{ asset('assets/img/home/offer.svg') }}" />
                    </div>
                    <div class="services-text">
                        <h4>CURRENT OFFERS</h4>
                        <p>Everyone is seeking to have a offer, customers are always the first priority so we are giving
                            you a chance to have discounts on auction, buying and selling.</p>
                        <a href="#" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->

<!-- Buy Domain section start -->
<section class="Buydomain-section pb-120">
    <div class="container">
        <div class="section-header text-center">
            <h2>Buy Domains</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="Buydomain-box">
                    <h4>TOP DOMAINS</h4>
                    <ul class="list-inline">
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>EFQX.COM </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>AJHI.COM </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>GVKW.COM </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>ACJQ.COM </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>016.IN </span></li>
                        <div class="more-btn text-center">
                            <a href="#" class="btn btn-primary">More</a>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="Buydomain-box">
                    <h4>TOP DOMAINS</h4>
                    <ul class="list-inline">
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>ALLINSURANCE.IN </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>007879.COM </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>014.IN </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>015.IN </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>016.IN </span></li>
                        <div class="more-btn text-center">
                            <a href="#" class="btn btn-primary">More</a>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="Buydomain-box">
                    <h4>TOP DOMAINS</h4>
                    <ul class="list-inline">
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>COMING SOON! </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>COMING SOON! </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>COMING SOON! </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>COMING SOON! </span></li>
                        <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>COMING SOON! </span></li>
                        <div class="more-btn text-center">
                            <a href="#" class="btn btn-primary">More</a>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Buy Domain section end -->

<!-- Domain Categories section start -->
<section class="Domain-categories pb-120">
    <div class="container">
        <div class="section-header text-center">
            <h2>Domains By Categories</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> ART</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> ASSOCIATIONS &
                        NONPROFIT</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> AUDIO & VIDEO</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> BUSINESS</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> LEGAL</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> AUTOMOTIVE</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> COMPUTERS &
                        TECHNOLOGY</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> EDUCATION</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> ENTERTAINMENT</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> FASHIONS &
                        APPAREL</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> FOOD &
                        RESTAURANTS</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> FUN & HUMOR</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> HOBBIES</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> IMPORT & EXPORT</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> OTHERS</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> BABIES & TEENS</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-categories">
                    <a href="#"><img src="{{ asset('assets/img/home/color-arrow.svg') }}"> SPORTS</a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Domain Categories section end -->

<!-- How It Works section start -->
<section class="Howitwork-section pb-120">
    <div class="auto-container">
        <div class="card">
            <div class="section-header text-center">
                <h2 class="pb-0 pt-4">How It Works</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="cardbody">
                        <div class="card-image step1">
                            <img src="{{ asset('assets/img/home/step1.svg') }}" alt="" />
                            <div class="count-num">
                                <p>1</p>
                            </div>
                        </div>

                        <div class="card-content">
                            <h4>Step 1</h4>
                            <p>Choose or search domain</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cardbody">
                        <div class="card-image step2">
                            <img src="{{ asset('assets/img/home/step2.svg') }}" alt="" />
                            <div class="count-num">
                                <p>2</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <h4>Step 2</h4>
                            <p>Payments for Domain</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cardbody">
                        <div class="card-image step3">
                            <img src="{{ asset('assets/img/home/step3.svg') }}" alt="" />
                            <div class="count-num">
                                <p>3</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <h4>Step 3</h4>
                            <p>Technical Domains And Authority Transfer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="cardbody">
                        <div class="card-image">
                            <img src="{{ asset('assets/img/home/step4.svg') }}" alt="" />
                            <div class="count-num">
                                <p>4</p>
                            </div>
                        </div>
                        <div class="card-content">
                            <h4>Step 4</h4>
                            <p>Get your ownership</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works section end -->

<!-- Newsletter section start -->
{{-- <section class="Newsletter-section">
    <div class="container">
        <form class="newsletter-form" action="">
            <h2>NEWSLETTER SUBSCRIBE</h2>
            <p>Subscribe to our newsletter and keep up with news, promotions, sales and discounts!</p>
            <div class="form-group position-relative">
                <input type="text" placeholder="Email Address" class="form-control" />
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </form>
    </div>
</section> --}}
<!-- Newsletter section end -->

<!-- footer section start -->
{{-- <footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="logo-sec mb-5">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" />
                    </a>
                </div>
                <ul class="social-list list-inline">
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-flickr"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="useful-link">
                    <h4>BUY DOMAINS</h4>
                    <ul class="list-inline">
                        <li><a href="#">BUY DOMAINS</a></li>
                        <li><a href="#">OVERVIEW</a></li>
                        <li><a href="#">DOMAIN SEARCH</a></li>
                        <li><a href="#">DOMAIN AUCTIONS</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="useful-link">
                    <h4>RECENT NEWS</h4>
                    <ul class="list-inline">
                        <li><a href="#">CELEBRATION OF ORG DOMAINS</a></li>
                        <li><a href="#">REGISTERED DOMAIN NAMES</a></li>
                        <li><a href="#">PREMIUM .BEER WEB DOMAINS</a></li>
                        <li><a href="#">PREMIUM DOMAINS FOR SALE</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="useful-link ms-lg-5 ms-0">
                    <h4>CUSTOMER SERVICES</h4>
                    <ul class="list-inline">
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Site Map</a></li>
                        <li><a href="#">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2015 All rights reserved | Designed and Crafted by<a class="ms-1"
                    href="#">AscendDomains</a> <a href="#">Privacy Policy</a> <a href="#">
                    Terms</a></p>
        </div>
    </div>
</footer> --}}
<!-- footer section end -->

{{-- </html> --}}

@endsection
