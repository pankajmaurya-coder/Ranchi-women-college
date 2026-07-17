<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel Landing Page</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    font-family:Arial,Helvetica,sans-serif;
    background:#f5f7fb;
}

/* Navbar */

.navbar{
    background:#0d6efd;
}

.navbar-brand{
    color:#fff;
    font-weight:700;
    font-size:28px;
}

.navbar-brand:hover{
    color:#fff;
}

.nav-link{
    color:#fff;
    font-weight:500;
}

.nav-link:hover{
    color:#ffd54f;
}

/* Hero */

.hero{
    min-height:90vh;
    display:flex;
    align-items:center;
    background:linear-gradient(135deg,#0d6efd,#6610f2);
    color:white;
}

.hero h1{
    font-size:60px;
    font-weight:700;
}

.hero p{
    font-size:18px;
    margin:20px 0;
}

.hero img{
    width:100%;
}

/* Features */

.feature-card{
    border:none;
    border-radius:15px;
    transition:.3s;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.feature-card:hover{
    transform:translateY(-10px);
}

/* Footer */

footer{
    background:#111827;
    color:#fff;
}

</style>

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="#">
            Laravel
        </a>

        <button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto align-items-lg-center">

                <li class="nav-item">
                    <a href="#" class="nav-link">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Services</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>

                @if (Route::has('login'))

                    @auth

                        <li class="nav-item ms-lg-3">
                            <a href="{{ url('/dashboard') }}" class="btn btn-warning">
                                Dashboard
                            </a>
                        </li>

                    @else

                        <li class="nav-item ms-lg-3">
                            <a href="{{ route('login') }}" class="btn btn-light">
                                Login
                            </a>
                        </li>

                        @if (Route::has('register'))

                            <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                                <a href="{{ route('register') }}" class="btn btn-outline-light">
                                    Register
                                </a>
                            </li>

                        @endif

                    @endauth

                @endif

            </ul>

        </div>

    </div>
</nav>

<!-- Hero -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h1>
                    Build Amazing Laravel Applications
                </h1>

                <p>
                    A modern starter landing page with Bootstrap 5 and Laravel Breeze Authentication.
                </p>

                <a href="{{ route('login') }}" class="btn btn-warning btn-lg">
                    Get Started
                </a>

            </div>

            <div class="col-lg-6 text-center mt-5 mt-lg-0">

                <img src="https://cdn-icons-png.flaticon.com/512/2721/2721297.png" alt="Hero">

            </div>

        </div>

    </div>

</section>

<!-- Features -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2>Our Features</h2>

            <p>Everything you need to build your next Laravel project.</p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card feature-card p-4 text-center">

                    <h4>Fast</h4>

                    <p>
                        Optimized structure with Bootstrap and Laravel.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card feature-card p-4 text-center">

                    <h4>Secure</h4>

                    <p>
                        Laravel Breeze Authentication included.
                    </p>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card feature-card p-4 text-center">

                    <h4>Responsive</h4>

                    <p>
                        Works perfectly on desktop, tablet and mobile.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<footer class="py-4">

    <div class="container text-center">

        <h5>Laravel Landing Page</h5>

        <p class="mb-0">
            © {{ date('Y') }} All Rights Reserved.
        </p>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>