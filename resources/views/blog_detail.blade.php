@extends('layouts.app')
@section('content')

<!-- Page header section start -->
<section class="Page-header">
    <div class="hero-image">
        <img src="{{ asset('assets/img/home/blog-detail-header.png')}}" alt="{{config('app.name') }}" />
    </div>
    <div class="ps-breadcrumb">
        <h2>Blog</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
    </div>
</section>
<!-- Page header section end -->

<!-- Blog section start -->
<section class="Blog-details pt-120 pb-120">
    <div class="container">
      @if(!empty($blog))
        <div class="section-header blog-header">
            <h2 class="pb-3">{{ $blog->blog_name}}</h2>
            <ul class="list-inline mb-4">
                <li class="list-inline-item">
                    <img src="{{ asset('assets/img/home/b1.png') }}" /> {{ $blog->owner_name }}
                </li>
                <li class="list-inline-item">
                    <img src="{{  asset('assets/img/home/b2.png')}}" /> {{ date('F d, Y', strtotime($blog->created_at)) }}
                </li>
                <li class="list-inline-item">
                    <img src="{{ asset('assets/img/home/b3.png') }}" /> {{ date('h:m a', strtotime($blog->created_at)) }}
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-8">
                 <div class="Blog-details-card-sec">
                      <div class="blog-image pb-4">
                        @if (file_exists(public_path("assets/img/blog/". $blog->blog_img)))
                          <img src="{{ asset("assets/img/blog/". $blog->blog_img) }}" class="rounded-4" >
                        @else
                          <img src="#" alt="{{config('app.name') }}" class="rounded-4"/>
                        @endif
                      </div>
                      <div class="blog-text">
                          {!! $blog->getBlogDetail->content !!}
                      </div>
                 </div>
            </div>
            <div class="col-lg-4">
                <div class="Blog-details-card-sec mb-5">
                    <form class="search-bar" action="{{ route('blog.search') }}" id="">
                         <input type="text" placeholder="Search" name="search" id="searchTerm" class="form-control" />
                         <button type="submit" value="" class="btn search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="Blog-details-card-sec">
                    <div class="sec-title">
                        <h4>Recent Post</h4>
                    </div>
                    <div class="Recent-post">
                        @if($recent_blogs->count() > 0)
                        @foreach($recent_blogs as  $recent_blog)

                        <div class="row mb-3">
                            <div class="col-lg-5 col-md-6">
                                <a href="{{ route('blogDetail',['id'=>$recent_blog->id]) }}">
                                    @if (file_exists(public_path("assets/img/blog/". $recent_blog->blog_img)))
                                    <img src="{{ asset("assets/img/blog/". $recent_blog->blog_img) }}" />
                                    @else
                                    <a href="#"><img src="#" alt="{{config('app.name') }}" /></a>
                                    @endif
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-6">
                            <h4>
                              <a href="{{ route('blogDetail',['id'=>$recent_blog->id]) }}" class="text-dark">
                               {{$recent_blog->blog_name}}
                              </a>
                            </h4>
                          </div>
                        </div>
                        @endforeach
                        @endif
                        {{-- <div class="row mb-2">
                          <div class="col-lg-5 col-md-6">
                              <a href="#">
                                  <img src="img/home/blog-image.png" />
                              </a>
                          </div>
                          <div class="col-lg-7 col-md-6">
                          <h4>
                            <a href="#" class="text-dark">
                              Nam venenatis tortor quis risus consectetur.
                            </a>
                          </h4>
                        </div> --}}
                      </div>
                  </div>
                </div>
            </div>
        </div>
        @else
        <div class="section-header blog-header">
          <h2 class="pb-3"></h2>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="Blog-details-card-sec">
                      <div class="blog-text" style="height: 300px">
                       <center> <h3>  No Blog Found. </h3> </center>
                      </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="Blog-details-card-sec mb-5">
                    <form class="search-bar" action="{{ route('blog.search') }}" id="">
                        <input type="text" placeholder="Search" name="search" id="searchTerm" class="form-control" />
                        <button type="submit" value="" class="btn search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="Blog-details-card-sec">
                    <div class="sec-title">
                        <h4>Recent Post</h4>
                    </div>
                    <div class="Recent-post">
                        @if($recent_blogs->count() > 0)
                        @foreach($recent_blogs as  $recent_blog)

                        <div class="row mb-3">
                            <div class="col-lg-5 col-md-6">
                                <a href="{{ route('blogDetail',['id'=>$recent_blog->id]) }}">
                                    @if (file_exists(public_path("assets/img/blog/". $recent_blog->blog_img)))
                                    <img src="{{ asset("assets/img/blog/". $recent_blog->blog_img) }}" />
                                    @else
                                    <a href="#"><img src="#" alt="{{config('app.name') }}" /></a>
                                    @endif
                                </a>
                            </div>
                            <div class="col-lg-7 col-md-6">
                            <h4>
                              <a href="{{ route('blogDetail',['id'=>$recent_blog->id]) }}" class="text-dark">
                              {{$recent_blog->blog_name}}
                              </a>
                            </h4>
                          </div>
                        </div>
                        @endforeach
                        @endif
                      </div>
                  </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
<!-- Blog section end -->

@endsection
