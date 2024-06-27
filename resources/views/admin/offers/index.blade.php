@extends('layouts.adminapp')

@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="fa fa-dollar-sign" aria-hidden="true"></i>
                    </div>
                    <div>Offer Management</div>
                </div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table id="offer-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Domain</th>
                    <th>Offer Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offers as $key => $offer)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $offer->user->name }}</td>
                        <td>{{ $offer->domain->name }}</td>
                        <td>${{ $offer->offer }}</td>
                        <td>
                            @if ($offer->status == 'pending')
                                <span class="badge badge-warning">Pending</span>
                            @elseif ($offer->status == 'accepted')
                                <span class="badge badge-success">Accepted</span>
                            @elseif ($offer->status == 'declined')
                                <span class="badge badge-danger">Declined</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.offers.show', $offer->id) }}" class="btn btn-primary">View</a>
                            @if ($offer->status == 'pending')
                                <form action="{{ route('admin.offers.accept', $offer->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success">Accept</button>
                                </form>
                                <form action="{{ route('admin.offers.decline', $offer->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger">Decline</button>
                                </form>
                            @endif
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
            $('#offer-table').DataTable({
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
