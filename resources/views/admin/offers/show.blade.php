@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                    </div>
                    <div>Offer Details</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Offer Information</h5>
                        <dl class="row">
                            <dt class="col-sm-3">User:</dt>
                            <dd class="col-sm-9">{{ $offer->user->name }}</dd>

                            <dt class="col-sm-3">Domain:</dt>
                            <dd class="col-sm-9">{{ $offer->domain->name }}</dd>

                            <dt class="col-sm-3">Offer Price:</dt>
                            <dd class="col-sm-9">${{ $offer->offer }}</dd>

                            <dt class="col-sm-3">Status:</dt>
                            <dd class="col-sm-9">
                                @if ($offer->status == 'pending')
                                    <span class="badge badge-warning">Pending</span>
                                @elseif ($offer->status == 'accepted')
                                    <span class="badge badge-success">Accepted</span>
                                @elseif ($offer->status == 'declined')
                                    <span class="badge badge-danger">Declined</span>
                                @endif
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
