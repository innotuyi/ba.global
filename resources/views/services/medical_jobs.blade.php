@extends('layouts.app')

@section('content')
    <div class="hero">
        <h1>Medical Jobs</h1>
        <p>Our medical services include:</p>
        <ul style="list-style: none; padding: 0;">
            <li><a href="{{ route('services.physiotherapy') }}" style="color: #23d8fc;">Physiotherapy</a></li>
            <li><a href="{{ route('services.laboratory') }}" style="color: #23d8fc;">Laboratory</a></li>
            <li><a href="{{ route('services.equipment') }}" style="color: #23d8fc;">Equipment</a></li>
        </ul>
    </div>
@endsection