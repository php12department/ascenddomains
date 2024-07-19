@extends('layouts.adminapp')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                </div>
                <div>Domain Media Update</div>
            </div>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('admin.domainmedia.update', $domainMedia->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group">
                <label for="domain_id">Domain Name:</label>
                <p>{{ $domainMedia->domain->name }}</p>
                <input type="hidden" name="domain_id" value="{{ $domainMedia->domain->id }}">
            </div>
            <div class="form-group">
                <label for="media_img">Media Image:</label>
                <input type="file" class="form-control" name="media_img" id="media_img">
                <img src="{{ asset('assets/img/domains/'.$domainMedia->media_img) }}" alt="Current Image" style="height: 100px; width: auto;margin: 20px 0px;">
            </div>

            <button type="submit" class="btn btn-primary">Update Media</button>
            <a href="{{ route('admin.domainmedia') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection
