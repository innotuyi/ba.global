@extends('layouts.app')

@section('content')
    <div class="hero">
        <h1>Laboratory Services</h1>
        <p>Our laboratory services include:</p>
        <ul style="list-style: none; padding: 0;">
            <li><a href="{{ route('services.reagents') }}" style="color: #23d8fc;">Reagents</a></li>
            <li><a href="{{ route('services.lab_equipment') }}" style="color: #23d8fc;">Equipment</a></li>
            <li><a href="{{ route('services.consumables') }}" style="color: #23d8fc;">Consumables</a></li>
        </ul>
    </div>
@endsection