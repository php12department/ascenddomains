@extends('layouts.app')
@section('content')

<!-- Page header section start -->
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/blog-detail-header.png')}}" alt="{{config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Recent News</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Recent News</li>
            </ol>
          </nav>
    </div>
</section>
<!-- Page header section end -->

<!-- Recent News section start -->
<section class="Terms-section pt-120 pb-120">
    <div class="container">
        <div class="section-header mb-4">
            <h2 class="pb-2 text-center"> {{ $news->title }}</h2>
        </div>
        <div class="terms-content">
            {!! $news->body !!}
        </div>
</section>
<!-- Recent News section end -->

@endsection
