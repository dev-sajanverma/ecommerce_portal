@extends('layout.main')
@push('title')
    <title>Home Page</title>
@endpush
@section('content')
    <!-- slider start here  -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slider1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider2.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider3.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slider4.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider end here    -->


    <!-- product section start here   -->
    <section class="py-3 pt-lg-5 ">
        <div class="container">
            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2 class="mb-3">Top Deals</h2>
                </div>
                <div class="p-2">
                    <a href="{{ url('category/Electronics') }}"
                        class="text-decoration-none text-sm text-light btn btn-success btn-sm">View All</a>
                </div>

            </div>
            <div class="row theme-products">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/1.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Cumpus Shoes</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Apple Watch</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/3.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body overflow-hidden ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Nike Cap</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/4.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Wooden Chair</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end here    -->


    <!-- Best of Electronics section start here     -->
    <section class="py-3  ">
        <div class="container">
            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2 class="mb-3">Best of Electronics</h2>
                </div>
                <div class="p-2">
                    <a href="{{ url('category/Electronics') }}"
                        class="text-decoration-none text-sm text-light btn btn-success btn-sm">View All</a>
                </div>

            </div>
            <div class="row theme-products">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/2.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Apple Watch</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Camera</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-7">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body overflow-hidden ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">LED</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Washing Machine</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Best of Electronics section end here      -->

    <!-- Popular categories section start here      -->
    <section class="py-3  ">
        <div class="container">
            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2 class="mb-3">Popular Categories</h2>
                </div>
                <div class="p-2">
                    <a href="{{ url('category/Electronics') }}"
                        class="text-decoration-none text-sm text-light btn btn-success btn-sm">View All</a>
                </div>

            </div>
            <div class="row theme-products">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/9.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Hand Bag</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/10.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Laptop bag</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-7">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body overflow-hidden ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">LED</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Washing Machine</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular categories section end here     -->

    <!-- Recently-viewed section start here    -->
    <section class="py-3 pb-lg-5 ">
        <div class="container">
            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <h2 class="mb-3">Related Products</h2>
                </div>
                <div class="p-2">
                    <a href="{{ url('category/Electronics') }}"
                        class="text-decoration-none text-sm text-light btn btn-success btn-sm">View All</a>
                </div>

            </div>
            <div class="row theme-products">
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Camera</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/6.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Leather Shoes</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-3">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/7.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body overflow-hidden ">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">LED</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 ">
                    <div class="card overflow-hidden ">
                        <a href="#" class="text-decoration-none">
                            <img src="{{ asset('assets/images/products/8.jpg') }}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none text-dark">
                                <h6 class="card-title text-center">Washing Machine</h6>
                            </a>
                            <h4 class="card-title text-center">$99.99</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recently-viewed section end here  -->
@endsection
