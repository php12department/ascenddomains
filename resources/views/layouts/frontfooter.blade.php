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
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="{{ config('app.name') }}" />
                    </a>
                </div>
                <ul class="social-list list-inline">
                    <li class="list-inline-item"><a href="#" title="Vimeo" aria-label="Vimeo"><i
                                class="fa-brands fa-vimeo-v"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Facebook" aria-label="Facebook"><i
                                class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Twitter" aria-label="Twitter"><i
                                class="fa-brands fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Flickr" aria-label="Flickr"><i
                                class="fa-brands fa-flickr"></i></a></li>
                    <li class="list-inline-item"><a href="#" title="Dribbble" aria-label="Dribbble"><i
                                class="fa-brands fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="useful-link">
                    <h4>BUY DOMAINS</h4>
                    <ul class="list-inline">
                        <li><a href="{{ route('buydomain') }}">BUY DOMAINS</a></li>
                        <li><a href="{{ route('overview') }}">OVERVIEW</a></li>
                        <li><a href="#">DOMAIN SEARCH</a></li>
                        <li><a href="{{ route('domainauctions') }}">DOMAIN AUCTIONS</a></li>
                    </ul>
                </div>
            </div>
            @php $recentnews = App\Models\News::where('is_delete',0)->latest()->take(5)->get(); @endphp
            <div class="col-lg-3 col-md-6">
                <div class="useful-link">
                    <h4>RECENT NEWS</h4>
                    <ul class="list-inline">
                        @if ($recentnews->count() > 0)
                            @foreach ($recentnews as $recentnewsitem)
                                <li><a href="{{ route('recentnews', $recentnewsitem->id) }}">{{ $recentnewsitem->title }}</a></li>
                            @endforeach
                        @else
                        <li><a href="#">NO RECENT NEWS FOUND</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="useful-link ms-lg-5 ms-0">
                    <h4>CUSTOMER SERVICES</h4>
                    <ul class="list-inline">
                        <li><a href="{{ route('blog') }}">BLOG</a></li>
                        <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                        {{-- <li><a href="#">Site Map</a></li> --}}
                        <li><a href="{{ route('faqs.index') }}">Faq</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright © {{ date('Y') }} All rights reserved | Designed and Crafted by<a class="ms-1"
                    href="{{ route('index') }}">{{ config('app.name') }}</a> <a
                    href="{{ route('privacypolicy') }}">Privacy Policy</a> <a href="{{ route('terms') }}">
                    Terms</a></p>
        </div>
    </div>
</footer>
<!-- footer section end -->
</body>
