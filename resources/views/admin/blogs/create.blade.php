@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Create New Blog Post</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control @error('blog_name') is-invalid @enderror" id="title"
                            name="blog_name" value="{{ old('blog_name') }}">
                        @error('blog_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="owner_name">Owner Name:</label>
                        <input type="text" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name"
                            name="owner_name" value="{{ old('owner_name') }}">
                        @error('owner_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                            name="date" value="{{ old('date', date('Y-m-d')) }}">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control-file @error('blog_img') is-invalid @enderror"
                            id="image" name="blog_img">
                        @error('blog_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="editor" name="content">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_hide">Hide Blog:</label>
                        <input type="checkbox" id="is_hide" name="is_hide" value="1"
                            @if (old('is_hide')) checked @endif>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.warn = function() {};
        console.error = function() {};
    </script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "{{ route('ckeditor.blogupload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form',
            on: {
                instanceReady: function(evt) {
                    this.on('notificationShow', function(ev) {
                        ev.cancel(); // Prevents all notifications
                    });
                }
            }
        });
    </script>
@endsection
