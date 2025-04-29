<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $categoryName }} - BA Global</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle active" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
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
                                                <li><a class="dropdown-item {{ request()->is(Str::slug($productType)) ? 'active' : '' }}" href="{{ url('/' . Str::slug($productType)) }}">{{ ucfirst($productType) }}</a></li>
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
                </ul>
            </div>
        </div>
    </nav>

    <section class="card-section">
        <h2>{{ $categoryName }}</h2>
        <div class="container">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 col-sm-6">
                        <div class="modern-card">
                            @if ($product->image_url)
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}" loading="lazy">
                            @else
                                <img src="{{ asset('image/default-product.png') }}" alt="Default Product Image" loading="lazy">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="https://wa.me/+250785530789?text=Hello,%20I’m%20interested%20in%20the%20{{ $product->name }}." class="whatsapp-btn" target="_blank">Contact via WhatsApp</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p>No equipment available in this category.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <footer>
        <p>© 2025 BA Global. All Rights Reserved.</p>
        <div>
            <a href="{{ url('/') }}">Home</a> |
            <a href="#">Services</a> |
            <a href="#">Contact</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>