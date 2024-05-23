<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
     <!-- Favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/img/logo/favicon.png') }}" type="image/x-icon" />
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
     <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
     <!-- Custom Styles -->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
</head>
<body>
<!-- header start -->
<header class="Header-1">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.png') }}"
                    alt="{{ config('app.name') }}" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        @php  $categories = App\Models\DomainCategory::where('is_delete',0)->latest()->get();  @endphp
                        <ul class="dropdown-menu">
                            @if ($categories->count() > 0)
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li> @endforeach
                            @endif
                        </ul>
                    </li>
                    <li class="nav-item">
    <a class="nav-link" aria-expanded="false" href="#">Premium Domain Names</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-expanded="false" href="{{ route('selldomain') }}">Sell Domains</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" aria-expanded="false" href="{{ route('domainauctions') }}">Auctions</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            @if (Auth::check())
                {{ Auth::user()->name }}
            @else
                Guest
            @endif
        </a>
        <ul class="dropdown-menu">
            @if (Auth::check())
                <li><a class="dropdown-item" href="{{ route('myaccount') }}">My account</a>
                </li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
            @else
                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a>
                </li>
                <li><a class="dropdown-item" href="{{ route('register') }}">Register</a>
                </li>
            @endif
        </ul>
    </li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <div class="d-flex right-btn">
        <a href="#" class="btn btn-primary">
            <img src="{{ asset('assets/img/home/bag.png') }}" />
        </a>
    </div>
    </div>
    </div>
    </nav>
    </header>
    <!-- header end -->
