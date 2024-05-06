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
                        <i class="fa fa-globe"></i>
                    </div>
                    <div>Domains Categories</div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.domaincategories.create') }}" class="btn btn-primary">Add Category</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <table id="domaincategories-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $domaincategories)
                    <tr>
                        <td>{{ $domaincategories->id }}</td>
                        <td>{{ $domaincategories->name }}</td>
                        <td>
                            <a href="{{ route('admin.domaincategories.edit', $domaincategories->id) }}" class="btn btn-info">Edit</a>
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
            $('#domaincategories-table').DataTable({
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
