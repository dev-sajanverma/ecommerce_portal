@extends('user.layouts.main')

@push('title')
    <title>Order History</title>
@endpush

@section('content')
    <div class="container-fluid px-4">

        <div class="row my-5">
            <h6>Order Details : Dec 25, 2026. (3 Products)</h6>
            <div class="col-xl-5 col-md-5 mt-3 border border-primary p-3 me-5">
                <h5 class="text-dark">Billing Address</h5>
                <span class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ut vel quidem
                    pariatur nemo?</span>
                <br>
                <span class="text-dark"><strong>Email</strong> : John@email.com</span><br>
                <span class="text-dark"><strong>Phone</strong> : +91 7575757589 </span>
            </div>
            <div class="col-xl-5 col-md-5 mt-3 border border-primary p-3">
                <h5 class="text-dark">Order Summary</h5>
                <span class="text-dark"><strong>Order Id </strong>001</span>
                <br>
                <span class="text-dark"><strong>Payment Method</strong> : Cash On Delivery</span><br>
                <span class="text-dark"><strong>Subtotal</strong> : 100</span><br>
                <span class="text-dark"><strong>Discount</strong> : 20%</span><br>
                <span class="text-dark"><strong>Shiping fee</strong> : free</span><br>
                <span class="text-dark"><strong>Total</strong> : 100</span><br>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="position-relative m-4">
                    <!-- Progress Bar Line -->
                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="100" aria-valuemin="0"
                        aria-valuemax="100" style="height: 1px;">
                        <div class="progress-bar" style="width: 100%"></div>
                    </div>

                    <!-- Step 1 (शुरुआत में - 0%) -->
                    <button type="button"
                        class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill d-flex align-items-center justify-content-center"
                        style="width: 2rem; height:2rem;">1</button>

                    <!-- Step 2 (एक तिहाई पर - 33.33%) -->
                    <button type="button"
                        class="position-absolute top-0 start-33 translate-middle btn btn-sm btn-primary rounded-pill d-flex align-items-center justify-content-center"
                        style="width: 2rem; height:2rem; left: 33.33% !important;">2</button>

                    <!-- Step 3 (दो तिहाई पर - 66.66%) -->
                    <button type="button"
                        class="position-absolute top-0 start-66 translate-middle btn btn-sm btn-primary rounded-pill d-flex align-items-center justify-content-center"
                        style="width: 2rem; height:2rem; left: 66.66% !important;">3</button>

                    <!-- Step 4 (आखिर में - 100%) -->
                    <button type="button"
                        class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill d-flex align-items-center justify-content-center"
                        style="width: 2rem; height:2rem;">4</button>
                </div>

            </div>
            <div class="col-xl-12">
                <div class="d-flex">
                    <div class="p-2 flex-fill">Order Recieved</div>
                    <div class="p-2 flex-fill">Processing</div>
                    <div class="p-2 flex-fill">On The Way</div>
                    <div class="p-2 flex-fill">Diliverd</div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                <table class="table" id="datatablesSimple">
                    <thead>
                        <tr>
                            <th scope="col">Products</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">SubTotal</th>

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
                                2
                            </td>
                            <td>₹2000</td>

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
                            <td>3
                            </td>
                            <td>₹2000</td>

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
                            <td>5
                            </td>
                            <td>₹2000</td>

                        </tr>



                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
