@extends('vendor.includes.main')

@push('title')
    <title>Dashboard - Profile</title>
@endpush

@section('content')
    <div class="container my-3 px-3 px-sm-4">

        <div class="card p-4">
            <div class="row g-4 align-items-center">

                <div class="col-xl-8 col-md-7 order-2 order-md-1">
                    <h5 class="mb-3">Basic information</h5>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label">Identification Number</label>
                            <input type="text" class="form-control" placeholder="Pan/adhar">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Business Name</label>
                            <input type="text" class="form-control" placeholder="ABC PVT. LTD">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" placeholder="John Doe">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="John@gmail.com">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control" placeholder="+91">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-5 text-center order-1 order-md-2 mb-4 mb-md-0">
                    <img src="{{ asset('dashboard/assets/img/user.png') }}" class="img-fluid rounded-circle mb-3"
                        style="width: 120px; height: 120px; object-fit: cover;" alt="User Profile">
                    <div>
                        <label class="form-label btn btn-primary m-0" for="image">Choose Image</label>
                        <input type="file" class="form-control d-none" id="image">
                    </div>
                </div>

            </div>
        </div>

        <div class="card p-4 mt-4">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3">Business Information</h5>
                    <form action="">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="business_type" class="form-label">Business Type</label>
                                <select name="country" id="business_type" class="form-select" required>
                                    <option value="">Select Business Type</option>
                                    <option value="BD">Sports</option>
                                    <option value="IN">Corporate</option>
                                    <option value="PK">Real Estate</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">GST NO.</label>
                                <input type="text" class="form-control" placeholder="ABC123xyz" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Business Category</label>
                                <input type="text" class="form-control" placeholder="Deal In Clothes" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card p-4 mt-4">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3">Payment Information</h5>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Bank Account Number</label>
                                <input type="text" class="form-control" placeholder="74857437238" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="payment_method" class="form-label">Preferred Payment Method</label>
                                <select name="country" id="payment_method" class="form-select" required>
                                    <option value="">Select payment method</option>
                                    <option value="BD">Paypal</option>
                                    <option value="IN">Bank transfer</option>
                                    <option value="PK">E wallet</option>
                                </select>
                            </div>

                            <div class="col-12 mt-2">
                                <button class="btn btn-primary w-100 w-md-auto px-4">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
