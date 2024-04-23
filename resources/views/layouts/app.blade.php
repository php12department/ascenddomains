<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name')  }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
</head>

<!-- header start -->
<header class="Header-1">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                    alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <!--
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
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
                            @if (Auth::check())
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a>
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
</header>
<!-- header end -->

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if (session('warning'))
    <div class="alert alert-warning">
        {{ session('warning') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif

@yield('content');

<section class="Newsletter-section">
    <div class="container">
        <form class="newsletter-form" action="{{ route('subscribe') }}" method="POST">
            @csrf
            <h2>NEWSLETTER SUBSCRIBE</h2>
            <p>Subscribe to our newsletter and keep up with news, promotions, sales, and discounts!</p>
            <div class="form-group position-relative">
                <input type="email" name="email" placeholder="Email Address" class="form-control" required />
                <button type="submit" class="btn btn-primary">Subscribe</button>
            </div>
            <!-- Display validation errors -->
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </form>
    </div>
</section>

<!-- Newsletter section end -->

<!-- footer section start -->
<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="logo-sec mb-5">
                    <a href="#">
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
                        <li><a href="{{ route('faqs.index') }}">Faq</a></li>
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
</footer>
<!-- footer section end -->

</html>
