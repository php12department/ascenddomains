@extends('layouts.adminapp')

@section('content')

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
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ isset($faq) ? 'Edit FAQ' : 'Add New FAQ' }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ isset($faq) ? route('admin.faqs.update', $faq->id) : route('admin.faqs.store') }}">
                            @csrf
                            @isset($faq)
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" id="question" name="question" value="{{ isset($faq) ? $faq->question : old('question') }}">
                                @error('question')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="answer">Answer</label>
                                <textarea class="form-control" id="answer" name="answer" rows="3">{{ isset($faq) ? $faq->answer : old('answer') }}</textarea>
                                @error('answer')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <button type="submit" class="btn btn-primary">{{ isset($faq) ? 'Update' : 'Add' }} FAQ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
