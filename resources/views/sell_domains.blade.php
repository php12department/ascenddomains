@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/sell-domain-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>Sell Domains</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sell Domains</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->

    <!-- Sell Domains section start -->
    <section class="Sell-domains pt-120 pb-120">
        <div class="container">
            <div class="section-header">
                <h4>Sell Your Domains at the Best Price!</h4>
                <p>Ascend Domains is the largest domain marketplace with its wide range of audience for domains buyers and
                    sellers.</p>
                <p>This simplify indicates that we are giving you the opportunity to find a best buyer for your premium
                    domain.</p>
            </div>

            <div class="whytrade-sec">
                <div class="section-header">
                    <h4>Why to trade with us?</h4>
                    <p>We are giving you two beneficial options for selling the domain:</p>
                    <ol class="ps-4 mb-5">
                        <li>Buy Now</li>
                        <li>Make Offer</li>
                    </ol>
                </div>
                <div class="buy-now mb-4">
                    <div class="badge btn-badge">Buy Now</div>
                    <div class="badge-box">
                        <p>Just set a fixed price to interact the people so that you get an opportunity to sell your domain
                            faster with 3 times more faster that making an offer. It is short and easiest way to sell the
                            domain.</p>
                    </div>
                </div>
                <div class="buy-now">
                    <div class="badge btn-badge">Make Offer</div>
                    <div class="badge-box">
                        <p>Using this option just to give a signal to potential buyers who are seeking for making offers.
                            You have one time chance to offer and after that you can negotiate with the person till the
                            agreement is found.</p>
                    </div>
                </div>
            </div>

            <div class="domains-auction">
                <div class="section-header mb-2">
                    <h4>How you want to sell your domains?</h4>
                    <p>We are enhancing your ability by giving you two options:</p>
                    <ol class="ps-4">
                        <li>Auction</li>
                        <li>Fixed Price</li>
                    </ol>
                </div>
                {{-- <div class="auction-box">
                    <h4>Auction</h4>
                    <p>A domain name auction encourages the buying and selling of currently registered domain names,
                        enabling individuals to purchase a previously registered domain that suits their needs from an owner
                        wishing to sell. We have two types of auctions available:</p>
                    <h6><svg width="27" height="18" viewBox="0 0 27 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.5" cx="7" cy="9" r="7" fill="#EC681B" />
                            <path d="M23 9L7 9" stroke="#EC681B" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                stroke="#EC681B" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        Direct Auction</h6>
                    <p>We are offering you that direct auction for free of cost listing with 15 days validity. Just start
                        your bid and reserve the price with no limits. Your domain name will be listed on your homepage in
                        the matching search result.</p>
                    <a href="#" class="btn mb-lg-4 mt-1 mb-1">
                        Start a direct auction <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                            <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </a>
                    <h6><svg width="27" height="18" viewBox="0 0 27 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.5" cx="7" cy="9" r="7" fill="#EC681B" />
                            <path d="M23 9L7 9" stroke="#EC681B" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                stroke="#EC681B" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                        Marketplace Auction</h6>
                    <p>Once you receive the offer on your domain, then you have a chance to put your domain on auction. Just
                        accept the offer for your starting bid and offer a reserve price, just wait and watch for the
                        additional bids during the limited time for auction.</p>
                    <p>Since you already have a personal to buy your domain at a fixed price, you definitely will grab
                        something till the end of the auction.</p>
                </div>
                <div class="features-list">
                    <h5>Features of Auction</h5>
                    <ul class="list-inline">
                        <li>Auction is free of cost</li>
                        <li>With the millions buyers, sell to the largest pool of buyers global.</li>
                        <li>This feature raises your sell price</li>
                        <li>Auction valid for 15 days</li>
                        <li>Brings you the more buyers because of search results</li>
                        <li>Relisting facility is available for free</li>
                        <li>Detail Information required for good search result.</li>
                    </ul>
                </div>
                <div class="auction-box">
                    <h4>Fixed Price</h4>
                    <p>The term fixed price is a phrase used to mean the price of a good or a service is not subject to
                        bargaining.</p>
                </div>
                <div class="features-list">
                    <h5>Features of Fixed Price</h5>
                    <ul class="list-inline">
                        <li>Fixed Price valid for 45 days</li>
                        <li>Only receive fixed offers from buyers</li>
                        <li>Fixed Price are in all of the Ascend Domains search result</li>
                        <li>Get the opportunity to sell it over millions buyers.</li>
                    </ul>
                    <p>Ascend Domains offers a personalized brokerage service all of them. If somebody purchases his/her
                        premium domain from auction or fixed price from our platform so we will charge a 15% of total amount
                        from your domain cost. So what are you waiting for, just come to us and grab this life time
                        opportunity.</p>
                </div> --}}
            </div>

            {{-- <div class="domains-auction pt-lg-4">
                <div class="section-header">
                    <h4>List your domains for Sale</h4>
                    <p>Adding domains into your account takes only a few moments.</p>
                    <a href="#" class="btn mt-3 mb-3">
                        List your Domain now <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                            <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                        </svg>
                    </a>
                </div>
                <div class="features-list">
                    <h4>Earn more with Ascend Domains</h4>
                    <ul class="list-inline">
                        <li>The lowest industry commissions, starting at 10%.</li>
                        <li>Sell 3 times faster with Buy Now prices.</li>
                        <li>International reach, with over 650 global partners.</li>
                        <li>The world's largest audience of buyers</li>
                    </ul>
                </div>
                <div class="section-header">
                    <h4>Do you already have a buyer?</h4>
                    <p>Ascend Domains offers an External Transfer Service for agreements reached outside our marketplace</p>
                    <a href="#" class="mt-3 theme-color">
                        Learn more
                    </a>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Premium Domain section end -->
    <!-- Domains section start -->
    {{-- <section class="Domains-section pt-120 pb-120">
        <div class="container">
            <div class="section-header text-center">
                <h2>Other Domains You Might Like</h2>
            </div>
            <div class="row tab-content">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="domain-card">
                        <div class="domain-image">
                            <img src="{{ asset('assets/img/domain/6.png') }}" alt="{{ config('app.name') }}">
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
                            <img src="{{ asset('assets/img/domain/7.png') }}" alt="{{ config('app.name') }}">
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
                            <img src="{{ asset('assets/img/domain/8.png') }}" alt="{{ config('app.name') }}">
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
                            <img src="{{ asset('assets/img/domain/9.png') }}" alt="{{ config('app.name') }}">
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
                            <img src="{{ asset('assets/img/domain/10.png') }}" alt="{{ config('app.name') }}">
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
    </section> --}}
    <!-- Domains section end -->

    <!-- Pricing section start -->
    {{-- <section class="Pricing-section pb-120">
        <div class="container">
            <div class="section-header text-center mb-lg-5 mb-2">
                <h2 class="pb-2">Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et mauris molestie, volutpat libero non,
                    hendrerit risus. Praesent varius<br> at ipsum venenatis lobortis.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-card card-1">
                        <div class="sec-title">
                            <h2>Starter</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="text-content">
                            <h5>Free</h5>
                            <ul class="list-inline">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        <div class="feaer-list">
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                        </div>
                        <div class="buy-btn">
                            <a href="#" class="btn">
                                Lorem Ipsum <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-card card-2">
                        <div class="sec-title">
                            <h2>Starter</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="text-content">
                            <h5>Free</h5>
                            <ul class="list-inline">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        <div class="feaer-list">
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                        </div>
                        <div class="buy-btn">
                            <a href="#" class="btn">
                                Lorem Ipsum <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-card card-3">
                        <div class="sec-title">
                            <h2>Starter</h2>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="text-content">
                            <h5>Free</h5>
                            <ul class="list-inline">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                        <div class="feaer-list">
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                            <p><img src="{{ asset('assets/img/home/Union.png') }}" /> Donec vulputate risus</p>
                        </div>
                        <div class="buy-btn">
                            <a href="#" class="btn">
                                Lorem Ipsum <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Pricing section end -->
@endsection
