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
                    <div>Domains</div>
                </div>
            </div>
        </div>
        <table id="domains-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Name Uppercase</th>
                    <th>Tags</th>
                    <th>Length</th>
                    <th>Extension</th>
                    <th>Registrar</th>
                    <th>Exp Date</th>
                    <th>Reg Date</th>
                    <th>Pattern</th>
                    <th>Bin</th>
                    <th>Min Offer</th>
                    <th>Floor USD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domains as $domain)
                    <tr>
                        <td>{{ $domain->id }}</td>
                        <td>{{ $domain->name }}</td>
                        <td>{{ $domain->name_uppercase }}</td>
                        <td>{{ $domain->tags }}</td>
                        <td>{{ $domain->length }}</td>
                        <td>{{ $domain->extension }}</td>
                        <td>{{ $domain->registrar }}</td>
                        <td>{{ $domain->exp_date }}</td>
                        <td>{{ $domain->reg_date }}</td>
                        <td>{{ $domain->pattern }}</td>
                        <td>{{ $domain->bin }}</td>
                        <td>{{ $domain->min_offer }}</td>
                        <td>{{ $domain->floor_usd }}</td>
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
                $('#domains-table').DataTable({
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
