@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div>Edit FAQ Category</div>
                </div>
            </div>
        </div>
            <form method="POST" action="{{ route('admin.faqcategories.update', $faqcategory->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ $faqcategory->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
