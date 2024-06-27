@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/auction-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>Auctions</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Auctions</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->

    <!-- Premium Domain section start -->
    <section class="Premium-domain pt-120 pb-120">
        <div class="container">
            <div class="section-header">
                <h2>Domain Auctions</h2>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <aside class="sidebar mb-4">
                        <div class="sec-title">
                            <h4>Domain Auctions</h4>
                        </div>
                        <ul class="list-inline">
                            <li><a href="#">Active Auctions</a></li>
                            <li><a href="#">Featured Auctions</a></li>
                            <li><a href="#">Upcoming Auctions</a></li>
                            <li><a href="#">Closed Auctions</a></li>
                        </ul>
                    </aside>
                    <aside class="sidebar">
                        <div class="sec-title">
                            <h4>Top Sales</h4>
                        </div>
                        <ul class="list-inline">
                            <li class="list-item gray-column">
                                <p>Domain Name</p><span class="text-end">Closing Price</span>
                            </li>
                            <li class="list-item white-column">
                                <p>gold</p><span class="text-end">26000</span>
                            </li>
                            <li class="list-item white-column">
                                <p>online-trading.in</p><span class="text-end">1000</span>
                            </li>
                            <li class="list-item white-column">
                                <p>indianipoblog.com</p><span class="text-end">456</span>
                            </li>
                            <li class="list-item white-column">
                                <p>seoppcguru.in</p><span class="text-end">200</span>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="Domain-datatable">
                        {{-- <div class="select-range">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select a Range</option>
                                <option value="1">500</option>
                                <option value="2">600</option>
                                <option value="3">700</option>
                            </select>
                        </div> --}}
                        <table id="domain_auctions" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Domain Name</th>
                                    <th>Details</th>
                                    <th>Price</th>
                                    <th>Max Bid</th>
                                    <th>No. of Bids</th>
                                    <th>Make Offer</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($domains as $domain)
                                    <tr>
                                        <td>{{ $domain->name }}</td>
                                        <td>
                                            <strong>Pattern:</strong> {{ $domain->pattern ?? 'N/A' }}<br>
                                            <strong>Tags:</strong> {{ $domain->tags ?? 'N/A' }}
                                        </td>
                                        <td>{{ $domain->price ?? 'N/A' }}</td>
                                        <td>{{ $domain->max_bid ?? 'N/A' }}</td>
                                        <td>{{ $domain->number_of_bids ?? 'N/A' }}</td>
                                        <td>
                                            <div class="data-btn">
                                                <a href="#" class="btn btn-primary make-btn">Make Offer</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="data-btn">
                                                <a href="#" class="btn btn-secondary view-btn">View</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Premium Domain section end -->
@endsection
@section('scripts')
    <script>
        // Domain listing in admin panel
        //$(document).ready(function() {
        $('#domain_auctions').DataTable({
            paging: true,
            searching: true,
            lengthChange: false,
            info: true,
            scrollX: true,
            order: [],
            language: {
                paginate: {
                    next: '&raquo;',
                    previous: '&laquo;'
                },
                search: '<i class="fa fa-search"></i>'
            }
        });
        //  });
    </script>
@endsection
