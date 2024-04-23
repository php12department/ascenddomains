@extends('layouts.app')

@section('content')
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
@endsection
