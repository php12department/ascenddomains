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
                    <div>Static Page</div>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table id="subscriber-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staticPages as $key => $staticPage)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $staticPage->name }}</td>
                        <td>
                            <a href="{{ route('admin.StaticPage.edit', $staticPage->id) }}" class="btn btn-primary">Edit</a>
                            <!-- Edit button -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    <script>
        // Domain listing in admin panel
        $(document).ready(function() {
            $('#subscriber-table').DataTable({
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
