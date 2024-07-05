@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div>{{ isset($newsItem) ? 'Edit News' : 'Add New News' }}</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ isset($newsItem) ? 'Edit News' : 'Add New News' }}</div>
                    <div class="card-body">
                        <form method="POST"
                            action="{{ isset($newsItem) ? route('admin.news.update', $newsItem->id) : route('admin.news.store') }}">
                            @csrf
                            @isset($newsItem)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ isset($newsItem) ? $newsItem->title : old('title') }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="3">{{ isset($newsItem) ? $newsItem->body : old('body') }}</textarea>
                                @error('body')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">{{ isset($newsItem) ? 'Update' : 'Add' }}
                                News</button>
                        </form>
                    </div>
                </div>
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
        CKEDITOR.replace('body', {
            filebrowserUploadUrl: "{{ route('ckeditor.newsupload', ['_token' => csrf_token()]) }}",
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
