@extends('layouts.adminapp')

@section('content')
    <style>
        div.dt-container {
            width: 1000px;
            margin: 0 auto;
        }
    </style>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Edit Static Page</div>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('admin.StaticPage.update', $staticPage->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $staticPage->name }}">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea name="content" id="editor">{{ $staticPage->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
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
            filebrowserUploadUrl: "{{ route('ckeditor.staticpageupload', ['_token' => csrf_token()]) }}",
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
