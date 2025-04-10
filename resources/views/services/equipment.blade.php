@extends('layouts.app')

@section('content')
    <div class="hero">
        <h1>Medical Equipment</h1>
        <p>Our medical equipment includes:</p>
        <ul style="list-style: none; padding: 0;">
            <li><a href="{{ route('services.beds') }}" style="color: #23d8fc;">Beds</a></li>
            <li><a href="{{ route('services.machines') }}" style="color: #23d8fc;">Machines</a></li>
            <li><a href="{{ route('services.others') }}" style="color: #23d8fc;">Others</a></li>
        </ul>
    </div>
@endsection