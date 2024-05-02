@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                    </div>
                    <div>Blog Posts</div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">Add Blog</a>
                </div>
            </div>
        </div>
        <table id="blog-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Owner</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $key => $blog)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $blog->blog_name }}</td>
                        <td>{{ $blog->owner_name }}</td>
                        <td>{{ $blog->date }}</td>
                        <td>
                            <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#blog-table').DataTable({
                paging: true,
                searching: true,
                lengthChange: false,
                info: true,
                scrollX: true,
                order: [],
                language: {
                    paginate: {
                        next: '&raquo;',
                        previous: '&laquo;'
                    },
                    search: '<i class="fa fa-search"></i>'
                }
            });
        });
    </script>
@endsection
