@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Edit Blog Post</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Add the method spoofing for PUT request -->
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control @error('blog_name') is-invalid @enderror" id="title"
                            name="blog_name" value="{{ old('blog_name', $blog->blog_name) }}">
                        @error('blog_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="owner_name">Owner Name:</label>
                        <input type="text" class="form-control @error('owner_name') is-invalid @enderror" id="owner_name"
                            name="owner_name" value="{{ old('owner_name', $blog->owner_name) }}">
                        @error('owner_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                            name="date" value="{{ old('date', $blog->date) }}">
                        @error('date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control-file @error('blog_img') is-invalid @enderror" id="image" name="blog_img">
                        @error('blog_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <input type="file" class="form-control-file @error('blog_img') is-invalid @enderror"
                            id="image" name="blog_img">
                        @error('blog_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <img src="{{ asset('assets/img/blog/' . $blog->blog_img) }}" alt="Blog Image" width="150">
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $blogDetail->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="is_hide">Hide Blog:</label>
                        <input type="checkbox" id="is_hide" name="is_hide" value="1"
                            @if (old('is_hide', $blog->is_hide)) checked @endif>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    document.getElementById('content').value = editor.getData();
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
