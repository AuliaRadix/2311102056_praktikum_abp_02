<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Inventori</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0,0,0,0.05);
        }
        .sidebar-link {
            color: #495057;
            text-decoration: none;
            padding: 10px 15px;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
            transition: all 0.3s;
        }
        .sidebar-link:hover, .sidebar-link.active {
            background-color: #0d6efd;
            color: white;
        }
        .navbar-brand-custom {
            font-weight: 700;
            color: #0d6efd;
        }
        .main-content {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3 d-none d-md-block">
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-box-seam fs-3 text-primary me-2"></i>
                    <span class="fs-4 navbar-brand-custom">Inventory</span>
                </div>
                <hr>
                <div class="nav flex-column">
                    <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2 me-2"></i> Dasbor
                    </a>
                    <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->routeIs('products.*') ? 'active' : '' }}">
                        <i class="bi bi-box me-2"></i> Produk
                    </a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-0">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4 py-3">
                    <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="ms-auto d-flex align-items-center">
                        <span class="me-3">{{ Auth::user()->name ?? 'Admin' }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-box-arrow-right"></i> Keluar
                            </button>
                        </form>
                    </div>
                </nav>

                <!-- Mobile Sidebar Collapse (Optional, keeping it simple for now) -->
                
                <!-- Content Area -->
                <div class="main-content">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
