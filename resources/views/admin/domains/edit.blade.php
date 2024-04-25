@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div>Edit Domain</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{ route('admin.domains.update', $domain->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $domain->name }}"
                            disabled>
                    </div>
                    <div class="form-group">
                        <label for="domain_type">Domain Type:</label><br>
                        @foreach ($domainTypes as $type)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="domain_type" id="{{ $type->name }}"
                                    value="{{ $type->id }}" {{ $domain->type_id === $type->id ? 'checked' : '' }}>
                                <label class="form-check-label" for="{{ $type->name }}">{{ $type->name }}</label>
                            </div>
                        @endforeach
                    </div>                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
