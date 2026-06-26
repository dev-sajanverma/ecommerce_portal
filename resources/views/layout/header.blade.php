<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Google Fonts se Lato Font ka link -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link
        href="https://googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;        1,700;1,900&display=swap"
        rel="stylesheet">


</head>

<body>

    <!-- // navbar start here -->
    <nav class="navbar navbar-expand-lg theme-navbar">
        <div class="container">
            <a class="navbar-brand text-light" href="{{ url('/') }}">E-commerce</a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <div class="mx-auto my-2 my-lg-0 w-100 w-lg-auto" style="max-width: 400px;">
                    <form class="d-flex" role="search">
                        <div class="input-group w-100">
                            <input class="form-control form-control-sm border-0 shadow-none" type="search"
                                placeholder="Search for products" aria-label="Search" />
                            <button class="btn btn-light btn-sm" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center gap-2 gap-lg-0">
                    <a href="{{ url('vendor/signup') }}"
                        class="text-decoration-none text-light me-lg-3 my-2 my-lg-0 text-sm">Become a
                        Seller</a>
                    <a href="{{ url('cart-list/product') }}"
                        class="btn theme-green-btn text-light btn-sm me-lg-2 w-100 w-lg-30"><i
                            class="fas fa-shopping-cart"></i> Cart</a>
                    <a href="{{ url('/login') }}" class="btn theme-orange-btn text-light btn-sm w-100 w-lg-30"><i
                            class="fa-solid fa-user"></i> Login</a>
                </div>

            </div>
        </div>
    </nav>
    <!-- // navbar end here -->

    <!-- category start here   -->
    <nav class="navbar p-0 shadow">
        <div class="container-fluid">
            <div class="w-100">

                <ul class="nav justify-content-center text-nowrap pb-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/phone') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Phone
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('category/Electronics/phone') }}">Oppo</a></li>
                            <li><a class="dropdown-item" href="#">Vivo</a></li>
                            <li><a class="dropdown-item" href="#">Sumsang</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/phone') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Fashion
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('category/Electronics/phone') }}">Shoe</a></li>
                            <li><a class="dropdown-item" href="#">Bugs</a></li>
                            <li><a class="dropdown-item" href="#">Clothes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/phone') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Electronics
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('category/Electronics/phone') }}">TV</a></li>
                            <li><a class="dropdown-item" href="#">Wshing machine</a></li>
                            <li><a class="dropdown-item" href="#">Watches</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/phone') }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Furniture
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('category/Electronics/phone') }}">Bed</a></li>
                            <li><a class="dropdown-item" href="#">Sofa</a></li>
                            <li><a class="dropdown-item" href="#">Table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/phone') }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Grocerry
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('category/Electronics/phone') }}">Atta</a></li>
                            <li><a class="dropdown-item" href="#">Oil</a></li>
                            <li><a class="dropdown-item" href="#">Surf</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="{{ url('category/phone') }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Appliances
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('category/Electronics/phone') }}">TV</a></li>
                            <li><a class="dropdown-item" href="#">Washing Machine</a></li>
                            <li><a class="dropdown-item" href="#">Refrigerators</a></li>
                        </ul>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('category/Electronics/phone') }}">Electronics</a>
                    </li> --}}


                </ul>
            </div>
        </div>
    </nav>

    <!-- category end here    -->
