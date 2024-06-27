@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/buying-guide-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>Buying Guide</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Buying Guide</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->

    <!-- Buy Domain section start  -->
    <section class="Buydomain-section pt-120 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="Domain-Image">
                        <img src="{{ asset('assets/img/home/buyDomain.png') }}" alt="{{ config('app.name') }}" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Domain-text">
                        <h4>Buy a Domain</h4>
                        <p>Buying the domain you need has never been more straightforward. Browse our index or conduct your
                            own search inquiry to locate the ideal domain for your own or business objectives!</p>
                        <h4>Find Your Domain</h4>
                        <p>Create your free account - Register for your free Ascend Domains account. In the wake of
                            finishing the Member Certification procedure, you're prepared to encounter the world's biggest
                            online commercial marketplace for domains.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Buy Domain section end  -->

    <!-- View Listing section start  -->
    <div class="whytrade-sec buyDomains pb-120">
        <div class="container">
            <div class="buy-now mb-4">
                <div class="badge btn-badge">View Listing or Top Domains record</div>
                <div class="badge-box">
                    <p>Sellers who advance their domain utilizing our homepage Listings are looking for buyers, so beginning
                        here may bring about quicker arrangements. Ascend Domains Top Domains rundown offers short,
                        exclusive names - perfect for online organizations and speculators.</p>
                </div>
            </div>
            <div class="buy-now">
                <div class="badge btn-badge">Search Ascend Domains catalogue</div>
                <div class="badge-box">
                    <p>Ascend Domains makes it simple to discover what you're searching for, regardless of what your
                        financial plan is. Look for a word or expression and thin results utilizing an assortment of
                        channels, or search domain in more than thousand focused categories. Our marketplace has something
                        for everybody.While going you will definitely get something.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- View Listing section end  -->

    <!-- Negotiate a Price section start -->
    <section class="Negotiate-price pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="Negotiate-text">
                        <h2>Negotiate a Price</h2>
                        <p><strong>Ascend Domains</strong> empowers you to negotiate namelessly to purchase domains through
                            a customary offer/counter-offer framework, and additionally through our auction platform.</p>
                        <p>On the off chance that you do not have the time or experience to arrange a decent cost for a
                            domain, we can offer assistance. So you can feel certain that our team can secure the domain you
                            need!</p>
                        <p>Find out about the domain before you contribute. Every page gives important information around a
                            domain. Perspective activity measurements, whether created substance is incorporated, or what
                            number of offers the dealer has gotten.</p>
                        <p>In case you're not certain how those points of interest influence an domain's value, arrange a
                            specialist, individualized examination.</p>
                        <p>Make an offer. Prepared to buy a domain? The most straightforward approach to express interest by
                            is to make an offer. Many domains are interested in negotiation, while some are recorded with
                            settled, Buy Now costs. If it's not too much trouble take note of that all offers are binding
                            for 15 days.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="Negotiate-image">
                        <img src="{{ asset('assets/img/home/buydomain-sec.png') }}" alt="{{ config('app.name') }}" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="Negotiate-text">
                        <p>Offer on a running auction. In case you're short on time, look at Ascend Domain's running
                            auction. In case you're the most highest bidder, and the store has been met, the domain is all
                            yours.</p>
                        <p>Apply for help. On the off chance that you and a dealer can't locate a shared view, or if the
                            space you need is not right now recorded on Ascend Domain's commercial center, we can offer
                            assistance. We will have one of the business' best dealers taking a shot at your benefit to
                            arrange and locate the best cost for a domain.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Negotiate a Price section end -->
@endsection
