@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <section class="card-section">
        <h2>Login</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="modern-card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                    @error('username')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    @error('password')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="whatsapp-btn">Login</button>
                            </form>
                            <p class="mt-3">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection