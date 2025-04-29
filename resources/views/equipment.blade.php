@extends('layouts.app')

@section('title', 'Physiotherapy Equipment')

@section('content')
    <!-- Card Section -->
    <section class="card-section">
        <h2>Physiotherapy Equipment</h2>
        <div class="container">
            <div class="row">
                @foreach ($equipment as $item)
                    <div class="col-md-4 col-sm-6">
                        <div class="modern-card">
                            <img src="{{ $item->image_url }}" alt="{{ $item->name }}" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <a href="{{ $item->whatsapp_link }}" class="whatsapp-btn" target="_blank">Contact via WhatsApp</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection