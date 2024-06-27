@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/Privacy-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>Privacy Policy</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->
    <!-- Terms section start -->
    <section class="Terms-section pt-120 pb-120">
        <div class="container">
            <div class="section-header mb-4">
                <h2 class="pb-2 text-center">Privacy Policy</h2>
            </div>
            <div class="terms-content">
                {!! $static_pages->content !!}
            </div>
    </section>
    <!-- Terms section end -->
@endsection
