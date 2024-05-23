@extends('layouts.app')

@section('content')
<!-- Page header section start -->
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/buy-domain-header.png') }}" alt="{{ config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Buy Domain</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Buy Domain</li>
            </ol>
        </nav>
    </div>
</section>
<!-- Page header section end -->

<!-- Buy Domain section start  -->
<section class="Buydomain-section pt-120 pb-120">
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
                    <p>Buying the domain you need has never been more straightforward. Browse our index or conduct your own search inquiry to locate the ideal domain for your own or business objectives!</p>
                    <h4>Find Your Domain</h4>
                    <p>Create your free account - Register for your free Ascend Domains account. In the wake of finishing the Member Certification procedure, you're prepared to encounter the world's biggest online commercial marketplace for domains.</p>
                </div>
            </div>
         </div>
    </div>
</section>
<!-- Buy Domain section end  -->
@endsection


