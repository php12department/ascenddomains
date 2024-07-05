@extends('layouts.adminapp')
@section('content')
    <style>
        .bg-custom {
            background-color: #333;
            /* Dark Gray Background */
            color: #fff;
            /* White Text */
        }

        .widget-heading {
            color: #ccc;
            /* Light Gray Heading Text */
        }

        .widget-numbers {
            color: #fff;
            /* White Numbers Text */
        }
    </style>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div>Dashboard</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-custom">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Domain</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>{{ $domainCount }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-custom">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Clients</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>{{ $userCount }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-custom">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total FAQ</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>{{ $faqCount }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3 widget-content bg-custom">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Blog</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers"><span>{{ $blogCount }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
