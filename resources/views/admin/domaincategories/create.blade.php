@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Create New Domain Category</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('admin.domaincategories.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('admin.domaincategories.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection