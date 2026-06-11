@extends('layout.main')
@push('title')
<title>Category Page</title>
@endpush

@section('content')
<div class="container-fluid p-lg-5 p-2 bg-light">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Category</h1>
</div>

<!-- product section start here   -->
<section class="py-3 ">
    <div class="container">
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
            <div class="col-lg-3 col-md-6 col-12 mb-3">
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
            <div class="col-lg-3 col-md-6 col-12 mb-3">
                <div class="card overflow-hidden ">
                    <a href="#" class="text-decoration-none">
                        <img src="{{ asset('assets/images/products/5.jpg') }}" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none text-dark">
                            <h6 class="card-title text-center"> Camera</h6>
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
                            <h6 class="card-title text-center">Leather shoe</h6>
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
                    <div class="card-body">
                        <a href="#" class="text-decoration-none text-dark">
                            <h6 class="card-title text-center">LED</h6>
                        </a>
                        <h4 class="card-title text-center">$99.99</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-3">
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
<!-- product section end here    -->
@endsection