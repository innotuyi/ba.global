<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @yield('styles')
</head>
<body class="dashboard-body">
    <div class="dashboard-wrapper">
        <aside class="dashboard-sidebar">
            <div class="sidebar-header">
                <div class="logo-section">
                    <img src="{{ asset('image/logo.png') }}" alt="BA Global Logo" loading="lazy">
                    <h1>BA Global<br><span>Admin Panel</span></h1>
                </div>
            </div>
           
            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-item {{ request()->is('admin/products*') ? 'active' : '' }}">
                        <a class="nav-link" data-bs-toggle="collapse" href="#productsCollapse" role="button">
                            <i class="fas fa-box-open"></i>
                            <span>Products</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin/products*') ? 'show' : '' }}" id="productsCollapse">
                            <ul class="submenu">
                                <li><a href="{{ route('admin.products.index') }}" class="{{ request()->is('admin/products') ? 'active' : '' }}">All Products</a></li>
                                <li><a href="{{ route('admin.products.create') }}" class="{{ request()->is('admin/products/create') ? 'active' : '' }}">Add New</a></li>
                                <li><a href="{{ route('admin.categories.index') }}" class="{{ request()->is('admin/categories') ? 'active' : '' }}">Categories</a></li>
                            </ul>
                        </div>
                    </li>
                   
                    {{-- <li class="nav-item {{ request()->is('admin/services*') ? 'active' : '' }}">
                        <a class="nav-link" data-bs-toggle="collapse" href="#servicesCollapse" role="button">
                            <i class="fas fa-hand-holding-medical"></i>
                            <span>Services</span>
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <div class="collapse {{ request()->is('admin/services*') ? 'show' : '' }}" id="servicesCollapse">
                            <ul class="submenu">
                                <li><a href="{{ route('admin.services.index') }}">Manage Services</a></li>
                                <li><a href="{{ route('admin.equipment.index') }}" class="{{ request()->is('admin/equipment*') ? 'active' : '' }}">Equipment</a></li>
                                <li><a href="{{ route('admin.consumables.index') }}" class="{{ request()->is('admin/consumables*') ? 'active' : '' }}">Consumables</a></li>
                            </ul>
                        </div>
                    </li> --}}
                   
                    {{-- <li class="nav-item {{ request()->is('admin/navigation*') ? 'active' : '' }}">
                        <a href="{{ route('admin.navigation.index') }}" class="nav-link">
                            <i class="fas fa-bars"></i>
                            <span>Navigation</span>
                        </a>
                    </li> --}}
                   
                    {{-- <li class="nav-item {{ request()->is('admin/pages*') ? 'active' : '' }}">
                        <a href="{{ route('admin.pages.index') }}" class="nav-link">
                            <i class="fas fa-file-alt"></i>
                            <span>Pages</span>
                        </a>
                    </li> --}}
                   
                    {{--@if(auth()->user()->is_admin)--}}
                    <li class="nav-item {{ request()->is('admin/users*') ? 'active' : '' }}">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                     {{--@endif--}}
                   
                    <li class="nav-item {{ request()->is('admin/settings*') ? 'active' : '' }}">
                        <a href="{{ route('admin.settings') }}" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="dashboard-main">
            <header class="dashboard-header">
                <div class="header-left">
                    <button class="sidebar-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h2>@yield('page-title')</h2>
                </div>
               
                <div class="header-right">
                    <div class="notifications">
                        <a href="#" class="notification-icon">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </a>
                    </div>
                   
                    <div class="user-profile dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                             {{--<img src="{{ auth()->user()->avatar ?? asset('images/default-avatar.png') }}" alt="User Avatar">
                            <span>{{ auth()->user()->name }}</span>--}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('admin.profile') }}"><i class="fas fa-user"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.settings') }}"><i class="fas fa-cog"></i> Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>

            <div class="dashboard-content">
                @yield('content') {{-- This renders the content from home.blade.php --}}
            </div>
           
            <footer class="dashboard-footer">
                <p>© {{ date('Y') }} BA Global. All Rights Reserved.</p>
                <div class="footer-links">
                    <a href="{{ url('/') }}" target="_blank"><i class="fas fa-external-link-alt"></i> View Site</a>
                    <span>|</span>
                    <a href="{{ route('admin.settings') }}"><i class="fas fa-cog"></i> Settings</a>
                    <span>|</span>
                    <a href="{{ route('admin.help') }}"><i class="fas fa-question-circle"></i> Help</a>
                </div>
            </footer>
        </main>
    </div>

    <div class="corner-circles-wrapper"></div>
    <div class="corner-circles-wrapper-2"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    @yield('scripts')
</body>
</html>