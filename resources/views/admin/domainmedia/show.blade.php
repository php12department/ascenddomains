@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Domain Media Details</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Domain Information</h5>
                        <dl class="row">
                            <dt class="col-sm-4">Domain Name:</dt>
                            <dd class="col-sm-8">{{ $domainMedia->domain->name }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <h5 class="card-title">Media Details</h5>
                        <div class="text-center">
                            <img src="{{ asset('assets/img/domains/' . $domainMedia->media_img) }}" alt="Media Image"
                                class="img-fluid rounded" style=" height: 60%;width: 60%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('admin.domainmedia') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
