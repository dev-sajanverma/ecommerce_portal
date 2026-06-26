@extends('layout.main')
@push('title')
    <title>Cart-list Page</title>
@endpush
@section('content')
    <div class="container-fluid p-lg-5 p-2 bg-light">
        <h1 class="text-center"> <i class="fas fa-shopping-cart"></i> Cart List</h1>
    </div>

    <!-- cart list page start here  -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Products</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub Total</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-0">
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/1.jpg') }}" style="width:70px"
                                                alt="">
                                        </div>
                                        <div class="p-2">
                                            <h6>Shoe</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>₹1000</td>
                                <td>
                                    <div class="d-flex mb-3 flex-row align-items-center">
                                        <div class="P-2">
                                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="">01</span>
                                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i
                                                    class="fa-solid fa-plus"></i></span>

                                        </div>

                                    </div>
                                </td>
                                <td>₹2000</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/2.jpg') }}" style="width:70px"
                                                alt="">
                                        </div>
                                        <div class="p-2">
                                            <h6>Apple Watch</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>₹1000</td>
                                <td>
                                    <div class="d-flex mb-3 flex-row align-items-center">
                                        <div class="P-2">
                                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="">01</span>
                                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i
                                                    class="fa-solid fa-plus"></i></span>

                                        </div>
                                </td>
                                <td>₹2000</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>
                            <tr>
                                <td class="p-0">
                                    <div class="d-flex">
                                        <div>
                                            <img src="{{ asset('assets/images/products/3.jpg') }}" style="width:70px"
                                                alt="">
                                        </div>
                                        <div class="p-2">
                                            <h6>Cap</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>₹1000</td>
                                <td>
                                    <div class="d-flex mb-3 flex-row align-items-center">
                                        <div class="P-2">
                                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i
                                                    class="fa-solid fa-minus"></i></span>
                                            <span class="">01</span>
                                            <span class="btn btn-secondary btn-sm rounded-end-pill"><i
                                                    class="fa-solid fa-plus"></i></span>

                                        </div>
                                </td>
                                <td>₹2000</td>
                                <td><button type="button" class="btn-close" aria-label="Close"></button></td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="col-lg-5 ms-auto">
                        <div>
                            <h3>Price Details</h3>
                            <hr>
                        </div>
                        <div class="d-flex">
                            <div>
                                <h6>Subtotal</h6>
                            </div>
                            <div class="ms-auto">
                                <h6>₹6000</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div>
                                <h6>Discount</h6>
                            </div>
                            <div class="ms-auto">
                                <h6>₹600</h6>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div>
                                <h6>Delivery Charges</h6>
                            </div>
                            <div class="ms-auto">
                                <h6>free</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex">
                            <div>
                                <h6>Total</h6>
                            </div>
                            <div class="ms-auto">
                                <h6>₹5400</h6>
                            </div>
                        </div>
                        <div class="d-grid mt-3">
                            <a href="{{ url('checkout/check') }}" class="btn btn-primary">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- cart list page end here -->
@endsection
