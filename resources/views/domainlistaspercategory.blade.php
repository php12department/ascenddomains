@extends('layouts.app')

@section('content')

<!-- Page header section start -->
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/buy-domain-header.png') }}" alt="{{ config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Domains</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Domains</li>
            </ol>
        </nav>
    </div>
</section>
<section class="Domains-section pt-120 pb-120">
    <div class="container">
        <div class="row">
            @foreach ($Domains as $domain)
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
</section>
@endsection
