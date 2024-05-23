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
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div>News</div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Add New News</a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table id="news-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    {{-- <th>Body</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $key => $newsItem)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $newsItem->title }}</td>
                        {{-- <td>{{ $newsItem->body }}</td> --}}
                        <td>
                            <a href="{{ route('admin.news.edit', $newsItem->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('admin.news.destroy', $newsItem->id) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this news item?')">Delete</button>
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
            $('#news-table').DataTable({
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
