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
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div>FAQS</div>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary mb-3">Add New FAQ</a>
        <div class="table-responsive">
        <table id="faq-table" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $key => $faq)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        {{-- <td>{{ Illuminate\Support\Str::limit($faq->question, 20) }}</td>
                        <td>{{ Illuminate\Support\Str::limit($faq->answer, 50) }}</td> --}}
                        <td>{{ $faq->question }} </td>
                        <td>{{ $faq->answer }}</td>
                        <td>
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // Domain listing in admin panel
        $(document).ready(function() {
            $('#faq-table').DataTable({
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
