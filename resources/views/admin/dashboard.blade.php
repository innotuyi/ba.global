@extends('dashboard')

@section('title', 'Dashboard Overview')
@section('page-title', 'Dashboard Overview')

@section('content')
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-box-open"></i>
            </div>
            <div class="stat-value">{{ $productCount }}</div>
            <div class="stat-label">Total Products</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-list"></i>
            </div>
            <div class="stat-value">{{ $categoryCount }}</div>
            <div class="stat-label">Categories</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-file-alt"></i>
            </div>
            <div class="stat-value">5</div> {{-- Keep your existing static data or fetch dynamically --}}
            <div class="stat-label">Pages</div>
        </div>

        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-value">3</div> {{-- Keep your existing static data or fetch dynamically --}}
            <div class="stat-label">Active Users</div>
        </div>
    </div>

    <div class="dashboard-card">
        <h3>Recent Activity</h3>
        <table class="dashboard-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Activity</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-06-15 14:30</td>
                    <td>Added new product "Therapy Massager"</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>2023-06-15 12:15</td>
                    <td>Updated category "Physiotherapy Equipment"</td>
                    <td>Admin</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection