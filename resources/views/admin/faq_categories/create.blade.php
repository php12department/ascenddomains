@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div>Add New FAQ Category</div>
                </div>
            </div>
        </div>
        <form action="{{ route('admin.faqcategories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
