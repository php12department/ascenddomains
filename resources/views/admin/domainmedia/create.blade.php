@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Add Domain Media</div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('admin.domainmedia.store') }}" method="POST" enctype="multipart/form-data">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="domain_id">Select Domain</label>
                    <select name="domain_id" id="domain_id" class="form-control" required>
                        <option value="" disabled selected>Select Domain</option>
                        @foreach ($domains as $domain)
                            <option value="{{ $domain->id }}">{{ $domain->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="media_img">Media Image</label>
                    <input type="file" class="form-control" name="media_img" id="media_img" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Media</button>
            </form>
        </div>
    </div>
@endsection
