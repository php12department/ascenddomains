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
            <div id="editor"></div>
            <input type="hidden" id="content" name="content" value="{{ $staticPage->content }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editor.setData(`{!! $staticPage->content !!}`);
            editor.model.document.on('change:data', () => {
                document.getElementById('content').value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
