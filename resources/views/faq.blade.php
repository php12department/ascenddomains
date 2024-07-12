@extends('layouts.app')

@section('content')
    <!-- Page header section start -->
    <section class="Page-header">
        <div class="hero-image">
            <img src="{{ asset('assets/img/home/faq-header.png') }}" alt="{{ config('app.name') }}" />
        </div>
        <div class="ps-breadcrumb">
            <h2>FAQ</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
            </nav>
        </div>
    </section>
    <!-- Page header section end -->
    <!-- FAQ section start -->
    <section class="Faq-section bg-white">
        <div class="container">
            <div class="section-header mb-4">
                <h2 class="pb-2">Frequently Asked Questions</h2>
                <p>While your biggest concern is making money, and we know that you will make money, we also know other
                    questions may arise.</p>
                <p class="theme-color">The answers you are searching for:</p>
            </div>
            <div class="accordion" id="accordionExample">
                @foreach ($categories as $category)
                    <div class="section-header d-flex justify-content-between">
                        <h4>{{ $category->name }}</h4>
                        <a href="#" id="toggle-category-{{ $category->id }}"
                            class="link blueLink toggle-category fs-5">Expand this section</a>
                    </div>
                    @foreach ($category->faqs as $faq)
                        <div class="accordion-item" data-category="{{ $category->id }}">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $faq->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $faq->id }}">
                                    <strong>{{ $faq->question }}</strong>
                                </button>
                            </h2>
                            <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- FAQ section end -->
    <script>
        document.querySelectorAll('.toggle-category').forEach(function(toggleLink) {
            toggleLink.addEventListener('click', function(e) {
                e.preventDefault();
                const categoryId = e.target.id.split('-')[2];
                const accordionItems = document.querySelectorAll(
                    `#accordionExample .accordion-item[data-category="${categoryId}"] .collapse`);
                const accordionButtons = document.querySelectorAll(
                    `#accordionExample .accordion-item[data-category="${categoryId}"] .accordion-button`
                    );
                let allExpanded = true;

                accordionItems.forEach(item => {
                    const collapseInstance = bootstrap.Collapse.getOrCreateInstance(item);
                    if (!item.classList.contains('show')) {
                        collapseInstance.show();
                        allExpanded = false;
                    } else {
                        collapseInstance.hide();
                    }
                });

                accordionButtons.forEach(button => {
                    if (!allExpanded) {
                        button.classList.remove('collapsed');
                    } else {
                        button.classList.add('collapsed');
                    }
                });

                e.target.textContent = allExpanded ? 'Expand this section' : 'Collapse this section';
            });
        });
    </script>
@endsection
