@extends('layout.main')
@push('title')
<title>Cart-list Page</title>
@endpush
@section('content')

<div class="container-fluid p-lg-5 p-2 bg-light">
    <h1 class="text-center"> <i class="fas fa-shopping-cart"></i> Checkout</h1>
</div>

<!-- billing page start here  -->
<section class="checkout">
    <div class="container">
        <div class="row">
            <h3 class="mt-3">Billing Details</h3>
            <div class="col-lg-12">
                <form action="">
                    <div class="row">
                        <!-- Country Select (Full Width) -->
                        <div class="col-12 mb-3">
                            <select name="country" id="country" class="form-control" required>
                                <option value="">Select Country</option>
                                <option value="BD">Bangladesh</option>
                                <option value="IN">India</option>
                                <option value="PK">Pakistan</option>
                            </select>
                        </div>

                        <!-- Name Fields (Side by Side) -->
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Enter First Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Enter Last Name" required>
                        </div>

                        <!-- Contact Fields (Side by Side) -->
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Enter Phone" required>
                        </div>

                        <!-- Billing: Street Address (Full Width) -->
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" placeholder="Street Address (House No, Street Name)" required>
                        </div>

                        <!-- Billing: State Select (Side by Side) -->
                        <div class="col-md-6 mb-3">
                            <select name="state" id="state" class="form-control" required>
                                <option value="">Select State / Region</option>
                                <option value="DL">Delhi</option>
                                <option value="MH">Maharashtra</option>
                                <option value="KA">Karnataka</option>
                                <!-- Aap apne hisab se aur states add kar sakte hain -->
                            </select>
                        </div>

                        <!-- Billing: City Select (Side by Side) -->
                        <div class="col-md-6 mb-3">
                            <select name="city" id="city" class="form-control" required>
                                <option value="">Select City</option>
                                <option value="MUM">Mumbai</option>
                                <option value="DEL">New Delhi</option>
                                <option value="BLR">Bengaluru</option>
                                <!-- Aap apne hisab se aur cities add kar sakte hain -->
                            </select>
                        </div>

                        <!-- Billing: Postal / Zip Code -->
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Pin code" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-primary btn-sm">Submit Order</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- billing page end here -->

<section>
    <div class="container mt-4">
        <h3>Your Orders</h3>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
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
                                        <img src="{{ asset('assets/images/products/1.jpg') }}" style="width:70px" alt="">
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
                                        <img src="{{ asset('assets/images/products/2.jpg') }}" style="width:70px" alt="">
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
                                        <img src="{{ asset('assets/images/products/3.jpg') }}" style="width:70px" alt="">
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
                        <tr>
                            <th colspan="3">Total</th>
                            <th>₹2000</th>
                        </tr>


                    </tbody>
                </table>

            </div>
        </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        UPI
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Credit Card/Debit Card
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option2">
                    <label class="form-check-label" for="exampleRadios3">
                        Cash on Delivery
                    </label>
                </div>
                <div>
                    <button class="btn btn-primary mt-3 btn-sm">Place Order</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection