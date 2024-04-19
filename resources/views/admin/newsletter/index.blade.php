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
                    <div>News letter</div>
                </div>
            </div>
        </div>
        <table id="subscriber-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribers as $key => $subscriber)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $subscriber->email }}</td>
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
