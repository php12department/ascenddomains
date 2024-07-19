@extends('layouts.app')

@section('content')
    <style>
        .select2-container--default .select2-selection--single {
            height: 50px;
            border-radius: 10px;
            border: 1px solid #ced4da;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 50px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 38px;
        }

        .select2-dropdown {
            border-radius: 8px;
        }

        .select2-results__option {
            border-radius: 8px;
        }
    </style>
    <section class="Banner-section">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/hero_img.png') }}" alt="{{ config('app.name') }}"
                title="{{ config('app.name') }}" />
        </div>
        <div class="banner-caption">
            <h2>Choose best domains for<br> your business</h2>
            <div class="form-group position-relative">
                <select class="form-control select2" id="searchdomain" name="searchdomain">
                    <option value="">Search Domain</option>
                </select>
                <button type="button" class="btn btn-primary" id="searchbutton">Search</button>
            </div>
        </div>
        <div class="Scrolldown">
            <a href="#DomainsId"  title="{{ config('app.name') }}">
                <img src="{{ asset('assets/img/home/scroll-down.png') }}" alt="{{ config('app.name') }}"
                    title="{{ config('app.name') }}">
            </a>
        </div>
    </section>
    <section class="Domains-section pt-120 pb-120" id="DomainsId">
        <div class="container">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all-tab-pane"
                        type="button" role="tab" aria-controls="all-tab-pane" aria-selected="true">All
                        Domains</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="premium-tab" data-bs-toggle="tab" data-bs-target="#premium-tab-pane"
                        type="button" role="tab" aria-controls="premium-tab-pane" aria-selected="true">Premium
                        Domains</button>
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
                <div class="tab-pane fade show active" id="all-tab-pane" role="tabpanel" aria-labelledby="all-tab"
                    tabindex="0">
                    <div class="row">
                        @foreach ($allDomains as $alldomain)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="domain-card">
                                    <div class="domain-image">
                                        @if ($alldomain->media_image)
                                            <img src="{{ asset('assets/img/domains/' . $alldomain->media_image) }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $alldomain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="{{ route('singledomain', $alldomain->id) }}"
                                            class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="premium-tab-pane" role="tabpanel" aria-labelledby="premium-tab"
                    tabindex="0">
                    <div class="row">
                        @foreach ($premiumDomains as $domain)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="domain-card">
                                    <div class="domain-image">
                                        @if ($domain->media_image)
                                            <img src="{{ asset('assets/img/domains/' . $domain->media_image) }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $domain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="{{ route('singledomain', $domain->id) }}"
                                            class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="featured-tab-pane" role="tabpanel" aria-labelledby="featured-tab"
                    tabindex="0">
                    <div class="row">
                        @foreach ($featuredDomains as $domain)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="domain-card">
                                    <div class="domain-image">
                                        @if ($domain->media_image)
                                            <img src="{{ asset('assets/img/domains/' . $domain->media_image) }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $domain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="{{ route('singledomain', $domain->id) }}"
                                            class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="top-tab-pane" role="tabpanel" aria-labelledby="top-tab" tabindex="0">
                    <div class="row">
                        @foreach ($topDomains as $domain)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="domain-card">
                                    <div class="domain-image">
                                        @if ($domain->media_image)
                                            <img src="{{ asset('assets/img/domains/' . $domain->media_image) }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" title="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $domain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="{{ route('singledomain', $domain->id) }}"
                                            class="btn btn-primary">View</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="view-more text-center mt-lg-4 mt-3">
                <a href="#" id="viewMoreBtn" class="btn">
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
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="services-card">
                        <div class="icon-svg mb-3">
                            <img src="{{ asset('assets/img/home/auction.svg') }}" />
                        </div>
                        <div class="services-text">
                            <h4>DOMAIN AUCTION</h4>
                            <p>We are giving you the opportunity to get the exact value of your domain at this wonderful
                                platform with the idea of domain auction.</p>
                            <a href="{{ route('domainauctions') }}" class="btn">Read More</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="icon-svg mb-3">
                            <img src="{{ asset('assets/img/home/sell.svg') }}" alt="{{ config('app.name') }}"
                                title="{{ config('app.name') }}" style="width: 62px;height: 62px;"/>
                        </div>
                        <div class="services-text">
                            <h4>SELL DOMAINS</h4>
                            <p>We are offering you the place to sell your domain with the best pricing you ever thought off
                                at your doorstep.</p>
                            <a href="{{ route('selldomain') }}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="icon-svg mb-3">
                            <img src="{{ asset('assets/img/home/buy.svg') }}" alt="{{ config('app.name') }}" style="width: 62px;height: 62px;"
                                title="BUY DOMAINS" />
                        </div>
                        <div class="services-text">
                            <h4>BUY DOMAINS</h4>
                            <p>Buy Domain is always the best part to have it but you should know what to buy, where to buy
                                and what is cost, so we help you.</p>
                            <a href="{{ route('buydomain') }}" class="btn" title="config('app.name') }}" >Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="icon-svg mb-3">
                            <img src="{{ asset('assets/img/home/offer.svg') }}" style="width: 62px;height: 62px;" alt="{{ config('app.name') }}"
                                title="CURRENT OFFERS" />
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
                        <h4>BRAND DOMAINS</h4>
                        <ul class="list-inline">
                            @foreach ($brandDomainslist as $brandDomainslistitem)
                                <li><img src="{{ asset('assets/img/home/check.svg') }}" style="height: 22px;width:22px;"  alt="{{ config('app.name') }}"
                                        title="BRAND DOMAINS" /><span>{{ $brandDomainslistitem->name }}
                                    </span></li>
                            @endforeach
                            <div class="more-btn text-center">
                                <a href="{{ route('domainlist', '2') }}" class="btn btn-primary">More</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Buydomain-box">
                        <h4>TOP DOMAINS</h4>
                        <ul class="list-inline">
                            @foreach ($topDomainslist as $topDomainslistitem)
                                <li><img src="{{ asset('assets/img/home/check.svg') }}" style="height: 22px;width:22px;" alt="{{ config('app.name') }}"
                                        title="TOP DOMAINS" /><span>{{ $topDomainslistitem->name }}
                                    </span></li>
                            @endforeach
                            <div class="more-btn text-center">
                                <a href="{{ route('domainlist', '3') }}" class="btn btn-primary">More</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Buydomain-box">
                        <h4>FETURED DOMAINS</h4>
                        <ul class="list-inline">
                            @foreach ($featuredDomainslist as $featuredDomainslistitem)
                                <li><img src="{{ asset('assets/img/home/check.svg') }}" style="height: 22px;width:22px;" alt="{{ config('app.name') }}"
                                        title="FETURED DOMAINS" /><span>{{ $featuredDomainslistitem->name }}
                                    </span></li>
                            @endforeach
                            <div class="more-btn text-center">
                                <a href="{{ route('domainlist', '1') }}" class="btn btn-primary">More</a>
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
                @php  $categories = App\Models\DomainCategory::where('is_delete',0)->whereHas('domains')->latest()->get();  @endphp
                @if ($categories->count() > 0)
                    @foreach ($categories as $category)
                        <div class="col-lg-4 col-md-6">
                            <div class="list-categories">
                                <a href="{{ route('domainlistcateory', $category->id) }}"><img
                                        src="{{ asset('assets/img/home/color-arrow.svg') }}" style="height: 18px;width:27px;"
                                        alt="{{ config('app.name') }}"
                                        title= "{{ config('app.name') }}">{{ $category->name }}</a>
                            </div>
                        </div>
                    @endforeach
                @endif
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
                                <img src="{{ asset('assets/img/home/step1.svg') }}" alt="{{ config('app.name') }}"
                                    title="Step 1"  style="width: 60px;height: 60px;"/>
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
                                <img src="{{ asset('assets/img/home/step2.svg') }}" style="width: 60px;height: 60px;" alt="{{ config('app.name') }}"
                                    title="Step 2" />
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
                                <img src="{{ asset('assets/img/home/step3.svg') }}" style="width: 60px;height: 60px;" alt="{{ config('app.name') }}"
                                    title="Step 3" />
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
                                <img src="{{ asset('assets/img/home/step4.svg') }}" style="width: 60px;height: 60px;" alt="{{ config('app.name') }}"
                                    title="Step 4" />
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
@section('scripts')
    <script>
        document.getElementById('viewMoreBtn').addEventListener('click', function(event) {
            event.preventDefault();
            let activeTab = document.querySelector('.nav-link.active');
            if (activeTab) {
                let activeTabId = activeTab.id;
                let typeId = '';

                if (activeTabId === 'premium-tab') {
                    typeId = '4';
                }
                if (activeTabId === 'all-tab') {
                    typeId = '0';
                } else if (activeTabId === 'featured-tab') {
                    typeId = '1';
                } else if (activeTabId === 'top-tab') {
                    typeId = '3';
                }
                if (typeId == 0) {
                    const url = `{{ url('domain-listing') }}`;
                    window.location.href = url;
                } else {
                    const url = `{{ url('domain-listing-type-wise') }}/${typeId}`;
                    window.location.href = url;
                }
            }
        });

        $('#searchdomain').select2({
            placeholder: 'Search Domain',
            minimumInputLength: 1,
            ajax: {
                url: '{{ route('domains.search') }}',
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term // search term
                    };
                },
                processResults: function(data) {
                    return {
                        results: $.map(data, function(domain) {
                            return {
                                id: domain.id,
                                text: domain.name
                            };
                        })
                    };
                },
                cache: true
            }
        });

        // Handle the search button click
        $('#searchbutton').on('click', function() {
            var domainId = $('#searchdomain').val();
            if (domainId) {
                window.location.href = `domain-detail/${domainId}`;
            }
        });
    </script>
@endsection
