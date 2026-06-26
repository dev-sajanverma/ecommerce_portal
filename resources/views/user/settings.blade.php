@extends('user.layouts.main')

@push('title')
    <title>Dashboard - User</title>
@endpush

@section('content')
    <div class="container my-3 mx-3">
        <div class="card p-4">
            <div class="row">
                <div class="col-xl-8 col-md-8">
                    <h5>Account Setting</h5>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="John">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="Doe">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="John@gmail.com">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Phone</label>
                            <input type="email" class="form-control" placeholder="+91">
                        </div>
                        <div class="col-lg-3"><button class="btn btn-sm btn-primary">Save Changes</button></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 text-center mt-5">
                    <img src="{{ asset('dashboard/assets/img/user.png') }}" style="width: 100px" alt="">
                    <div class="mt-3">
                        <label class="form-label btn btn-primary" for="image">Choose Image</label>
                        <input type="file" class="form-control d-none" id="image">
                    </div>

                </div>
            </div>
        </div>
        <div class="card p-4 mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <h5>Billing Address</h5>
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
                                <input type="text" class="form-control"
                                    placeholder="Street Address (House No, Street Name)" required>
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
                                <button type="submit" class="btn btn-primary btn-sm">Save Changes</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
