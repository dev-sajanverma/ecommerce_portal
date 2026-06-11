@extends('layout.main')
@push('title')
<title>Product Detail Page</title>
@endpush
@section('content')

<div class="container-fluid p-lg-5 p-2 bg-light">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Product Detail</h1>
</div>

<section class="py-3 ">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{ asset('assets/images/products/7.jpg') }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-8 p-0 px-5">
                <div>
                    <h2 class="mb-3">LED</h2>
                    <h4 class="mb-3">$99.99</h4>
                    <div class="mb-1">
                        <h6>2 Customers Ratings</h6>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, enim molestiae? Amet omnis rerum dolorum blanditiis ut nemo soluta inventore, atque, ullam minima enim nisi accusamus officia dolor aliquam error?</p>
                    <div class="d-flex mb-3 flex-row align-items-center">
                        <div class="P-2">
                            <h6 class="px-2"> Quantity </h6>
                        </div>
                        <div class="P-2">
                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                            <span class="">01</span>
                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>

                        </div>

                    </div>
                    <div>
                        <a href="{{url('cart-list/product')}}" class="btn btn-success btn-sm">Add to Cart</a>
                        <a href="#" class="btn btn-primary btn-sm">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 mt-3">
            <h3>Product Description</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, enim molestiae? Amet omnis rerum dolorum blanditiis ut nemo soluta inventore, atque, ullam minima enim nisi accusamus officia dolor aliquam error?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, enim molestiae? Amet omnis rerum dolorum blanditiis ut nemo soluta inventore, atque, ullam minima enim nisi accusamus officia dolor aliquam error?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas, enim molestiae? Amet omnis rerum dolorum blanditiis ut nemo soluta inventore, atque, ullam minima enim nisi accusamus officia dolor aliquam error?</p>
        </div>


        <!-- Recently-viewed section start here    -->
        <section class="py-3">
            <div class="container">
                <div class="d-flex">
                    <div class="p-2 flex-grow-1">
                        <h2 class="mb-3">Related Products</h2>
                    </div>
                    <div class="p-2">
                        <a href="#" class="text-decoration-none text-sm text-light btn btn-primary btn-sm">View All</a>
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

        <section>
            <h4>02 Reviews</h4>
            <div class="row mt-4">
                <div class="col-lg-1"><img src="{{ asset('assets/images/user/user.png') }}" class="img-fluid rounded" alt=""></div>
                <div class="col-lg-11">

                    <div class="d-flex">
                        <div class="p-2 flex-grow-1">
                            <h5>rasmika</h5>
                            <h6 class="mb-3">Dec 15, 2023</h6>
                        </div>
                        <div class="p-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, delectus tempora sint fugit deleniti vel id reiciendis corporis. Neque, ea? Culpa accusamus ut assumenda sunt modi dignissimos totam aliquid magnam.</p>
                    <div>
                        <button class="btn btn-primary btn-sm">Reply</button>
                    </div>

                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-1"><img src="{{ asset('assets/images/user/user.png') }}" class="img-fluid rounded" alt=""></div>
                <div class="col-lg-11">

                    <div class="d-flex">
                        <div class="p-2 flex-grow-1">
                            <h5>John Doe</h5>
                            <h6 class="mb-3">Dec 15, 2023</h6>
                        </div>
                        <div class="p-2">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>

                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam, delectus tempora sint fugit deleniti vel id reiciendis corporis. Neque, ea? Culpa accusamus ut assumenda sunt modi dignissimos totam aliquid magnam.</p>
                    <div>
                        <button class="btn btn-primary btn-sm">Reply</button>
                    </div>

                </div>
            </div>
        </section>


        <!-- add a review start here  -->
        <section class="mt-5 container bg-light p-3">
            <div class="row">
                <h4>Add a Review</h4>
                <form action="">
                    <div class="form-text mb-2">
                        Rate this product:
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>


                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="review" class="form-label">Review</label>
                        <textarea class="form-control" id="review" rows="3" placeholder="Write your review here"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit Review</button>
                </form>
            </div>
            <!-- add a review end here   -->
            <hr>
    </div>
</section>
@endsection