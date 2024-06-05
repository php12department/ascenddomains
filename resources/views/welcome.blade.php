@extends('layouts.app')

@section('content')
    <style>
        .select2-container--default .select2-selection--single {
            height: 50px;
            border-radius: 50px;
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
            <img src="{{ asset('assets/img/home/hero_img.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="banner-caption">
            {{-- <form class="" accept=""> --}}
                <h2>Choose best domains for<br> your business</h2>
                <div class="form-group position-relative">
                    <select class="form-control select2" id="searchdomain" name="searchdomain">
                        <option value="">Search Domain</option>
                        @foreach ($domainlist as $d)
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" placeholder="Search Domain" class="form-control" /> --}}
                    <button type="button" class="btn btn-primary" id="searchbutton">Search</button>
                </div>
            {{-- </form> --}}
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
                    <button class="nav-link active" id="premium-tab" data-bs-toggle="tab" data-bs-target="#premium-tab-pane"
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
                <div class="tab-pane fade show active" id="premium-tab-pane" role="tabpanel" aria-labelledby="premium-tab"
                    tabindex="0">
                    <div class="row">
                        @foreach ($premiumDomains as $domain)
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="domain-card">
                                    <div class="domain-image">
                                        @if ($domain->media_image)
                                            <img src="{{ asset('assets/img/domains/' . $domain->media_image) }}"
                                                alt="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $domain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="{{ route('singledomain', $domain->id) }}" class="btn btn-primary">Buy
                                            Now</a>
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
                                                alt="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $domain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
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
                                                alt="{{ config('app.name') }}" />
                                        @else
                                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}"
                                                alt="{{ config('app.name') }}" />
                                        @endif
                                        <p>{{ $domain->name }}</p>
                                    </div>
                                    <div class="buy-btn mt-3">
                                        <a href="#" class="btn btn-primary">Buy Now</a>
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
                <div class="col-lg-3 col-md-6">
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
                            <a href="{{ route('selldomain') }}" class="btn">Read More</a>
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
                            <a href="{{ route('buydomain') }}" class="btn">Read More</a>
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
                        <h4>BRAND DOMAINS</h4>
                        <ul class="list-inline">
                            @foreach ($brandDomainslist as $brandDomainslistitem)
                                <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>{{ $brandDomainslistitem->name }}
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
                        <h4>TOP DOMAINS</h4>
                        <ul class="list-inline">
                            @foreach ($topDomainslist as $topDomainslistitem)
                                <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>{{ $topDomainslistitem->name }}
                                    </span></li>
                            @endforeach
                            <div class="more-btn text-center">
                                <a href="{{ route('domainlist', '4') }}" class="btn btn-primary">More</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="Buydomain-box">
                        <h4>FETURED DOMAINS</h4>
                        <ul class="list-inline">
                            @foreach ($featuredDomainslist as $featuredDomainslistitem)
                                <li><img src="{{ asset('assets/img/home/check.svg') }}" /><span>{{ $featuredDomainslistitem->name }}
                                    </span></li>
                            @endforeach
                            <div class="more-btn text-center">
                                <a href="{{ route('domainlist', '2') }}" class="btn btn-primary">More</a>
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
                                        src="{{ asset('assets/img/home/color-arrow.svg') }}">{{ $category->name }}</a>
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
                                <img src="{{ asset('assets/img/home/step1.svg') }}" alt="{{ config('app.name') }}" />
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
                                <img src="{{ asset('assets/img/home/step2.svg') }}" alt="{{ config('app.name') }}" />
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
                                <img src="{{ asset('assets/img/home/step3.svg') }}" alt="{{ config('app.name') }}" />
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
                                <img src="{{ asset('assets/img/home/step4.svg') }}" alt="{{ config('app.name') }}" />
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
                    typeId = '1';
                } else if (activeTabId === 'featured-tab') {
                    typeId = '2';
                } else if (activeTabId === 'top-tab') {
                    typeId = '4';
                }
                if (typeId) {
                    const url = `{{ url('domain-listing-type-wise') }}/${typeId}`;
                    window.location.href = url;
                }
            }
        });
        // $(document).ready(function() {
        //     // Apply custom styles to the select element
        //     $('#styled-select').each(function() {
        //         var $this = $(this),
        //             numberOfOptions = $(this).children('option').length;

        //         $this.addClass('select-hidden');
        //         $this.wrap('<div class="select"></div>');
        //         $this.after('<div class="styled-select"></div>');

        //         var $styledSelect = $this.next('div.styled-select');
        //         $styledSelect.text($this.children('option').eq(0).text());

        //         var $list = $('<ul />', {
        //             'class': 'options'
        //         }).insertAfter($styledSelect);

        //         for (var i = 0; i < numberOfOptions; i++) {
        //             $('<li />', {
        //                 text: $this.children('option').eq(i).text(),
        //                 rel: $this.children('option').eq(i).val()
        //             }).appendTo($list);
        //         }

        //         var $listItems = $list.children('li');

        //         $styledSelect.click(function(e) {
        //             e.stopPropagation();
        //             $('div.styled-select.active').each(function() {
        //                 $(this).removeClass('active').next('ul.options').hide();
        //             });
        //             $(this).toggleClass('active').next('ul.options').toggle();
        //         });

        //         $listItems.click(function(e) {
        //             e.stopPropagation();
        //             $styledSelect.text($(this).text()).removeClass('active');
        //             $this.val($(this).attr('rel'));
        //             $list.hide();
        //         });

        //         $(document).click(function() {
        //             $styledSelect.removeClass('active');
        //             $list.hide();
        //         });

        //     });
        // });
        // $(document).ready(function() {
        $('#searchdomain').select2();
        $('#searchButton').click(function() {
            console.log("s");
            var selectedDomainId = $('#searchdomain').val();
            if (selectedDomainId) {
                console.log("if");
                // Redirect to the single domain page with the selected domain ID
                window.location.href = `{{ url('/domain') }}/${selectedDomainId}`;
            } else {
                console.log("els");
                alert('Please select a domain.');
            }
        });
    // });
    </script>
@endsection
