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
        <div class="dt-container">
            <div class="domain-details">
                <p><strong>No:</strong> 1</p>
                <p><strong>Name:</strong> {{ $domain->name }}</p>
                <p><strong>Tags:</strong> {{ $domain->tags }}</p>
                <p><strong>Length:</strong> {{ $domain->length }}</p>
                <p><strong>Extension:</strong> {{ $domain->extension }}</p>
                <p><strong>Registrar:</strong> {{ $domain->registrar }}</p>
                <p><strong>Expiration Date:</strong> {{ $domain->exp_date }}</p>
                <p><strong>Registration Date:</strong> {{ $domain->reg_date }}</p>
                <p><strong>Pattern:</strong> {{ $domain->pattern }}</p>
                <p><strong>Bin:</strong> {{ $domain->bin }}</p>
                <p><strong>Min Offer:</strong> {{ $domain->min_offer }}</p>
                <p><strong>Floor USD:</strong> {{ $domain->floor_usd }}</p>
            </div>
        </div>
    </div>
   
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#domainsshow-table').DataTable({
                lengthChange: false,
                searching: false,
                paging: false,
                info: false,
                scrollX: true,
                order: []
            });
        });
    </script>
@endsection
