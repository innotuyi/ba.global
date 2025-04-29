@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="product-detail">
        <div class="product-images">
            <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}">
        </div>
        <div class="product-info">
            <h1>{{ $product->name }}</h1>
            <div class="product-description">
                {!! $product->description !!}
            </div>
            <a href="{{ $product->whatsapp_link }}" class="btn btn-primary">Contact via WhatsApp</a>
        </div>
    </div>

    @if($relatedProducts->count())
    <section class="related-products">
        <h2>Related Products</h2>
        <div class="product-grid">
            @foreach($relatedProducts as $product)
                @include('partials.product-card', ['product' => $product])
            @endforeach
        </div>
    </section>
    @endif
@endsection