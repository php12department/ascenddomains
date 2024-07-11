@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/buy-domain-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>Single Domains</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Single Domains</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->

    <!-- Single Domain section start -->
    <section class="Single-domain pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="domain-leftinfo">
                        @if ($domaindetails->domainMedia->isNotEmpty())
                            @foreach ($domaindetails->domainMedia as $domainmedia)
                                <img src="{{ asset('assets/img/domains/' . $domainmedia->media_img) }}"
                                    alt="{{ config('app.name') }}" />
                            @endforeach
                        @else
                            <img src="{{ asset('assets/img/domain/defaultdomain.png') }}" alt="{{ config('app.name') }}" />
                        @endif
                        <div class="action-btn">
                            <a href="{{ route('api-data', $domaindetails->id) }}"  class="btn add-btn">
                                Buy Now
                                <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a>
                            {{-- <a href="#" class="btn make-btn" data-bs-toggle="modal" data-bs-target="#makeOfferModal">
                                Make Offer
                                <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                    <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a> --}}
                            @if(auth()->check())
                                <a href="#" class="btn make-btn" data-bs-toggle="modal" data-bs-target="#makeOfferModal">
                                    Make Offer
                                    <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                        <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn make-btn">
                                    Log in to Make Offer
                                    <svg class="ms-2" width="27" height="18" viewBox="0 0 27 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.5" cx="7" cy="9" r="7" fill="white"></circle>
                                        <path d="M23 9L7 9" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M19.0097 1C18.8433 3.66667 20.8072 9 26 9C20.8072 9 18.8433 14.3333 19.0097 17"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="domain-rightinfo">
                        <div class="section-header">
                            <h4>{{ $domaindetails->name }} Available For Sale</h4>
                            <p><strong> Now available</strong> at an affordable price</p>
                        </div>
                        <div class="domain-information mb-4">
                            <h5>Domain information</h5>
                            <p>Don't settle for an inferior domain name when the one you want and need is available! Buy a Premium Domain name today!</p>
                            <p class="theme-color">"Your web address is memorable and uniquely your own. Wait another day and chances are that you miss out forever."</p>
                        </div>
                        <div class="deal-bestprice">
                            <div class="heading mb-4">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 31.5H7.5V12H6C5.20435 12 4.44129 12.3161 3.87868 12.8787C3.31607 13.4413 3 14.2044 3 15V28.5C3 29.2956 3.31607 30.0587 3.87868 30.6213C4.44129 31.1839 5.20435 31.5 6 31.5ZM30 12H19.5L21.183 6.948C21.3332 6.49712 21.3741 6.01702 21.3024 5.54723C21.2306 5.07745 21.0483 4.63142 20.7705 4.24589C20.4926 3.86036 20.1271 3.54636 19.7041 3.32975C19.2811 3.11314 18.8127 3.00012 18.3375 3H18L10.5 11.157V31.5H27L32.868 18.606L33 18V15C33 14.2044 32.6839 13.4413 32.1213 12.8787C31.5587 12.3161 30.7956 12 30 12Z"
                                        fill="white" />
                                </svg>
                                <span class="ms-2">This Deal Is At Its Best Price!</span>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="width: 40%;">Price(BIN)</td>
                                        <td>: {{ $domaindetails->bin }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Page Rank</td>
                                        <td>: 0</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Category</td>
                                        <td>: {{ $domaindetails->category->name ?? 'No Category' }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Alexa Rank</td>
                                        <td>: 0</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Total Bids</td>
                                        <td>: 2</td>
                                    </tr>
                                    <tr>
                                        <td>Max Bid</td>
                                        <td>: $786</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Age</td>
                                        <td>: Yrs</td>
                                    </tr> --}}
                                    {{-- <tr>
                                        <td>Payments</td>
                                        <td>: <img src="{{ asset('assets/img/home/paypal-icon.png') }}" /></td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Domain section end -->

    <!-- Make Offer Modal -->
    @if(auth()->check())
    <div class="modal fade" id="makeOfferModal" tabindex="-1" aria-labelledby="makeOfferModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="makeOfferModalLabel">Make an Offer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="get-price-form" action="{{ route('submit_offer') }}" method="GET">
                        @csrf
                        <div class="mb-3 w-100">
                            <label for="offer" class="form-label">Your Offer Price</label>
                            <input type="text" id="offer" name="offer" class="form-control" required>
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->check() ? auth()->user()->id : null }}">
                        <input type="hidden" name="domain_id" value="{{ $domaindetails->id }}">
                        <button type="submit" class="btn btn-primary w-100">Submit Offer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@section('scripts')
    <script>
        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        priceInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });

        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if ((maxVal - minVal) < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap;
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });
    </script>
@endsection
