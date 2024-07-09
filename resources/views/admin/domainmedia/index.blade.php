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
                    <div>Domains Media</div>
                </div>
                <div class="page-title-actions">
                    <a href="{{ route('admin.domainmedia.create') }}" class="btn btn-primary">Add Media</a>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="table-responsive">
            <table id="domainmedia-table" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Domain Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($domainMedia as $index => $domainMediaitem)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $domainMediaitem->domain->name }}</td>
                            <td>
                                <a href="{{ route('admin.domainmedia.show', $domainMediaitem->id) }}"
                                    class="btn btn-success">Show</a>
                                <a href="{{ route('admin.domainmedia.edit', $domainMediaitem->id) }}"
                                    class="btn btn-info">Edit</a>
                                <form action="{{ route('admin.domainmedia.destroy', $domainMediaitem->id) }}" method="POST"
                                    style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this media?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
        </div>
        @endsection
        @section('scripts')
            <script>
                // Domain listing in admin panel
                $(document).ready(function() {
                    $('#domainmedia-table').DataTable({
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
