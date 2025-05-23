<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BA Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashbooard.css') }}">
</head>
<body>
    <div class="corner-circles-wrapper"></div>
    <div class="corner-circles-wrapper-2"></div>

    <div class="logo-section">
        <img src="{{ asset('image/logo.png') }}" alt="BA Global Logo" loading="lazy">
        <h1>BA Global<br><span>Health First</span></h1>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <div class="dropdown-menu dropdown-mega p-4" aria-labelledby="servicesDropdown">
                            <div class="row">
                                @php
                                    $medicalCategories = \App\Models\Category::whereIn('name', ['Physiotherapy', 'Laboratory', 'Furniture'])->get();
                                @endphp
                                @foreach ($medicalCategories as $medicalCategory)
                                    <div class="col-md-3">
                                        <h5>{{ $medicalCategory->name }}</h5>
                                        <ul class="list-unstyled">
                                            @foreach ($medicalCategory->products()->distinct('product_type')->pluck('product_type') as $productType)
                                                <li><a class="dropdown-item" href="{{ url('/' . Str::slug($productType)) }}">{{ ucfirst($productType) }}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                                <div class="col-md-3">
                                    <h5>Non Medical</h5>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">Service A</a></li>
                                        <li><a class="dropdown-item" href="#">Service B</a></li>
                                        <li><a class="dropdown-item" href="#">Service C</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
                        <ul class="dropdown-menu" aria-labelledby="contactsDropdown">
                            <li><a class="dropdown-item" href="#">Email</a></li>
                            <li><a class="dropdown-item" href="#">Telephone</a></li>
                            <li><a class="dropdown-item" href="#">Contact Person</a></li>
                        </ul>
                    </li>
                    @if (session('user'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @if (session('success'))
        <div class="alert alert-success text-center" style="background-color: #00C4B4; color: #ffffff;">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger text-center" style="background-color: #FF5733; color: #ffffff;">
            {{ session('error') }}
        </div>
    @endif

    @yield('content')

    <footer>
        <p>© 2025 BA Global. All Rights Reserved.</p>
        <div>
            <a href="{{ url('/') }}">Home</a> |
            <a href="#">Services</a> |
            <a href="#">Contact</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard.js')}}"></script>
</body>
</html>