@extends('dashboard')

@section('title', 'User Details')
@section('page-title', 'User Details')

@section('content')
<div class="dashboard-card">
    <div class="card-header">
        <h3>User Details</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h4>Basic Information</h4>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Role:</strong> {{ $user->is_admin ? 'Admin' : 'Regular User' }}</p>
                <p><strong>Created At:</strong> {{ $user->created_at->format('M d, Y H:i') }}</p>
                <p><strong>Last Updated:</strong> {{ $user->updated_at->format('M d, Y H:i') }}</p>
            </div>
            
            <div class="col-md-6">
                <h4>Actions</h4>
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary">
                        <i class="fas fa-edit"></i> Edit User
                    </a>
                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="d-grid">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            <i class="fas fa-trash"></i> Delete User
                        </button>
                    </form>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection