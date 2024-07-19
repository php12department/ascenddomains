@extends('layouts.adminapp')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <div>Account Information</div>
                </div>
            </div>
        </div>
        <!-- Form to display admin info -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Admin Information</h5>
                        @foreach ($admin as $admin)
                            <form method="POST" action="{{ route('admin.my-account.update', $admin->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="admin_name">Name</label>
                                    <input type="text" class="form-control" id="admin_name" name="name"
                                        value="{{ $admin->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="admin_email">Email</label>
                                    <input type="email" class="form-control" id="admin_email" name="email"
                                        value="{{ $admin->email }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
