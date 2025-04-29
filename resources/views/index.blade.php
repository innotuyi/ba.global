@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Quality. Value. Service.</h1>
        <p>Small Business, Big Impact.</p>
    </section>

    <!-- Our Partners Section -->
    <section class="partners-section">
        <div class="container">
            <h2 class="section-title">Our Trusted Partners</h2>
            <p class="section-subtitle">Collaborating with industry leaders to deliver excellence</p>
            
            <div class="partners-grid">
                <!-- Partner 1 -->
                <div class="partner-card rectangular-logo">
                    <div class="partner-logo-container">
                        <img src="{{ asset('image/medical_private.jpg') }}" alt="Medical Private Logo" class="partner-logo">
                    </div>
                    <div class="partner-overlay">
                        <h3>Medical Private Ltd</h3>
                        <p>Premium medical equipment supplier</p>
                    </div>
                </div>
                
                <!-- Partner 2 -->
                <div class="partner-card rectangular-logo">
                    <div class="partner-logo-container">
                        <img src="{{ asset('image/surgical_instrument.jpg') }}" alt="Surgical Instruments Logo" class="partner-logo">
                    </div>
                    <div class="partner-overlay">
                        <h3>Surgical Instruments Co</h3>
                        <p>High-quality surgical tools provider</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection