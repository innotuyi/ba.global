@extends('layouts.app')

@section('content')
    <div class="hero">
        <h1>Our Services</h1>
        <p>Explore our wide range of medical and non-medical services.</p>
        <ul style="list-style: none; padding: 0;">
            <li><a href="{{ route('services.medical_jobs') }}" style="color: #23d8fc;">Medical Jobs</a></li>
            <li><a href="{{ route('services.non_medical') }}" style="color: #23d8fc;">Non-Medical</a></li>
        </ul>
    </div>
@endsection